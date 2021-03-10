<?php

use RCDE\Model\Iframe;
use RCDE\Model\Picture;
use RCDE\Translation\Structure;

/** @var Structure $s */
?>

<h2 class="h1" id="qui-som" data-heading>Qui som</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="els-inicis">Els inicis</h3>
        <hr class="divider my-4 ml-0">
        <p>Des de l’any
            <time datetime="2009">2009,</time>
           arrel de la iniciativa de la penya
            <a href="<?= $s->resolvedUrl('pericos-de-sant-cugat')['url'] ?>">Pericos de Sant Cugat</a>, la nostra
           ciutat disposa d’una escola de futbol per a nens i nenes des dels quatre anys, on l’esport constitueix una
           eina bàsica per a la formació integral de cada jugador.
        </p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola-3',
            alt: 'RCDE Escola',
        );
        include ROOT . '/../src/View/img-set.php' ?>

        <h3 id="xef" class="mt-5">La Xarxa d’Escoles de Futbol</h3>
        <hr class="divider my-4 ml-0">
        <p>En el moment de la seva fundació, l’escola formava part del projecte XEF, dependent de la
           Fundació Privada del RCDE. A tota Catalunya engegava la Xarxa d’Escoles de Futbol del RCDE i Sant
           Cugat era part activa d’aquesta fita, organitzant una de les Trobades i participant a totes les
           activitats que el Club posava a l’abast.</p>

        <?php
        $iframe = new Iframe(
            src: "https://www.youtube-nocookie.com/embed/ZaP-lZgY1UQ?hl={$_SESSION['LOCALE']}",
            title: 'Reproductor YouTube'
        );
        include ROOT . '/../src/View/responsive-iframe.php' ?>

        <h3 id="escola" class="mt-5">L’Escola</h3>
        <hr class="divider my-4 ml-0">
        <p>A la temporada
            <time datetime="2017">2017–18,</time>
           l’escola s’integra a l’estructura pròpia del futbol base del Club i
           canvia la seva denominació per RCDE Escola. Amb aquest canvi es pretén dotar a l’escola de noves
           eines, tot mantenint una relació directa amb el Club que permeti un desenvolupament esportiu i
           organitzatiu més adient.
        </p>
        <p>Actualment la <a href="<?= $s->resolvedUrl('/')['url'] ?>">RCDE Escola Sant Cugat</a> compta amb una
           vuitantena de jugadors i participa amb cinc equips a la Lliga Escolar organitzada pel Consell Esportiu de
           Terrassa.</p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola-2',
            alt: 'RCDE Escola',
        );
        include ROOT . '/../src/View/img-set.php' ?>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <nav data-nav-items="qui-som"></nav>
    </div>
</div>
