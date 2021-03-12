<?php

namespace RCDE\Controller;

use RCDE\Model\Pagina;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class PaginaController extends QueryController
{
    /** @return Pagina[] */
    public static function llistaPagines(): array
    {
        return self::queryAll('select__pagines', Pagina::class);
    }
}
