<?php

namespace RCDE;

class Slogan
{
    public function __construct(
        public string $title,
        public string $description,
        public ?string $fa_icon = null,
        public ?string $icon_filename = null,
    )
    {
    }
}
