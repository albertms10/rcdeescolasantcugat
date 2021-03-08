<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Utils/send-mail.php';
require_once ROOT . '/../translations/Structure.php';
$s = new RCDE\Translation\Structure();

session_start();
$location = $s->resolvedUrl('contact')['url'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_header($location, new Exception('Request method must be POST'));
    return;
}

require_once ROOT . '/../src/Controller/MissatgeController.php';
require_once ROOT . '/../src/Utils/check-if-email.php';
require_once ROOT . '/../src/Utils/set-strict-error-handler.php';

$_SESSION['nom'] = $_POST['nom'] ?? '';
$_SESSION['email'] = $_POST['email'] ?? '';
$_SESSION['missatge'] = $_POST['missatge'] ?? '';

if (check_if_email($_POST['nom'], $_POST['missatge'])) {
    header("Location: $location?res=invalid&contains-link");
    return;
}

$rows_affected = RCDE\Controller\MissatgeController::postMissatge($_POST['nom'], $_POST['email'], $_POST['missatge']);

if ($rows_affected === 0) {
    error_header($location, new Exception('An error occurred while posting the message'));
    return;
}

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

unset($_SESSION['nom']);
unset($_SESSION['email']);
unset($_SESSION['missatge']);
unset($_SESSION['err']);

header("Location: $location?res=ok");
