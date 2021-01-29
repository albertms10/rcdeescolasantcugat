<?php session_start() ?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <?php define("ROOT", $_SERVER["DOCUMENT_ROOT"]) ?>
    <?php $link_pagina = "contacte" ?>

    <?php include ROOT . "/../src/View/incs-top.php" ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/contacte/">

    <script defer src="/assets/js/contact-form-validation.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . "/../src/View/header.php" ?>

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
                            <li>No inclogueu enllaços ni adreces electròniques en el cos del document.</li>
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
                        <pre><?php echo $_GET['msg'] ?></pre>
                    <?php endif ?>
                    <hr>
                    Torneu-ho a provar o dirigiu-vos a
                    <a class="alert-link"
                       href="mailto:webmaster@rcdeescolasantcugat.com">webmaster@rcdeescolasantcugat.com</a>.
                </div>
            <?php endif ?>
            <form class="needs-validation" action="/api/post-missatge.php" method="post" novalidate>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom"
                           value="<?php echo $_SESSION['nom'] ?? '' ?>"
                           required <?php if ($res !== 'invalid' && $res !== 'err') echo 'autofocus' ?>
                           autocomplete="on">
                    <div class="invalid-feedback">Introduïu un nom de contacte.</div>
                </div>
                <div class="form-group">
                    <label for="email">Adreça electrònica</label>
                    <input type="email" class="form-control" name="email" id="email"
                           value="<?php echo $_SESSION['email'] ?? '' ?>" required autocomplete="on">
                    <div class="valid-feedback">L’adreça electrònica és vàlida.</div>
                    <div class="invalid-feedback">Introduïu una adreça electrònica de contacte.</div>
                </div>
                <div class="form-group">
                    <label for="missatge">Missatge</label>
                    <textarea class="form-control" name="missatge" id="missatge" rows="4" required
                              <?php if ($res === 'invalid' || $res === 'err') echo 'autofocus' ?>
                              autocomplete="off"><?php echo $_SESSION['missatge'] ?? '' ?></textarea>
                    <div class="invalid-feedback">Introduïu el missatge.</div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-xl" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="text-center py-5">
            <p class="lead">O bé envia’ns un correu electrònic a</p>
            <a class="btn btn-light btn-xl"
               href="mailto:direcciotecnica@rcdeescolasantcugat.com">
                direcciotecnica
                <br>
                <span class="text-secondary">@rcdeescolasantcugat.com</span>
            </a>
        </div>
    </div>
</main>

<?php include ROOT . "/../src/View/footer.php" ?>
</body>

</html>
