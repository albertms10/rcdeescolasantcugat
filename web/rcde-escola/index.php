<?php

use RCDE\Controller\CosTecnicController;
use RCDE\Controller\TitularPremsaController;
use RCDE\Translation\Escola;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
require_once ROOT . '/../src/Utils/minify.php';
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

    $e = new Escola();
    ?>
    <meta name="description" property="og:description" content="<?= $e->t('description') ?>" />

    <script defer src="/assets/js/nav-headers.min.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="text-content">
    <?php include ROOT . '/../src/View/jumbotron.php' ?>
    <section class="page-section bg-light">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $pathname,
                    filename: '__who-we-are.php',
                    explicit_locale: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>
    <section class="page-section bg-light">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $pathname,
                    filename: '__how-we-work.php',
                    explicit_locale: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>
    <section class="page-section bg-light">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $pathname,
                    filename: '__activities.php',
                    explicit_locale: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>
    <section class="page-section bg-blau-fosc text-white">
        <div class="container">
            <h2 class="h1" id="cos-tecnic" data-heading><?= $e->t('staff') ?></h2>
            <div class="container mt-4">
                <div class="row">
                    <?php
                    $entrenadors = CosTecnicController::llistaEntrenadors();
                    foreach ($entrenadors as $key => $entrenador) {
                        require ROOT . '/../src/View/fitxa-cos-tecnic.php';
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <h2 class="h1" id="retalls-de-premsa" data-heading><?= $e->t('press-clippings') ?></h2>
            <hr class="divider my-4 ml-0">
            <div class="row">
                <?php
                $titulars_premsa = TitularPremsaController::llistaTitularsPremsa();
                foreach ($titulars_premsa as $titular_premsa) {
                    require ROOT . '/../src/View/retall-premsa.php';
                } ?>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>

</body>

</html>
