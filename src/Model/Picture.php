<?php

namespace RCDE;

class Picture
{
    public function __construct(
        public string $src,
        public string $alt,
        public int $width = 800,
        public int $height = 600,
    )
    {
    }
}
