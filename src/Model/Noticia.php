<?php

namespace RCDE\Model;

class Noticia
{
    public function __construct(
        public ?int $id_noticia = null,
        public ?string $titol_noticia = null,
        public ?string $subtitol_noticia = null,
        public ?string $nom_imatge = null,
        public ?int $img_width = null,
        public ?int $img_height = null,
        public ?string $data_inici = null,
        public ?string $data_final = null,
        public ?string $href = null,
        public ?int $ordre = null,
    )
    {
    }
}
