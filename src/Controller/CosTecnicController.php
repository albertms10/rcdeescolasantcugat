<?php

namespace RCDE\Controller;

use RCDE\Model\CosTecnic;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class CosTecnicController extends QueryController
{
    public static function llistaEntrenadors(): array
    {
        return self::queryAll('select__entrenadors', CosTecnic::class);
    }

    public static function llistaCompletaEntrenadors(): array
    {
        return self::queryAll('select__entrenadors_complet', CosTecnic::class);
    }
}
