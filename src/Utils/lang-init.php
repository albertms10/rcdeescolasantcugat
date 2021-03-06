<?php

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require ROOT . '/../src/Utils/start-secure-session.php';

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
    $first_path = count($paths) > 0 ? $paths[0] : '';
}

$_SESSION['DEFAULT_LOCALE'] ??= $_SESSION['LOCALES'][0];

$preserve_prev_locale ??= false;
if (empty($_SESSION['LOCALE']) or !$preserve_prev_locale) {
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
