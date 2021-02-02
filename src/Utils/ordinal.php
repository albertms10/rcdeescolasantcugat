<?php

function ordinal(int $num, string $genere = 'fem'): string
{
    $sufix = match (true) {
        $genere === 'fem' => 'a',
        ($num === 1) || ($num === 3) => 'r',
        $num === 2 => 'n',
        $num === 4 => 't',
        default => 'è',
    };

    return $num . $sufix;
}
