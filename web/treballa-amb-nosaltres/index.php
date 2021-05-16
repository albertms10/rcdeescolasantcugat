<?php

use RCDE\Model\EmailAddress;
use RCDE\Translation\Main;
use RCDE\Translation\Work;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $page_key = 'work-with-us' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /** @var Main $m */

    $w = new Work();
    ?>
    <meta name="description" property="og:description" content="<?= $w->t('description') ?>" />
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main>
    <section
            class="jumbotron jumbotron-fluid d-flex align-items-center bg-image treballa-amb-nosaltres blue filter text-white full-height-jumbotron">
        <div class="container text-center">
            <div class="shadowed-text">
                <h1 class="display-4 mb-3"><?= $m->t('work-with-us') ?></h1>
                <p class="lead mb-4">
                    <?= $w->t('work-questions') ?>
                    <br>
                    <?= $w->t('send-resume') ?>
                </p>
            </div>
            <?php $address = new EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
