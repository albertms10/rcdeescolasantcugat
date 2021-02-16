<?php

namespace RCDE;

class Social
{
    public function __construct
    (
        public string $icon,
        public string $title,
        public string $link,
        public string $color,
    )
    {
    }
}
