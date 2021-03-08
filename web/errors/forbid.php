<?php

use RCDE\Model\ResponseError;
use RCDE\Translation;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Model/ResponseError.php';
require_once ROOT . '/../src/Translation/Error.php';

$e = new Translation\Error();

$response_error = new ResponseError(
    id: 'forbidden',
    code: 403,
    reason: $e->t('forbidden-reason'),
    description: $e->t('forbidden-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
