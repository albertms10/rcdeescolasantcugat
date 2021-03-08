<?php

use RCDE\Model\ResponseError;
use RCDE\Translation\Error;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT . '/../vendor/autoload.php';

$e = new Error();

$response_error = new ResponseError(
    id: 'server-error',
    code: 500,
    reason: $e->t('server-error-reason'),
    description: $e->t('server-error-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
