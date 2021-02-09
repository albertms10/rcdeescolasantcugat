<?php

namespace RCDE;

class Noticia
{
    public int $id_noticia;
    public string $titol_noticia;
    public ?string $subtitol_noticia;
    public ?string $nom_imatge;
    public ?int $img_width;
    public ?int $img_height;
    public ?string $data_inici;
    public ?string $data_final;
    public ?string $href;
    public int $ordre;
}
