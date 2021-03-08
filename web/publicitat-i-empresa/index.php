<?php
defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = 'publicitat-i-empresa' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var RCDE\Translation\Main $m
     */

    require_once ROOT . '/../src/Translation/Advertising.php';
    $a = new RCDE\Translation\Advertising();
    ?>
    <meta name="description" property="og:description" content="<?= $a->t('description') ?>" />

    <?php require_once ROOT . '/../src/Model/EmailAddress.php' ?>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main>
    <section
            class="jumbotron jumbotron-fluid d-flex align-items-center bg-image publicitat-i-empresa blue filter text-white"
            style="min-height: calc(100vh - 72px); margin-bottom:0">
        <div class="container text-center">
            <div style="text-shadow: 0 0 2rem black">
                <h1 class="display-4 mb-3"><?= $m->t('advertising-and-business') ?></h1>
                <p class="lead mb-4"><?= $a->t('advertising-body') ?></p>
            </div>
            <?php $address = new RCDE\Model\EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
