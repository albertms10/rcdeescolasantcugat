<?php

namespace RCDE\Model;

class Picture
{
    public function __construct(
        public string $src,
        public string $alt,
        public int $width = 800,
        public int $height = 600,
        public string $classlist = '',
    )
    {
    }
}
