<?php session_start() ?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <?php define('ROOT', $_SERVER['DOCUMENT_ROOT']) ?>
    <?php $link_pagina = 'contacte' ?>

    <?php include ROOT . '/../src/View/incs-top.php' ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/contacte/">

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
            <h1 class="display-4">Contacte</h1>
            <p class="lead">Escriu-nos un missatge.</p>
        </div>
    </section>
    <div class="bg-light pt-5">
        <div class="container text-left" style="max-width: 500px">
            <?php
            $res = $_GET['res'] ?? '';
            if ($res === 'ok'): ?>
                <div class="alert alert-success" role="alert">
                    El missatge s’ha enviat satisfactòriament.
                </div>
            <?php elseif ($res === 'invalid'): ?>
                <div class="alert alert-warning" role="alert">
                    El cos del missatge no és vàlid.
                    <ul class="mb-0">
                        <?php if (isset($_GET['contains-link'])): ?>
                            <li>No inclogueu enllaços ni adreces electròniques en el nom ni en el cos del missatge.</li>
                        <?php endif ?>
                    </ul>
                </div>
            <?php elseif ($res === 'err'): ?>
                <div class="alert alert-danger" role="alert">
                    Hi ha hagut un error en enviar el missatge.
                    <br>
                    Disculpeu les molèsties.
                    <?php if (isset($_GET['msg'])): ?>
                        <hr>
                        <pre><?= $_GET['msg'] ?></pre>
                    <?php endif ?>
                    <div class="mb-1" style="height: 32px">
                        <form class="needs-validation" action="/api/send-error-message.php" method="post" novalidate>
                            <input type="hidden" name="nom" value="<?= urlencode($_SESSION['nom']) ?>">
                            <input type="hidden" name="email" value="<?= urlencode($_SESSION['email']) ?>">
                            <input type="hidden" name="err" value="<?= urlencode($_GET['msg']) ?>">
                            <button type="submit" class="btn btn-danger btn-xl float-right"
                                    style="padding: .4rem .8rem; font-size: .8rem">
                                Informa de l’error
                            </button>
                        </form>
                    </div>
                </div>
            <?php elseif ($res === 'err_sent'): ?>
                <div class="alert alert-info" role="alert">
                    S’ha notificat el missatge d’error a l’administració.
                    <br>
                    Gràcies per la col·laboració i disculpeu les molèsties.
                </div>
            <?php endif ?>
            <form class="needs-validation" action="/api/post-missatge.php" method="post" novalidate>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom"
                           value="<?= urldecode($_SESSION['nom'] ?? '') ?>"
                           required <?= (($res !== 'invalid') && ($res !== 'err')) ? 'autofocus' : '' ?>
                           autocomplete="on">
                    <div class="invalid-feedback">Introduïu un nom de contacte.</div>
                </div>
                <div class="form-group">
                    <label for="email">Adreça electrònica</label>
                    <input type="email" class="form-control" name="email" id="email"
                           value="<?= urldecode($_SESSION['email'] ?? '') ?>" required autocomplete="on">
                    <div class="valid-feedback">L’adreça electrònica és vàlida.</div>
                    <div class="invalid-feedback">Introduïu una adreça electrònica de contacte.</div>
                </div>
                <div class="form-group">
                    <label for="missatge">Missatge</label>
                    <textarea class="form-control" name="missatge" id="missatge" rows="4" required
                              <?= (($res === 'invalid') || ($res === 'err')) ? 'autofocus' : '' ?>
                              autocomplete="off"><?= urldecode($_SESSION['missatge'] ?? '') ?></textarea>
                    <div class="invalid-feedback">Introduïu el missatge.</div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-xl" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="text-center py-5">
            <p class="lead">O bé envia’ns un correu electrònic a</p>
            <?php $address = new RCDE\EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </div>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
