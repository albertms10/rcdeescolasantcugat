<?php
session_start();

$_SESSION['LOCALES'] ??= ['ca', 'es', 'en', 'zh'];
$paths = preg_split('/\//', $_SERVER['SCRIPT_URL'], flags: PREG_SPLIT_NO_EMPTY);
$first_path = null;

if (count($paths) > 0) {
    $first_path = $paths[0];
}

$lang_url = null;
$is_locale = in_array($first_path, $_SESSION['LOCALES']);

if ($is_locale) {
    $lang_url = $first_path;
    $paths = array_slice($paths, 1);
}

$_SESSION['DEFAULT_LOCALE'] ??= $_SESSION['LOCALES'][0];

$preserve_prev_locale ??= false;
if (!isset($_SESSION['LOCALE']) or !$preserve_prev_locale) {
    $_SESSION['LOCALE'] = $lang_url ?? $_SESSION['DEFAULT_LOCALE'];
}

$locale_codes = [
    'ca' => ['ca_ES', 'Catalan_Spain', 'Catalan'],
    'en' => ['en_UK', 'English'],
    'es' => ['es_ES', 'Spain'],
    'zh' => ['zh_CN', 'Chinese'],
];

$_SESSION['DEFAULT_LOCALE_CODE'] ??= $locale_codes[$_SESSION['DEFAULT_LOCALE']];

setlocale(LC_ALL, ...$locale_codes[$_SESSION['LOCALE']]);
date_default_timezone_set('Europe/Madrid');
