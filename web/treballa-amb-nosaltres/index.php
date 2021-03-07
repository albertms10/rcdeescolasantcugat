<?php
defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = 'treballa-amb-nosaltres' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var RCDE\Translation\Main $m
     */

    require_once ROOT . '/../translations/Work.php';
    $w = new RCDE\Translation\Work();
    ?>
    <meta name="description" property="og:description" content="<?= $w->t('description') ?>" />

    <?php require_once ROOT . '/../src/Model/EmailAddress.php' ?>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main>
    <section
            class="jumbotron jumbotron-fluid d-flex align-items-center bg-image treballa-amb-nosaltres blue filter text-white"
            style="min-height: calc(100vh - 72px); margin-bottom:0">
        <div class="container text-center">
            <div style="text-shadow: 0 0 2rem black">
                <h1 class="display-4 mb-3"><?= $m->t('work-with-us') ?></h1>
                <p class="lead mb-4">
                    <?= $w->t('work-questions') ?>
                    <br>
                    <?= $w->t('send-resume') ?>
                </p>
            </div>
            <?php $address = new RCDE\EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
