<?php

use RCDE\Iframe;
use RCDE\Picture;

require_once ROOT . '/../src/Model/Iframe.php';
require_once ROOT . '/../src/Model/Picture.php';
?>

<h2 class="h1" id="quienes-somos" data-heading>Quiénes somos</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="los-inicios">Los inicios</h3>
        <hr class="divider my-4 ml-0">
        <p>Desde el año
            <time datetime="2009">2009,</time>
           gracias a la iniciativa de la peña <em>Pericos de Sant Cugat</em>, nuestra ciudad dispone de una escuela de
           fútbol para niños y niñas, desde los cuatro años, donde el deporte constituye una herramienta básica para la
           formación integral de cada jugador.
        </p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola-3',
            alt: 'RCDE Escola',
        );
        include ROOT . '/../src/View/img-set.php' ?>

        <h3 id="xef" class="mt-5">La Xarxa d’Escoles de Futbol</h3>
        <hr class="divider my-4 ml-0">
        <p>En el momento de su fundación, la escuela formaba parte del proyecto CHEF, dependiente de la Fundación
           Privada del RCDE. En toda Cataluña arrancaba la Red de Escuelas de Fútbol del RCDE y Sant Cugat era parte
           activa de este hito, organizando uno de los Encuentros y participando en todas las actividades que el Club
           ponía al alcance.</p>

        <?php
        $iframe = new Iframe(
            src: "https://www.youtube-nocookie.com/embed/ZaP-lZgY1UQ?hl={$_SESSION['LOCALE']}",
            title: 'Reproductor YouTube'
        );
        include ROOT . '/../src/View/responsive-iframe.php' ?>

        <h3 id="escuela" class="mt-5">La Escuela</h3>
        <hr class="divider my-4 ml-0">
        <p>En la temporada
            <time datetime="2017">2017–18,</time>
           la escuela se integra en la estructura propia del fútbol base del Club y cambia su denominación por RCDE
           Escola. Con este cambio se pretende dotar a la escuela de nuevas herramientas, manteniendo una relación
           directa con el Club que permita un desarrollo deportivo y organizativo más adecuado.
        </p>
        <p>Actualmente la RCDE Escola Sant Cugat cuenta con casi un centenar de jugadores y participa con cinco equipos
           en la Liga Escolar organizada por el Consejo Deportivo de Terrassa.</p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola-2',
            alt: 'RCDE Escola',
        );
        include ROOT . '/../src/View/img-set.php' ?>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <div data-nav-items="quienes-somos"></div>
    </div>
</div>
