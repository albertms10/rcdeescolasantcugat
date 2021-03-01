<?php

function replace_mustache_vars(string $body, array $vars): string
{
    foreach ($vars as $var => $value) {
        $body = str_replace("{{{$var}}}", $value, $body);
    }

    return $body;
}
