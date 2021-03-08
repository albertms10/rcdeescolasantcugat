<?php

use RCDE\Model\ResponseError;
use RCDE\Translation;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Model/ResponseError.php';
require_once ROOT . '/../src/Translation/Error.php';

$e = new Translation\Error();

$response_error = new ResponseError(
    id: 'not-found',
    code: 404,
    reason: $e->t('not-found-reason'),
    description: $e->t('not-found-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
