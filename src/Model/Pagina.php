<?php

namespace RCDE;

class Pagina
{
    public function __construct(
        public ?int $id_pagina = null,
        public ?string $titol_pagina = null,
        public ?string $link_pagina = null,
    )
    {
    }
}
