<?php

namespace RCDE\Controller;

use RCDE\Model\Noticia;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

class NoticiaController extends QueryController
{
    /** @return Noticia[] */
    public static function llistaNoticies(): array
    {
        return self::queryAll('select__noticies', Noticia::class);
    }
}
