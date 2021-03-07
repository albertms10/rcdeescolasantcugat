<?php

use RCDE\ResponseError;
use RCDE\Translation;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Model/ResponseError.php';
require_once ROOT . '/../translations/Error.php';

$e = new Translation\Error();

$response_error = new ResponseError(
    id: 'server-error',
    code: 500,
    reason: $e->t('server-error-reason'),
    description: $e->t('server-error-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
