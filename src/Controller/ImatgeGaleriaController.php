<?php

namespace RCDE\Controller;

use RCDE\Model\ImatgeGaleria;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class ImatgeGaleriaController extends QueryController
{
    /** @return ImatgeGaleria[] */
    public static function llistaImatgesVisibles(): array
    {
        return self::queryAll('select__imatges_visibles', ImatgeGaleria::class);
    }
}
