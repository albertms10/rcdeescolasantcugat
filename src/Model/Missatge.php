<?php

namespace RCDE\Model;

class Missatge
{
    public function __construct(
        public ?int $id_missatge = null,
        public ?string $nom = null,
        public ?string $email = null,
        public ?string $missatge = null,
        public ?string $data = null,
    )
    {
    }
}
