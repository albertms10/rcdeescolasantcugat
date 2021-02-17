<!DOCTYPE html>
<html lang="ca">

<head>
    <?php define('ROOT', $_SERVER['DOCUMENT_ROOT']) ?>
    <?php $link_pagina = 'publicitat-i-empresa' ?>

    <?php include ROOT . '/../src/View/incs-top.php' ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/publicitat-i-empresa/">

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
                <h1 class="display-4">Publicitat i empresa</h1>
                <p class="lead">Si tens una empresa o un negoci i vols donar-te a conèixer, t’ho posem molt fàcil. <br>
                                Contacta amb nosaltres i veurem quines són les millors possibilitats per ser el <br>
                                patrocinador d’un o més equips o de la RCDE Escola Sant Cugat.</p>
            </div>
            <?php $address = new RCDE\EmailAddress(user: 'direcciotecnica');
            include ROOT . '/../src/View/email-address.php' ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
