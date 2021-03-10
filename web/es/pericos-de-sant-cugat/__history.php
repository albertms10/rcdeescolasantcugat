<?php use RCDE\Model\Picture; ?>

<h2 class="h1" id="historia" data-heading>Historia</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="la-penya">La Peña</h3>
        <hr class="divider my-4 ml-0">

        <div class="row justify-content-center mt-1 mb-4">
            <div class="col-md-8">
                <?php
                $picture = new Picture(
                    src: '/assets/img/logo/Pericos_blau',
                    alt: 'Logo Pericos de Sant Cugat',
                    width: 500, height: 240,
                );
                include ROOT . '/../src/View/img-set.php' ?>
            </div>
        </div>

        <p>El día
            <time datetime="2004-10-19">19 de octubre de 2004</time>
           un grupo de unos cuarenta socios y simpatizantes del Real Club Deportivo Español de Barcelona se reunió en el
           bar ‘Los Italianos’ de nuestra ciudad con la intención de crear una peña blanquiazul.
        </p>

        <div class="mb-4">
            <?php
            $picture = new Picture(
                src: '/assets/img/fotos/pericos-1',
                alt: 'Penya Pericos',
            );
            include ROOT . '/../src/View/img-set.php' ?>
        </div>

        <p>En aquella primera reunión se decidió:</p>
        <ol>
            <li>El nombre oficial de la peña sería el de <em>Pericos de Sant Cugat</em> según la votación realizada a
                mano alzada.
            </li>
            <li>Aprobar los Estatutos de peña <em>Pericos de Sant Cugat</em>, que son reproducción íntegra de los
                Estatutos de la Asociación facilitados por la Federación Catalana de Peñas del RCDE, con las
                especificaciones correspondientes a nuestra peña.
            </li>
            <li>Aprobación de las cuotas anuales.</li>
            <li>Designación de los miembros de la primera Junta Directiva de la Peña y delegación de las funciones de
                gestión y representación, tal y como establece el artículo 15 de los Estatutos.
            </li>
            <li>Convocar un concurso para confeccionar el logotipo de Pericos de Sant Cugat. El logo debería combinar
                rasgos característicos del RCDE —escudo, periquito, etc.— y del municipio de Sant Cugat —Monasterio, Pi
                d’en Xandri, etc.
            </li>
        </ol>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/pericos-2',
            alt: 'Penya Pericos',
        );
        include ROOT . '/../src/View/img-set.php' ?>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <nav data-nav-items="historia"></nav>
    </div>
</div>
