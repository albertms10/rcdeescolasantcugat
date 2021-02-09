<?php

namespace RCDE;

class CosTecnic
{
    public int $id_costecnic;
    public string $nom_complet;
    public string $naixement;

    public int $count_temporades;
    public ?int $temporades_a_renovar;
    public bool $hidden;

    public int $id_rol_costecnic;
    public string $rol_costecnic;
}
