<?php

use RCDE\Controller\MissatgeController;
use RCDE\Translation\Structure;

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
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
$missatge = $_SESSION['missatge'] = urldecode($_POST['missatge']) ?? '';

if (check_if_email($nom, $missatge)) {
    header("Location: $location?res=invalid&contains-link");
    return;
}

$rows_affected = MissatgeController::postMissatge($nom, $email, $missatge);

if ($rows_affected === 0) {
    error_header($location, new Exception('An error occurred while posting the message'));
    return;
}

try {
    set_strict_error_handler();

    send_mail(
        error_location: $location,
        email: $email,
        name: $nom,
        subject: 'Nou missatge de contacte',
        message: $missatge,
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
