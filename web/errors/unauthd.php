<?php

use RCDE\Model\ResponseError;
use RCDE\Translation\Error;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT . '/../vendor/autoload.php';
$preserve_prev_locale = true;
include ROOT . '/../src/Utils/lang-init.php';

$e = new Error();

$response_error = new ResponseError(
    id: 'unauthorized',
    code: 401,
    reason: $e->t('unauthorized-reason'),
    description: $e->t('unauthorized-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
