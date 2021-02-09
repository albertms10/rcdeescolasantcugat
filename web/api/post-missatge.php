<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Utils/send-mail.php';

$location = 'https://rcdeescolasantcugat.com/contacte/';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_header($location);
    return;
}

require_once ROOT . '/../src/Controller/MissatgeController.php';

session_start();

$_SESSION['nom'] = $_POST['nom'] ?? '';
$_SESSION['email'] = $_POST['email'] ?? '';
$_SESSION['missatge'] = $_POST['missatge'] ?? '';

$url_pattern = '/[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/';

if (
    preg_match($url_pattern, $_POST['nom'])
    || preg_match($url_pattern, $_POST['missatge'])
) {
    header("Location: $location?res=invalid&contains-link");
    return;
}

RCDE\MissatgeController::postMissatge($_POST['nom'], $_POST['email'], $_POST['missatge']);

send_mail(
    $_POST['email'],
    $_POST['nom'],
    $subject = 'Nou missatge de contacte',
    $message = $_POST['missatge'],
    $bccs = [
        // ['address' => 'fdoming3@xtec.cat', 'name' => 'Fco. Javier Domínguez'],
        ['address' => 'albertmasa2@gmail.com', 'name' => 'Albert Mañosa'],
    ],
    $template = 'contact',
    $error_location = $location,
);

session_destroy();
header("Location: $location?res=ok");
