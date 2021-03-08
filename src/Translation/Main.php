<?php

namespace RCDE\Translation;

require_once __DIR__ . '/Translator.php';

final class Main extends Translator
{
    public function __construct(?string $lang = null)
    {
        parent::__construct($lang);
    }
}
