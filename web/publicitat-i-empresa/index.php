<?php

use RCDE\Model\EmailAddress;
use RCDE\Translation\Advertising;
use RCDE\Translation\Main;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = 'publicitat-i-empresa' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /** @var Main $m */

    $a = new Advertising();
    ?>
    <meta name="description" property="og:description" content="<?= $a->t('description') ?>" />
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
            <?php $address = new EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
