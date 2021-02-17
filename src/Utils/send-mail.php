<?php

use Arrilot\DotEnv\DotEnv;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function error_header(string $location, \Exception $e = null)
{
    $message = empty($e) ? 'no_exception_provided' : $e->getMessage();
    header("Location: $location?res=err&msg=$message");
}

function mailer_error(string $location, PHPMailer $mail, \Exception $e = null): string
{
    error_header($location, $e ?? new \Exception($mail->ErrorInfo));
    return 'Mailer Error' . PHP_EOL . $mail->ErrorInfo;
}

if (empty(ROOT)) {
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
}

require_once ROOT . '/../vendor/PHPMailer/PHPMailer.php';
require_once ROOT . '/../vendor/PHPMailer/SMTP.php';
require_once ROOT . '/../vendor/PHPMailer/Exception.php';
require_once ROOT . '/../vendor/DotEnv/DotEnv.php';
require_once ROOT . '/../vendor/DotEnv/Exceptions/MissingVariableException.php';

require_once ROOT . '/../src/Controller/MissatgeController.php';

function send_mail(
    string $email,
    string $name,
    string $subject = '',
    string $message = '',
    array $bccs = [],
    string $template = 'contact',
    string $error_location = '',
)
{
    DotEnv::load(ROOT . '/../.env.php');
    DotEnv::setRequired(['MAILER_HOST', 'MAILER_USERNAME', 'MAILER_PASSWORD']);

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
        echo mailer_error($error_location, $mail, $e);
        return;
    }

    try {
        $mail->addReplyTo($email, $name);
    } catch (Exception $e) {
        echo mailer_error($error_location, $mail, $e);
        return;
    }

    try {
        foreach ($bccs as $bcc) {
            $mail->addBCC($bcc['address'], $bcc['name']);
        }
    } catch (Exception $e) {
        echo mailer_error($error_location, $mail, $e);
        return;
    }

    $mail->Subject = $subject;

    $body = match ($template) {
        'contact' => contact_email_template($email, $name, $message),
    };

    try {
        $mail->msgHTML($body, __DIR__);
    } catch (Exception $e) {
        echo mailer_error($error_location, $mail, $e);
        return;
    }

    $mail->AltBody = $message;

    try {
        if (!$mail->send()) {
            echo mailer_error($error_location, $mail);
            return;
        }
    } catch (Exception $e) {
        echo mailer_error($error_location, $mail, $e);
        return;
    }
}

function email_template_body(string $body, array $vars): string
{
    foreach ($vars as $var => $value) {
        $body = str_replace("{{$var}}", $value, $body);
    }

    return $body;
}

function contact_email_template(string $email, string $name, string $message): string
{
    $body = file_get_contents(ROOT . '/../src/View/contact-email-template.php');

    $vars = [
        'email' => $email,
        'from' => $name,
        'date' => date('Y-m-d H:i'),
        'date-format' => strftime('%A, %e %B %Y · %H:%M'),
        'message' => $message,
    ];

    return email_template_body($body, $vars);
}

    return $body;
}
