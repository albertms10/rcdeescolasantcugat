<?php

use RCDE\Controller\CosTecnicController;
use RCDE\Controller\TitularPremsaController;
use RCDE\Translation\Escola;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = 'rcde-escola' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /** @var Structure $s */

    $e = new Escola();
    ?>
    <meta name="description" property="og:description" content="<?= $e->t('description') ?>" />

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
                    filename: '__who-we-are.php',
                    explicit_locale: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>
    <section class="page-section bg-light">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $link_pagina,
                    filename: '__how-we-work.php',
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
                    foreach ($entrenadors as $key => $entrenador): ?>
                        <div class="col-lg-3 col-md-4 p-3 text-center user-card">
                            <div class="transform-center p-3" style="width:8rem; height:8rem">
                                <?php
                                $nom_entrenador = str_replace(' ', '-', mb_strtolower($entrenador->nom_complet));
                                if (file_exists(ROOT . "/assets/img/entrenadors/$nom_entrenador.webp")): ?>
                                    <img src="/assets/img/entrenadors/<?= $nom_entrenador ?>.webp"
                                         class="img-fit transform-center rounded-circle"
                                         width="96" height="96" alt="<?= $entrenador->nom_complet ?>">
                                <?php else: ?>
                                    <i class="fas fa-5x fa-user-circle mb-3 mt-2" style="opacity:.5"></i>
                                <?php endif ?>
                            </div>
                            <h5><?= $entrenador->nom_complet ?></h5>
                            <h6 class="badge badge-pill badge-<?= match ($entrenador->id_rol_costecnic) {
                                1 => 'warning',
                                2 => 'primary',
                                3 => 'success',
                            } ?>"><?= $e->t($entrenador->rol_costecnic) ?></h6>
                            <p class="text-translucent">
                                <?= $e->t('season', null, ordinal($entrenador->count_temporades, locale: $_SESSION['LOCALE'])) ?>
                            </p>
                        </div>
                    <?php endforeach ?>
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
                foreach ($titulars_premsa as $titular_premsa): ?>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4><?= $titular_premsa->text_titular ?></h4>
                                <?php if (isset($titular_premsa->data_titular)): ?>
                                    <time datetime="<?= $titular_premsa->data_titular ?>">
                                        <?= utf8_encode(strftime('%-e %B %Y', strtotime($titular_premsa->data_titular))) ?>
                                    </time>
                                <?php endif ?>
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($titular_premsa->getUrls() as $url_titular):
                                    $host_name = str_replace('www.', '', parse_url($url_titular['url'], PHP_URL_HOST)) ?>
                                    <a href="<?= $url_titular['url'] ?>"
                                       class="list-group-item list-group-item-action d-flex align-items-center"
                                       title="<?= $e->t('visit-new-window-or-tab', null, $host_name) ?>"
                                       rel="external noopener"
                                       target="_blank">
                                        <i class="<?= match ($host_name) {
                                            'youtube.com' => 'fab fa-youtube',
                                            'issuu.com' => 'fas fa-book-open',
                                            default => 'far fa-newspaper',
                                        } ?> mr-2"></i>
                                        <?= $host_name ?>
                                        <div class="d-flex align-items-center justify-content-end w-100">
                                            <div class="badge badge-pill badge-secondary small mr-2" style="opacity:.8">
                                                <?= strtoupper($url_titular['lang']) ?>
                                            </div>
                                            <i class="fas fa-external-link-square-alt text-secondary"></i>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>

</body>

</html>
