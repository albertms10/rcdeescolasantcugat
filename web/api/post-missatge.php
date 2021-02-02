<?php

use Arrilot\DotEnv\DotEnv;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function error_header(Exception $e = null)
{
    $message = empty($e) ? 'no_exception_provided' : $e->errorMessage();
    header("Location: https://rcdeescolasantcugat.com/contacte/?res=err&msg=$message");
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_header();
    return;
}

function mailer_error(PHPMailer $mail, Exception $e = null): string
{
    error_header($e ?? new Exception($mail->ErrorInfo));
    return 'Mailer Error' . PHP_EOL . $mail->ErrorInfo;
}

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

require_once ROOT . '/../vendor/PHPMailer/PHPMailer.php';
require_once ROOT . '/../vendor/PHPMailer/SMTP.php';
require_once ROOT . '/../vendor/PHPMailer/Exception.php';
require_once ROOT . '/../vendor/DotEnv/DotEnv.php';
require_once ROOT . '/../vendor/DotEnv/Exceptions/MissingVariableException.php';

require_once ROOT . '/../src/Model/Missatge.php';

session_start();

DotEnv::load(ROOT . '/../.env.php');
DotEnv::setRequired(['MAILER_HOST', 'MAILER_USERNAME', 'MAILER_PASSWORD']);

$_SESSION['nom'] = $_POST['nom'] ?? '';
$_SESSION['email'] = $_POST['email'] ?? '';
$_SESSION['missatge'] = $_POST['missatge'] ?? '';

$url_pattern = '/[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/';

if (
    preg_match($url_pattern, $_POST['nom'])
    || preg_match($url_pattern, $_POST['missatge'])
) {
    header('Location: https://rcdeescolasantcugat.com/contacte/?res=invalid&contains-link');
    return;
}

RCDE\Missatge::postMissatge($_POST['nom'], $_POST['email'], $_POST['missatge']);

setlocale(LC_TIME, 'ca_ES', 'Catalan_Spain', 'Catalan');
date_default_timezone_set('Europe/Madrid');

// SMTP needs accurate times, and the PHP time zone MUST be set
// This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Europe/Madrid');

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->isSMTP();

$mail->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ]
];

// Enable SMTP debugging:
//   SMTP::DEBUG_OFF = off (for production use)
//   SMTP::DEBUG_CLIENT = client messages
//   SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

$mail->Host = DotEnv::get('MAILER_HOST');
$mail->Port = DotEnv::get('MAILER_PORT');

$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username = DotEnv::get('MAILER_USERNAME');
$mail->Password = DotEnv::get('MAILER_PASSWORD');

try {
    $mail->setFrom('webmaster@rcdeescolasantcugat.com', 'RCDE Escola Sant Cugat');
} catch (Exception $e) {
    echo mailer_error($mail, $e);
    return;
}

try {
    $mail->addReplyTo($_POST['email'], $_POST['nom']);
} catch (Exception $e) {
    echo mailer_error($mail, $e);
    return;
}

try {
    $mail->addBCC('fdoming3@xtec.cat', 'Fco. Javier Domínguez');
    $mail->addBCC('albertmasa2@gmail.com', 'Albert Mañosa');
} catch (Exception $e) {
    echo mailer_error($mail, $e);
    return;
}

$mail->Subject = 'Nou missatge de contacte';

$body = file_get_contents(ROOT . '/../src/View/email-template.php');

$vars = [
    'from' => $_POST['nom'],
    'email' => $_POST['email'],
    'date' => date("Y-m-d H:i"),
    'date-format' => strftime('%A, %e %B %Y · %H:%M'),
    'message' => $_POST['missatge']
];

foreach ($vars as $var => $value) {
    $body = str_replace('{' . $var . '}', $value, $body);
}

try {
    $mail->msgHTML($body, __DIR__);
} catch (Exception $e) {
    echo mailer_error($mail, $e);
    return;
}

$mail->AltBody = $_POST['missatge'];

try {
    if (!$mail->send()) {
        echo mailer_error($mail);
        return;
    }
} catch (Exception $e) {
    echo mailer_error($mail, $e);
    return;
}

session_destroy();
header('Location: https://rcdeescolasantcugat.com/contacte/?res=ok');
