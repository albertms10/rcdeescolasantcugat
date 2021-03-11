<?php

namespace RCDE\Controller;

use RCDE\Model\TitularPremsa;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class TitularPremsaController extends QueryController
{
    public static function llistaTitularsPremsa(): array
    {
        return self::queryAll('select__titulars_premsa', TitularPremsa::class);
    }
}
