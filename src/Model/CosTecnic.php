<?php

namespace RCDE\Model;

class CosTecnic
{
    public function __construct(
        public ?int $id_costecnic = null,
        public ?string $nom_complet = null,
        public ?string $naixement = null,
        public ?int $id_rol_costecnic = null,
        public ?string $rol_costecnic = null,
        public ?int $count_temporades = null,
        public ?bool $hidden = null,
        public ?int $temporades_a_renovar = null,
    )
    {
    }
}
