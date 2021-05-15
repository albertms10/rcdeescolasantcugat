<?php

use RCDE\Translation\Structure;

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Utils/send-mail.php';

$s = new Structure();
$location = $s->resolvedUrl('contact')['url'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_header($location, new Exception('Request method must be POST'));
    return;
}

require_once ROOT . '/../src/Utils/check-if-email.php';
require_once ROOT . '/../src/Utils/set-strict-error-handler.php';

require ROOT . '/../src/Utils/start-secure-session.php';

$nom = $_SESSION['nom'] = urldecode($_POST['nom']) ?? '';
$email = $_SESSION['email'] = urldecode($_POST['email']) ?? '';
$err = $_SESSION['err'] = urldecode($_POST['err']) ?? '';

if (check_if_email($nom)) {
    header("Location: $location?res=invalid&contains-link");
    return;
}

try {
    set_strict_error_handler();

    send_mail(
        error_location: $location,
        email: $email,
        name: $nom,
        subject: 'Un usuari ha comunicat un error',
        template: 'error',
        error_message: $err,
    );
} catch (Exception $e) {
    error_header($location, $e);
    return;
} finally {
    restore_error_handler();
}

header("Location: $location?res=err_sent");
