<?php

use RCDE\Model\ResponseError;
use RCDE\Translation;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../src/Model/ResponseError.php';
require_once ROOT . '/../src/Translation/Error.php';

$e = new Translation\Error();

$response_error = new ResponseError(
    id: 'unauthorized',
    code: 401,
    reason: $e->t('unauthorized-reason'),
    description: $e->t('unauthorized-description'),
    known: true,
);

include ROOT . '/../src/View/base-error.php';
