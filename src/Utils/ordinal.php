<?php

function ordinal_ca(int $num, bool $is_fem = true): string
{
    $sufix = match (true) {
        $is_fem => 'a',
        ($num === 1) || ($num === 3) => 'r',
        $num === 2 => 'n',
        $num === 4 => 't',
        default => 'è',
    };

    return $num . $sufix;
}

function ordinal_en(int $num): string
{
    $sufix = match (substr($num, -1)) {
        '1' => 'st',
        '2' => 'nd',
        '3' => 'rd',
        default => 'th',
    };

    return $num . $sufix;
}

function ordinal_es(int $num, bool $is_fem = true): string
{
    $sufix = match (true) {
        $is_fem => '.ª',
        default => '.º',
    };

    return $num . $sufix;
}

function ordinal(int $num, bool $is_fem = true, ?string $locale = null): string
{
    return match ($locale) {
        'ca' => ordinal_ca($num, $is_fem),
        'en' => ordinal_en($num),
        'es' => ordinal_es($num, $is_fem),
        default => $num,
    };
}
