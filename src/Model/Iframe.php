<?php

namespace RCDE\Model;

class Iframe
{
    public function __construct(
        public string $src,
        public string $title,
    )
    {
    }
}
