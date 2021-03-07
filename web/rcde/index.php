<?php
defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = 'rcde' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var RCDE\Translation\Main $m
     * @var RCDE\Translation\Structure $s
     */

    require_once ROOT . '/../translations/RCDE.php';
    $r = new RCDE\Translation\RCDE();
    ?>
    <meta name="description" property="og:description" content="<?= $r->t('description') ?>" />

    <script defer src="/assets/js/nav-headers.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="text-content">
    <?php include ROOT . '/../src/View/jumbotron.php' ?>
    <section class="page-section bg-light">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $link_pagina,
                    filename: '__history.php',
                    explicit: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>

    <?php if (false): ?>
        <section id="el-club" class="page-section bg-light">
            <div class="container">
                <h2 class="h1">El club</h2>
                <div class="row mt-lg-5">
                    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5"></div>
                    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                        <div data-nav-items="el-club"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>

    <?php if (false): ?>
        <section id="categories-inferiors" class="page-section bg-light">
            <div class="container">
                <h2 class="h1">Categories inferiors</h2>
                <div class="row mt-lg-5">
                    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5"></div>
                    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                        <div data-nav-items="categories-inferiors"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
