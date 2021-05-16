<?php

use RCDE\Model\EmailAddress;
use RCDE\Translation\Advertising;
use RCDE\Translation\Main;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $page_key = 'advertising-and-business' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var Main $m
     * @var Structure $s
     */

    $a = new Advertising();
    ?>
    <meta name="description" property="og:description" content="<?= $a->t('description') ?>" />
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main>
    <section
            class="jumbotron jumbotron-fluid d-flex align-items-center bg-image publicitat-i-empresa blue filter text-white full-height-jumbotron">
        <div class="container text-center">
            <div class="shadowed-text">
                <h1 class="display-4 mb-3"><?= $m->t('advertising-and-business') ?></h1>
                <p class="lead mb-4"><?= preg_replace(
                        '/(RCDE Escola Sant Cugat)/',
                        "<a href=\"{$s->resolvedUrl('rcde-escola')['url']}\" class=\"badge badge-light\">\${1}</a>",
                        $a->t('advertising-body')
                    ) ?></p>
            </div>
            <?php $address = new EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
