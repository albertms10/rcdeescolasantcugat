<?php

use RCDE\Controller\PaginaController;
use RCDE\Translation\Main;
use RCDE\Translation\Structure;

/**
 * @var array $locale_codes
 * @var array $paths
 */

require_once ROOT . '/../src/Utils/ordinal.php';

$m = new Main();
$s = new Structure();
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<meta name="robots" content="index, follow">
<meta name="referrer" content="origin">

<?php
$pathname = join('/', $paths);
if (empty($pathname)) $pathname = '/';

foreach ($_SESSION['LOCALES'] as $locale):
    $resolved_alternate = $s->resolvedUrl($pathname, locale: $locale, full_path: true);
    if ($resolved_alternate['locale'] === $locale): ?>
        <link rel="alternate" hreflang="<?= $locale ?>"
              href="<?= $resolved_alternate['url'] ?>" />
        <?php if ($locale !== $_SESSION['LOCALE']): ?>
            <meta property="og:locale:alternate" content="<?= $locale_codes[$locale][0] ?>" />
        <?php endif;
    endif;
endforeach ?>
<?php $canonical_url = $s->resolvedUrl($pathname, locale: $_SESSION['DEFAULT_LOCALE'], full_path: true)['url'];
?>
<link rel="alternate" hreflang="x-default" href="<?= $canonical_url ?>" />
<link rel="canonical" href="<?= $canonical_url ?>" />
<meta property="og:locale" content="<?= $locale_codes[$_SESSION['LOCALE']][0] ?>" />

<?php
$link_pagina ??= '';

$pagines = PaginaController::llistaPagines();
$filtre_pagines = array_filter($pagines, fn($pagina) => ($pagina->link_pagina === $link_pagina));

$titol_pagina = '';
if (count($filtre_pagines) === 1) {
    $pagina = array_shift($filtre_pagines);
    $titol_pagina = $m->t($pagina->titol_pagina);
}

$title = ($titol_pagina !== '/') ? $titol_pagina : '';
$full_title = ($title ? "$title · " : '') . 'RCDE Escola Sant Cugat';
?>

<meta property="og:title" content="<?= $title ?? $full_title ?>" />
<meta property="og:url"
      content="<?= $s->resolvedUrl($pathname, full_path: true)['url'] ?>" />
<meta property="og:image" content="" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RCDE Escola Sant Cugat" />

<meta name="theme-color" content="#007cc3">
<link rel="apple-touch-icon" href="/assets/img/icons/icon-192.webp">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<link rel="manifest" href="/manifest.webmanifest">
<link rel="icon" id="favicon" type="image/x-icon" href="/favicon.ico" />

<title><?= $full_title ?></title>

<link rel="preload" href="/assets/fonts/CircularStd-Book.otf" as="font" crossorigin>
<link rel="preload" href="/assets/fonts/CircularStd-Bold.otf" as="font" crossorigin>
<link rel="preload" href="/assets/fonts/CircularStd-Black.otf" as="font" crossorigin>

<link rel="preload" href="/assets/css/override.min.css" as="style">

<link rel="preload" href="/assets/vendor/jquery/jquery.min.js" as="script">
<link rel="preload" href="/assets/vendor/bootstrap/js/bootstrap-native.min.js" as="script">
<link rel="preload" href="/assets/vendor/jquery-easing/jquery.easing.min.js" as="script">
<link rel="preload" href="/assets/vendor/magnific-popup/jquery.magnific-popup.min.js" as="script">


<!-- Theme CSS - Includes Bootstrap -->
<link href="/assets/css/styles.min.css" rel="stylesheet">
<link href="/assets/css/override.min.css" rel="stylesheet">

<script src="/assets/js/defer-css.js"></script>
<script>
    deferCSS("/assets/css/all.min.css");
</script>

<noscript>
    <link href="/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/assets/css/all.min.css" rel="stylesheet">
</noscript>

<!-- Bootstrap core JavaScript -->
<script defer src="/assets/vendor/jquery/jquery.min.js"></script>
<script defer src="/assets/vendor/bootstrap/js/bootstrap-native.min.js"></script>

<!-- Plugin JavaScript -->
<script defer src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script defer src="/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts -->
<script defer src="/assets/js/navbar-controller.js"></script>
