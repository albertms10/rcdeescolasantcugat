<?php

namespace RCDE\Model;

class Social
{
    public function __construct(
        public string $title,
        public string $link,
        public string $classname,
    )
    {
    }
}
