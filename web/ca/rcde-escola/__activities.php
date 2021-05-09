<?php use RCDE\Model\Picture; ?>

<h2 class="h1 mb-4" id="activitats" data-heading>Activitats</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm bg-transparent border-0 text-white">
            <?php
            $picture = new Picture(
                src: '/assets/img/noticies/campus-cerdanya-2021',
                alt: 'RCDE Escola',
                width: 1920, height: 1280,
                classlist: 'card-img filter-brightness-80',
            );
            include ROOT . '/../src/View/img-set.php' ?>
            <a href="/rcde-escola/campus/la-cerdanya-2021">
                <div class="card-img-overlay d-flex flex-column justify-content-end text-light">
                    <h5 class="card-title">Campus</h5>
                    <p class="card-text">RCDE Escola Sant Cugat</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm bg-transparent border-0 text-white">
            <?php
            $picture = new Picture(
                src: '/assets/img/noticies/recollida-aliments-caritas-2020',
                alt: 'RCDE Escola',
                width: 1920, height: 1280,
                classlist: 'card-img filter-brightness-80',
            );
            include ROOT . '/../src/View/img-set.php' ?>
                <div class="card-img-overlay d-flex flex-column justify-content-end text-light">
                    <h5 class="card-title">Recollida d’aliments</h5>
                    <p class="card-text">Càritas</p>
                </div>
        </div>
    </div>
</div>
