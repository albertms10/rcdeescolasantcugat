<?php

use RCDE\Translation\Activities;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var Structure $s
     * @var string $pathname
     */

    $a = new Activities();
    ?>
    <meta name="description" property="og:description" content="<?= $a->t('description') ?>" />

    <script defer src="/assets/js/defer-magnific-popup-css.js"></script>
    <script defer src="/assets/js/magnific-popup.js"></script>
    <script defer src="/assets/js/nav-headers.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="text-content">
    <?php
    $titol_pagina = 'I Campus RCDE · La Cerdanya';
    $classname = 'campus-la-cerdanya-2021-background';
    include ROOT . '/../src/View/jumbotron.php' ?>

    <section class="page-section bg-light pt-4 pb-2">
        <div class="container">
            <?php include ROOT . '/../src/View/breadcrumb.php' ?>
        </div>
    </section>

    <?php include ROOT . $s->resolvedUrl(
            pathname: $pathname,
            filename: '__info.php',
            explicit_locale: true,
            include_filename: true,
        )['url'] ?>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
