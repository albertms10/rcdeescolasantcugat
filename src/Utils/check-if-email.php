<?php

function check_if_email($strings): bool
{
    $url_pattern = '/[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/';

    $filtered = array_filter($strings, fn($string) => preg_match($url_pattern, $string));

    return count($filtered) > 0;
}
