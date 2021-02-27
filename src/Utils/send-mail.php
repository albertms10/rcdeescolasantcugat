<?php

use Arrilot\DotEnv\DotEnv;
use PHPMailer\PHPMailer;

require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

function error_header(string $location, Exception $e = null)
{
    $message = empty($e) ? 'no_exception_provided' : $e->getMessage();
    header("Location: $location?res=err&msg=$message");
}

function mailer_error(string $location, PHPMailer\PHPMailer $mail, Exception $e = null): string
{
    error_header($location, $e ?? new Exception($mail->ErrorInfo));
    return 'Mailer Error' . PHP_EOL . $mail->ErrorInfo;
}

if (empty(ROOT)) {
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
}

require_once ROOT . '/../vendor/PHPMailer/phpmailer/src/PHPMailer.php';
require_once ROOT . '/../vendor/PHPMailer/phpmailer/src/SMTP.php';
require_once ROOT . '/../vendor/PHPMailer/phpmailer/src/Exception.php';

require_once ROOT . '/../src/Controller/MissatgeController.php';

function send_mail(
    string $error_location,
    ?string $email = null,
    ?string $name = null,
    ?string $subject = '',
    ?string $message = '',
    string $template = 'contact',
    ?string $error_message = null,
)
{
    DotEnv::load(ROOT . '/../.env.php');
    DotEnv::setRequired(['MAILER_HOST', 'MAILER_USERNAME', 'MAILER_PASSWORD', 'BCCS']);

    setlocale(LC_TIME, 'ca_ES', 'Catalan_Spain', 'Catalan');
    date_default_timezone_set('Europe/Madrid');

    $mail = new PHPMailer\PHPMailer(true);

    try {
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

        $mail->SMTPDebug = PHPMailer\SMTP::DEBUG_OFF;

        $mail->Host = DotEnv::get('MAILER_HOST');
        $mail->Port = DotEnv::get('MAILER_PORT');

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        $mail->Username = DotEnv::get('MAILER_USERNAME');
        $mail->Password = DotEnv::get('MAILER_PASSWORD');

        $mail->setFrom('webmaster@rcdeescolasantcugat.com', 'RCDE Escola Sant Cugat');

        if (isset($email)) {
            $mail->addReplyTo($email, $name);
        }

        foreach (DotEnv::get('BCCS') as $bcc) {
            $mail->addBCC($bcc['address'], $bcc['name']);
        }

        $mail->Subject = $subject;
        $body = match ($template) {
            'contact' => contact_email_template($email, $name, $message),
            'error' => error_email_template($email, $name, $error_message),
        };

        $mail->msgHTML($body, __DIR__);
        $mail->AltBody = $message;

        if (!$mail->send()) {
            echo mailer_error($error_location, $mail, new PHPMailer\Exception('Mail not sent'));
        }
    } catch (PHPMailer\Exception $e) {
        echo mailer_error($error_location, $mail, $e);
        return;
    }
}

function email_template_body(string $body, array $vars): string
{
    foreach ($vars as $var => $value) {
        $body = str_replace("{{{$var}}}", $value, $body);
    }

    return $body;
}

function contact_email_template(string $email, string $name, string $message): string
{
    $body = file_get_contents(ROOT . '/../src/View/templates/contact-email-template.html');
    $css = file_get_contents(ROOT . '/assets/css/email.min.css');

    $vars = [
        'css' => "<style>$css</style>",
        'email' => $email,
        'from' => $name,
        'date' => date('Y-m-d H:i'),
        'date-format' => strftime('%A, %e %B %Y · %H:%M'),
        'message' => $message,
    ];

    return email_template_body($body, $vars);
}

function error_email_template(string $email, string $name, string $err): string
{
    $body = file_get_contents(ROOT . '/../src/View/templates/error-email-template.html');
    $css = file_get_contents(ROOT . '/assets/css/email.min.css');

    $vars = [
        'css' => "<style>$css</style>",
        'email' => $email,
        'from' => $name,
        'date' => date('Y-m-d H:i'),
        'date-format' => strftime('%A, %e %B %Y · %H:%M'),
        'err' => $err,
    ];

    return email_template_body($body, $vars);
}
