<?php
defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php $link_pagina = 'contacte' ?>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var RCDE\Translation\Main $m
     */

    require_once ROOT . '/../src/Translation/Contact.php';
    $c = new RCDE\Translation\Contact();
    ?>
    <meta name="description" property="og:description" content="<?= $c->t('description') ?>" />

    <script defer src="/assets/js/contact-form-validation.js"></script>

    <?php require_once ROOT . '/../src/Model/EmailAddress.php' ?>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main>
    <section
            class="jumbotron jumbotron-fluid d-flex align-items-center bg-image publicitat-i-empresa blue filter text-white"
            style="margin-bottom: 0; text-shadow: 0 0 2rem black">
        <div class="container text-center">
            <h1 class="display-4"><?= $m->t('contact') ?></h1>
            <p class="lead"><?= $c->t('contact-us') ?></p>
        </div>
    </section>
    <div class="bg-light pt-5">
        <div class="container text-left" style="max-width: 500px">
            <?php
            $res = $_GET['res'] ?? '';
            if ($res === 'ok'): ?>
                <div class="alert alert-success" role="alert">
                    <?= $c->t('res-ok') ?>
                </div>
            <?php elseif ($res === 'invalid'): ?>
                <div class="alert alert-warning" role="alert">
                    <?= $c->t('res-invalid') ?>
                    <ul class="mb-0">
                        <?php if (isset($_GET['contains-link'])): ?>
                            <li><?= $c->t('contains-link') ?></li>
                        <?php endif ?>
                    </ul>
                </div>
            <?php elseif ($res === 'err'): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $c->t('res-err') ?>
                    <?php if (isset($_GET['msg'])): ?>
                        <hr>
                        <pre><?= $_GET['msg'] ?></pre>
                    <?php endif ?>
                    <div class="mb-1" style="height: 32px">
                        <form class="needs-validation" action="/api/send-error-message.php" method="post" novalidate>
                            <input type="hidden" name="nom" value="<?= urlencode($_SESSION['nom'] ?? '') ?>">
                            <input type="hidden" name="email" value="<?= urlencode($_SESSION['email'] ?? '') ?>">
                            <input type="hidden" name="err" value="<?= urlencode($_GET['msg'] ?? '') ?>">
                            <button type="submit" class="btn btn-danger btn-xl float-right"
                                    style="padding: .4rem .8rem; font-size: .8rem">
                                <?= $c->t('report-error') ?>
                            </button>
                        </form>
                    </div>
                </div>
            <?php elseif ($res === 'err_sent'): ?>
                <div class="alert alert-info" role="alert">
                    <?= $c->t('res-err-sent') ?>
                </div>
            <?php endif ?>
            <form class="needs-validation" action="/api/post-missatge.php" method="post" novalidate>
                <div class="form-group">
                    <label for="nom"><?= $c->t('name') ?></label>
                    <input type="text" class="form-control" name="nom" id="nom"
                           value="<?= urldecode($_SESSION['nom'] ?? '') ?>"
                           required <?= (($res !== 'invalid') and ($res !== 'err')) ? 'autofocus' : '' ?>
                           autocomplete="on">
                    <div class="invalid-feedback"><?= $c->t('enter-name') ?></div>
                </div>
                <div class="form-group">
                    <label for="email"><?= $c->t('email') ?></label>
                    <input type="email" class="form-control" name="email" id="email"
                           value="<?= urldecode($_SESSION['email'] ?? '') ?>" required autocomplete="on">
                    <div class="valid-feedback"><?= $c->t('valid-email') ?></div>
                    <div class="invalid-feedback"><?= $c->t('enter-email') ?></div>
                </div>
                <div class="form-group">
                    <label for="missatge"><?= $c->t('message') ?></label>
                    <textarea class="form-control" name="missatge" id="missatge" rows="4" required
                              <?= (($res === 'invalid') or ($res === 'err')) ? 'autofocus' : '' ?>
                              autocomplete="off"><?= urldecode($_SESSION['missatge'] ?? '') ?></textarea>
                    <div class="invalid-feedback"><?= $c->t('enter-message') ?></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-xl" type="submit"><?= $c->t('send') ?></button>
                </div>
            </form>
        </div>
        <div class="text-center py-5">
            <p class="lead"><?= $c->t('or-send-email-to') ?></p>
            <?php $address = new RCDE\Model\EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </div>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
