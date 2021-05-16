<?php

namespace RCDE\Model;

class Pagina
{
    public function __construct(
        public ?int $id_pagina = null,
        public ?string $page_key = null,
        public bool $has_subnav = false,
    )
    {
    }
}
