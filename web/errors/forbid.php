<?php

use RCDE\Model\ResponseError;
use RCDE\Translation\Error;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT . '/../vendor/autoload.php';
$preserve_prev_locale = true;
include ROOT . '/../src/Utils/lang-init.php';

$e = new Error();

$response_error = new ResponseError(
    id: 'forbidden',
    code: 403,
    reason: $e->t('forbidden-reason'),
    description: $e->t('forbidden-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
