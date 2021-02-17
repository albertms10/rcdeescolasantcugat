<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <?php $link_pagina = 'treballa-amb-nosaltres' ?>
    <?php include ROOT . '/../src/View/incs-top.php' ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/treballa-amb-nosaltres/">

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
                <h1 class="display-4 mb-3">Treballa amb nosaltres</h1>
                <p class="lead mb-4">
                    Vols ser part activa de la nostra escola? T’agradaria treballar amb nosaltres?
                    <br>
                    Envia’ns el teu currículum i concretarem una entrevista!
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
