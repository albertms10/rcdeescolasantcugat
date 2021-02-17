<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Utils/send-mail.php';

$location = 'https://rcdeescolasantcugat.com/contacte/';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_header($location, new Exception('Request method must be POST'));
    return;
}

require_once ROOT . '/../src/Controller/MissatgeController.php';
require_once ROOT . '/../src/Utils/check-if-email.php';
require_once ROOT . '/../src/Utils/set-strict-error-handler.php';

session_start();

$_SESSION['nom'] = $_POST['nom'] ?? '';
$_SESSION['email'] = $_POST['email'] ?? '';
$_SESSION['missatge'] = $_POST['missatge'] ?? '';

if (check_if_email($_POST['nom'], $_POST['missatge'])) {
    header("Location: $location?res=invalid&contains-link");
    return;
}

RCDE\MissatgeController::postMissatge($_POST['nom'], $_POST['email'], $_POST['missatge']);

try {
    set_strict_error_handler();

    send_mail(
        error_location: $location,
        email: $_POST['email'],
        name: $_POST['nom'],
        subject: 'Nou missatge de contacte',
        message: $_POST['missatge'],
    );
} catch (Exception $e) {
    error_header($location, $e);
    return;
} finally {
    restore_error_handler();
}

session_destroy();
header("Location: $location?res=ok");
