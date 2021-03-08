<?php

use RCDE\Model\ResponseError;
use RCDE\Translation\Error;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT . '/../vendor/autoload.php';

$e = new Error();

$response_error = new ResponseError(
    id: 'bad-request',
    code: 400,
    reason: $e->t('bad-request-reason'),
    description: $e->t('bad-request-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
