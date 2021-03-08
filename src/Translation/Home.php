<?php

namespace RCDE\Translation;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

final class Home extends Translator
{
    public function __construct(?string $lang = null)
    {
        parent::__construct($lang);
    }
}
