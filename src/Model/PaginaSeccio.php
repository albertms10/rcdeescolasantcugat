<?php

namespace RCDE;

class PaginaSeccio
{
    public function __construct(
        public ?int $id_pagina_seccio = null,
        public ?string $titol_pagina_seccio = null,
        public ?string $link_pagina_seccio = null,
        public ?bool $hidden = null,
        public ?int $id_pagina = null,
    )
    {
    }
}
