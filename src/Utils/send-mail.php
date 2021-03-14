<?php

use Arrilot\DotEnv\DotEnv;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require ROOT . '/../vendor/autoload.php';

function error_header(string $location, \Exception $e = null)
{
    $message = empty($e) ? 'No exception provided' : $e->getMessage();
    header("Location: $location?res=err&msg=$message");
}

function mailer_error(string $location, PHPMailer $mail, \Exception $e = null): string
{
    error_header($location, $e ?? new \Exception($mail->ErrorInfo));
    return 'Mailer Error' . PHP_EOL . $mail->ErrorInfo;
}

require_once ROOT . '/../vendor/PHPMailer/phpmailer/src/PHPMailer.php';
require_once ROOT . '/../vendor/PHPMailer/phpmailer/src/SMTP.php';
require_once ROOT . '/../vendor/PHPMailer/phpmailer/src/Exception.php';

require_once ROOT . '/../src/Utils/replace-mustache-vars.php';

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

    setlocale(LC_ALL, ...$_SESSION['DEFAULT_LOCALE_CODE']);
    date_default_timezone_set('Europe/Madrid');

    $mail = new PHPMailer(true);

    try {
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isSMTP();

        $mail->setLanguage($_SESSION['LOCALE']);

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ];

        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        $mail->Host = DotEnv::get('MAILER_HOST');
        $mail->Port = DotEnv::get('MAILER_PORT');

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        $mail->Username = DotEnv::get('MAILER_USERNAME');
        $mail->Password = DotEnv::get('MAILER_PASSWORD');

        $mail->setFrom('webmaster@rcdeescolasantcugat.com', 'RCDE Escola Sant Cugat');

        if (!empty($email)) {
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
            echo mailer_error($error_location, $mail, new Exception('Mail not sent'));
        }
    } catch (Exception $e) {
        echo mailer_error($error_location, $mail, $e);
        return;
    }
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
        'date-format' => utf8_encode(strftime('%A, %e %B %Y')),
        'time-format' => strftime('%H:%M'),
        'message' => $message,
        'locale' => strtoupper($_SESSION['LOCALE']),
    ];

    return replace_mustache_vars($body, $vars);
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
        'date-format' => utf8_encode(strftime('%A, %e %B %Y')),
        'time-format' => strftime('%H:%M'),
        'err' => $err,
        'locale' => strtoupper($_SESSION['LOCALE']),
    ];

    return replace_mustache_vars($body, $vars);
}
