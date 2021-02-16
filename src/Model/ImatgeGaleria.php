<?php

namespace RCDE;

class ImatgeGaleria
{
    public function __construct(
        public ?int $id_imatge = null,
        public ?string $titol_imatge = null,
        public ?string $subtitol_imatge = null,
        public ?string $nom_imatge = null,
        public ?bool $hidden = null,
    )
    {
    }
}
