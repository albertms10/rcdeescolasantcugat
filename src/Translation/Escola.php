<?php

namespace RCDE\Translation;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

final class Escola extends Translator
{
    public function __construct(?string $lang = null)
    {
        parent::__construct($lang);
    }
}
