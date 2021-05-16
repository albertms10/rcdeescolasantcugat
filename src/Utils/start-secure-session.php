<?php

if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict',
    ]);

    $prefix = '__Host-';
    session_name("{$prefix}PHPSESSID");
}

session_start();
