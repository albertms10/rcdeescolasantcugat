<?php

function minify($buffer): array|string|null
{
    $search = [
        '/\>[^\S ]+/s',      // strip whitespaces after tags, except space
        '/[^\S ]+\</s',      // strip whitespaces before tags, except space
        '/(\s)+/s',          // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/', // Remove HTML comments
    ];
    $replace = [
        '>',
        '<',
        '\\1',
        '',
    ];

    return preg_replace($search, $replace, $buffer);
}

ob_start('minify');
