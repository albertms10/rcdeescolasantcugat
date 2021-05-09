<?php

use RCDE\Model\PictureGallery;
use RCDE\Translation\Structure;

/** @var Structure $s */
?>

<section class="page-section bg-light pt-5">
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
                <p class="lead" style="font-weight: inherit">
                    La <a href="<?= $s->resolvedUrl('rcde-escola')['url'] ?>">RCDE Escola Sant Cugat</a>
                    organitza el I RCDE Campus La Cerdanya, a la localitat de Bellver de Cerdanya, del
                    <time datetime="2021-06-28">dilluns <b>28 de juny</b></time>
                    al
                    <time datetime="2021-07-03">dissabte <b>3 de juliol</b> de 2021.</time>
                </p>
                <h3 id="a-qui-va-dirigit" class="mt-5" data-heading>A qui va dirigit</h3>
                <hr class="divider my-4 ml-0">
                <p>
                    Aquesta activitat s’adreça a nens i nenes des dels 7 fins als 14 anys, seguint una planificació
                    i una estructura específica d’entrenaments. Els entrenadors exerceixen habitualment la seva tasca en
                    la RCDE Escola de Sant Cugat.
                </p>
                <h3 id="que-farem" class="mt-5" data-heading>Què farem</h3>
                <hr class="divider my-4 ml-0">
                <p>
                    A més dels entrenaments específics de futbol, durem a terme un seguit d’activitats dirigides a
                    potenciar la formació integral, una sana convivència entre tots els participants i un descobriment
                    de l’entorn privilegiat en el qual, envoltats de natura i d’història, podrem gaudir d’una magnífica
                    setmana d’estiu.
                </p>
                <p>
                    Sessions tècnic-tàctiques, cinefòrum, piscina, turisme de muntanya, taller de lectoescriptura,
                    jocs dirigits, concursos i moltes més activitats per completar un temps de treball i diversió.
                </p>

                <h3 id="que-inclou" class="mt-5" data-heading>Què inclou</h3>
                <hr class="divider my-4 ml-0">

                <ul>
                    <li>Allotjament en règim de pensió completa a l’Alberg La Bruna.</li>
                    <li>Cobertura mèdica.</li>
                    <li>Matrícula i material.</li>
                    <li>Entrenadors, professors i direcció tècnica 24 hores.</li>
                    <li>Equipacions d’entrenament i de passeig.</li>
                    <li>Dos entrenaments diaris, matí i tarda, en camp d’herba.</li>
                    <li>Desplaçaments amb autocar.</li>
                    <li>Taller de lectoescriptura.</li>
                    <li>Activitats d’oci i temps lliure.</li>
                    <li>Competicions per categories.</li>
                    <li>Turisme de muntanya.</li>
                    <li>Tour i cloenda al RCDE Stadium.</li>
                    <li>Diploma oficial de participació en el I RCDE Campus La Cerdanya.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-transparent mt-5" style="border-radius: .5rem; border: dashed 1px var(--blau)">
                    <div class="card-body">
                        <p class="h3 text-primary">475&nbsp;€</p>
                        <ul class="small list-group list-group-flush">
                            <li class="list-group-item bg-light">Descompte del <b>10%</b> en el 2n germà</li>
                            <li class="list-group-item bg-light">Descompte del <b>15%</b> en el 3r germà</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="imatges" data-heading="Imatges">
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <?php
                $picture_gallery = new PictureGallery(
                    src_dir: '/assets/img/campus/la-cerdanya-2021',
                    thumbnail_src_dir: '/assets/img/campus/la-cerdanya-2021',
                    title: 'RCDE',
                    subtitle: 'Campus',
                    width: 650, height: 434,
                    picture_names: [
                        'bellver_cerdanya',
                        'camp_bellver',
                        'entrenament_rcde',
                        'recepcio_la_bruna',
                        'menjador_la_bruna',
                        'habitacio_la_bruna',
                    ]
                );
                include ROOT . '/../src/View/images-gallery.php' ?>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-primary" id="formulari" data-heading="Formulari">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <p class="h4 text-white mt-0 mb-4">
                    Si vols estar al dia de les novetats, omple aquest breu formulari i reserva la teva plaça.
                </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" rel="external noopener" target="_blank"
                   href="https://forms.gle/X3MNjLVnuQtgeNCu8">
                    Formulari<i class="fas fa-external-link-square-alt ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-light">
    <div class="container">
        <ul class="small text-secondary">
            <li>El <b>I RCDE Campus La Cerdanya</b> està limitat a 60 places.</li>
            <li>La realització del <b>I RCDE Campus La Cerdanya</b> depèn de la situació sanitària i de la cobertura
                mínima de places.
            </li>
            <li>Atenent a la situació excepcional en què ens trobem, se seguirà el protocol COVID–19 en tot
                moment.
            </li>
            <li>A començaments del mes de juny, es convocarà una reunió en línia per a totes les famílies que hagin
                reservat la seva plaça o hagin demanat informació.
            </li>
            <li>Els convidarem a participar al Canal de Telegram on podran gaudir de totes les novetats.</li>
        </ul>
    </div>
</section>
