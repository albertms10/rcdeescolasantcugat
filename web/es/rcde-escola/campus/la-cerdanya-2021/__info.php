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
                    organiza el I RCDE Campus La Cerdanya, en la localidad de Bellver de Cerdanya, del
                    <time datetime="2021-06-28">lunes <b>28 de junio</b></time>
                    al
                    <time datetime="2021-07-03">sábado <b>3 de julio</b> de 2021.</time>
                </p>
                <h3 id="a-quien-va-dirigido" class="mt-5" data-heading>A quién va dirigido</h3>
                <hr class="divider my-4 ml-0">
                <p>
                    Esta actividad está dirigida a niños y niñas desde los 7 hasta los 14 años, siguiendo una
                    planificación y una estructura específica de entrenamientos. Los entrenadores desempeñan
                    habitualmente su labor en la RCDE Escola de Sant Cugat.
                </p>
                <h3 id="que-haremos" class="mt-5" data-heading>Qué haremos</h3>
                <hr class="divider my-4 ml-0">
                <p>
                    Además de los entrenamientos específicos de fútbol, llevaremos a cabo una serie de actividades
                    destinadas a potenciar la formación integral, una sana convivencia entre todos los participantes y
                    un descubrimiento del entorno privilegiado en el que, rodeados de naturaleza y de historia, podremos
                    disfrutar de una magnífica semana de verano.
                </p>
                <p>
                    Sesiones técnico-tácticas, cine fórum, piscina, turismo de montaña, taller de lectoescritura, juegos
                    dirigidos, concursos y muchas más actividades para completar un tiempo de trabajo y diversión.
                </p>

                <h3 id="que-incluye" class="mt-5" data-heading>Qué incluye</h3>
                <hr class="divider my-4 ml-0">

                <ul>
                    <li>Alojamiento en régimen de pensión completa en el Alberg La Bruna.</li>
                    <li>Cobertura médica.</li>
                    <li>Matrícula y material.</li>
                    <li>Entrenadores, profesores y dirección técnica 24 horas.</li>
                    <li>Equipaciones de entrenamiento y de paseo.</li>
                    <li>Dos entrenamientos diarios, mañana y tarde, en campo de césped natural.</li>
                    <li>Desplazamientos en autocar.</li>
                    <li>Taller de lectoescritura.</li>
                    <li>Actividades de ocio y tiempo libre.</li>
                    <li>Competiciones por categorías.</li>
                    <li>Turismo de montaña.</li>
                    <li>Tour y jornada de clausura en el RCDE Stadium.</li>
                    <li>Diploma oficial de participación en el I RCDE Campus La Cerdanya.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-transparent mt-5" style="border-radius: .5rem; border: dashed 1px var(--blau)">
                    <div class="card-body">
                        <p class="h3 text-primary">475&nbsp;€</p>
                        <ul class="small list-group list-group-flush">
                            <li class="list-group-item bg-light">Descuento del <b>10%</b> en el segundo hermano</li>
                            <li class="list-group-item bg-light">Descuento del <b>15%</b> en el tercer hermano</li>
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

<section class="page-section bg-primary" id="formulario" data-heading="Formulario">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <p class="h4 text-white mt-0 mb-4">
                    Si quieres estar al día de las novedades, rellena este breve formulario y reserva tu plaza.
                </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" rel="external noopener" target="_blank"
                   href="https://forms.gle/X3MNjLVnuQtgeNCu8">
                    Formulario<i class="fas fa-external-link-square-alt ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-light">
    <div class="container">
        <ul class="small text-secondary">
            <li>El <b>I RCDE Campus La Cerdanya</b> está limitado a 60 plazas.</li>
            <li>La realización del <b>I RCDE Campus La Cerdanya</b> depende de la situación sanitaria y de la cobertura
                mínima de plazas.
            </li>
            <li>Atendiendo a la situación excepcional en la que nos encontramos, se seguirá el protocolo COVID–19 en
                todo momento.
            </li>
            <li>A principios de junio, se convocará una reunión informativa online con todas las familias que hayan
                reservado su plaza o hayan solicitado información.
            </li>
            <li>Se les invitará a participar en el Canal de Telegram para que estén informados de todas las novedades.
            </li>
        </ul>
    </div>
</section>
