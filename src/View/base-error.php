<?php

use RCDE\Controller\ResponseErrorController;
use RCDE\Model\ResponseError;
use RCDE\Translation\Error;
use RCDE\Translation\Main;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
/**
 * @var string[] $paths
 * @var ResponseError $response_error
 * @var Error $e
 */

try {
    ResponseErrorController::postResponseError($response_error, locale: $_SESSION['LOCALE']);
} catch (Exception $exception) {
    echo $exception;
}
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = $response_error->id ?>
    <?php
    include ROOT . '/../src/View/incs-top.php'
    /**
     * @var Main $m
     * @var Structure $s
     */
    ?>
    <meta name="description" property="og:description" content="<?= $response_error->description ?? 'Error' ?>" />
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main>
    <section class="jumbotron jumbotron-fluid d-flex align-items-center position-relative"
             style="min-height: calc(100vh - 72px); margin-bottom:0">
        <div class="container text-center mb-4" style="z-index: 10">
            <h2 class="display-1" style="color: var(--blau); opacity: 0.4"><?= $response_error->code ?></h2>
            <h1 class="display-4 mb-3"><?= $response_error->reason ?></h1>
            <p class="lead mb-4"><?= $response_error->description ?></p>
            <?php if ($response_error->code == 404):
                $centered_breadcrumb = true;
                include ROOT . '/../src/View/breadcrumb.php';
            endif ?>
            <a href="<?= $s->resolvedUrl('/')['url'] ?>"
               class="btn btn-xl btn-secondary mt-4">
                <i class="fas fa-home mr-2"></i>
                <?= $e->t('go-back-home') ?>
            </a>
        </div>
        <div class="position-absolute overflow-hidden svg-icon-container blue w-100 h-100"
             style="opacity: 0.14; padding: 4rem 20%">
            <?= file_get_contents(ROOT . '/assets/img/logo/perico-rcde.svg') ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
