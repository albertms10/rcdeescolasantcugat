<?php require_once ROOT . '/../src/Controller/NavegacioController.php' ?>
<?php require_once ROOT . '/../src/Utils/ordinal.php' ?>

<?php setlocale(LC_TIME, 'ca_ES', 'Catalan_Spain', 'Catalan') ?>
<?php date_default_timezone_set('Europe/Madrid') ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

<meta property="description" content="El millor complement per a la formació dels teus fills. Vols fer una prova?" />

<meta property="og:title" content="RCDE Escola Sant Cugat" />
<meta property="og:description" content="El millor complement per a la formació dels teus fills. Vols fer una prova?" />
<meta property="og:url" content="https://www.rcdeescolasantcugat.com/" />
<meta property="og:locale" content="ca_ES" />
<meta property="og:image" content="" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RCDE Escola Sant Cugat" />

<meta name="theme-color" content="#007cc3">
<link rel="apple-touch-icon" href="/assets/img/icons/icon-192.webp">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<link rel="manifest" href="/manifest.webmanifest">
<link rel="icon" id="favicon" type="image/x-icon" href="/favicon.ico" />

<?php
$link_pagina ??= '';

$pagines = RCDE\NavegacioController::llistaPagines();
$filtre_pagines = array_filter($pagines, fn($pagina) => ($pagina->link_pagina === $link_pagina));

$titol_pagina = '__index__';
if ($filtre_pagines === 1) $titol_pagina = $filtre_pagines[0]; ?>
<title><?= ($titol_pagina !== '__index__') ? ($titol_pagina . ' · ') : '' ?>RCDE Escola Sant Cugat</title>

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

<script>
    function deferCSS(href) {
        const deferredLink = document.createElement("link");
        deferredLink.rel = "stylesheet";
        deferredLink.href = href;
        deferredLink.type = "text/css";

        const firstLink = document.getElementsByTagName("link")[0];
        if (firstLink) {
            firstLink.parentNode.insertBefore(deferredLink, firstLink);
        } else {
            document.getElementsByTagName("head")[0].insertAdjacentElement("beforeend", deferredLink);
        }
    }

    deferCSS("/assets/css/all.min.css");
    deferCSS("/assets/vendor/magnific-popup/magnific-popup.css");
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