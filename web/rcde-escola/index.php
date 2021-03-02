<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <?php $link_pagina = 'rcde-escola' ?>
    <?php include ROOT . '/../src/View/incs-top.php' ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/rcde-escola/">

    <script defer src="/assets/js/nav-headers.js"></script>

    <?php require_once ROOT . '/../src/Controller/CosTecnicController.php' ?>
    <?php require_once ROOT . '/../src/Controller/TitularPremsaController.php' ?>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="text-content">
    <?php include ROOT . '/../src/View/jumbotron.php' ?>
    <section id="qui-som" class="page-section bg-light">
        <div class="container">
            <h2 class="h1">Qui som</h2>
            <div class="row mt-lg-5">
                <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
                    <h3 id="els-inicis">Els inicis</h3>
                    <hr class="divider my-4 ml-0">
                    <p>Des de l’any 2009, arrel de la iniciativa de la penya <em>Pericos de Sant Cugat</em>, la nostra
                       ciutat disposa d’una escola de futbol per nens i nenes des dels quatre anys, on l’esport
                       constitueix una eina bàsica per a la formació integral de cada jugador.</p>

                    <img src="/assets/img/fotos/rcde-escola-3.webp" class="rounded" loading="lazy" alt="RCDE Escola"
                         width="800" height="600" style="width:100%">

                    <h3 id="xef" class="mt-5">La Xarxa d’Escoles de Futbol</h3>
                    <hr class="divider my-4 ml-0">
                    <p>En el moment de la seva fundació, l’escola formava part del projecte XEF, dependent de la
                       Fundació Privada del RCDE. A tota Catalunya engegava la Xarxa d’Escoles de Futbol del RCDE i Sant
                       Cugat era part activa d’aquesta fita, organitzant una de les Trobades i participant a totes les
                       activitats que el Club posava a l’abast.</p>

                    <div class="container-ratio ratio--16-9 rounded mt-2 mb-2 w-100 overflow-hidden">
                        <iframe data-src="https://www.youtube-nocookie.com/embed/ZaP-lZgY1UQ"
                                frameborder="0" title="Reproductor YouTube"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="lazyload" loading="lazy"></iframe>
                    </div>

                    <h3 id="escola" class="mt-5">L’Escola</h3>
                    <hr class="divider my-4 ml-0">
                    <p>A la temporada 2017–18, l’escola s’integra a l’estructura pròpia del futbol base del Club i
                       canvia la seva denominació per RCDE Escola. Amb aquest canvi es pretén dotar a l’escola de noves
                       eines, tot mantenint una relació directa amb el Club que permeti un desenvolupament esportiu i
                       organitzatiu més adient.</p>
                    <p>Actualment la RCDE Sant Cugat compta amb una vuitantena de jugadors i participa amb cinc equips a
                       la Lliga Escolar organitzada pel Consell Esportiu de Terrassa.</p>

                    <img src="/assets/img/fotos/rcde-escola-2.webp" class="rounded" loading="lazy" alt="RCDE Escola"
                         width="800" height="600" style="width:100%">
                </div>
                <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                    <div data-nav-items="qui-som"></div>
                </div>
            </div>
    </section>
    <section id="com-treballem" class="page-section bg-light">
        <div class="container">
            <h2 class="h1">Com treballem</h2>
            <div class="row mt-lg-5">
                <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
                    <h3 id="objectius">Objectius</h3>
                    <hr class="divider my-4 ml-0">
                    <p>Sota la supervisió dels responsables del futbol base i la coordinació de la direcció tècnica de
                       l’Escola, es procura que tots els alumnes que arribin, puguin gaudir de la pràctica esportiva en
                       un ambient d’esforç, alegria i compromís.</p>
                    <p>El nostre principal objectiu és possibilitar una contribució efectiva, mitjançant l’esport i el
                       valors positius que d’aquesta activitat es poden treure, a la formació integral de tots els
                       alumnes que tenim temporada rere temporada.</p>
                    <p>La pràctica esportiva associada als valors del treball, la superació personal, la responsabilitat
                       i l’esforç juntament amb la referència pròpia del RCD Espanyol ens defineix cada temporada la
                       nostra tasca educativa.</p>

                    <img src="/assets/img/fotos/rcde-escola.webp" class="rounded" loading="lazy" alt="RCDE Escola"
                         width="1920" height="1280" style="width:100%">

                    <h3 id="planificacio" class="mt-5">Planificació</h3>
                    <hr class="divider my-4 ml-0">
                    <p>A partir de la temporada 2017–18, tot el cos tècnic treballa per materialitzar una planificació
                       adient a la nostra realitat a través de les tasques de cada entrenador, de l’observació directa
                       i de l’avaluació posterior de cada grup i del conjunt de l’Escola.</p>
                    <p>Treballem per aconseguir que l’alumne que arriba a l’Escola, independentment de l’edat que
                       tingui, pugui marcar-se uns objectius personals i de grup reals i posem els mitjans perquè els
                       assoleixi.</p>
                    <p>L’activitat es comença als quatre anys i finalitza quan s’arriba a la categoria infantil.
                       Treballem en grups reduïts, sempre que les infraestructures ens ho permeten, i, com a complement
                       d’aquesta formació, els alumnes poden participar a la Lliga Escolar que organitza el Consell
                       Esportiu de Terrassa.</p>
                    <p>La competició esdevé una eina profitosa on cada alumne pot posar a prova els seus aprenentatges
                       davant dels jugadors dels equips rivals i destacar la importància del treball cooperatiu amb els
                       seus propis companys, en un ambient de respecte i esportivitat.</p>
                    <p>Al setembre comencem els entrenaments i procurem seguir la dinàmica escolar buscant facilitar la
                       logística familiar de cada alumne. Entrenem dos dies a la setmana, una hora i mitja cada dia
                       d’entrenament més el partit del cap de setmana que acostuma a jugar-se els dissabtes al matí,
                       tenint un calendari molt flexible pel que fa als dies festius.</p>

                    <img src="/assets/img/fotos/rcde-escola-4.webp" class="rounded" loading="lazy" alt="RCDE Escola"
                         width="800" height="600" style="width:100%">
                </div>
                <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                    <div data-nav-items="com-treballem"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="cos-tecnic" class="page-section bg-blau-fosc text-white">
        <div class="container">
            <h2 class="h1">Cos tècnic</h2>
            <div class="container mt-4">
                <div class="row">
                    <?php $entrenadors = RCDE\CosTecnicController::llistaEntrenadors();
                    foreach ($entrenadors as $key => $entrenador): ?>
                        <div class="col-lg-3 col-md-4 p-3 text-center user-card">
                            <div class="transform-center p-3" style="width:8rem; height:8rem">
                                <?php
                                $nom_entrenador = str_replace(' ', '-', mb_strtolower($entrenador->nom_complet));
                                if (file_exists(ROOT . "/assets/img/entrenadors/$nom_entrenador.webp")): ?>
                                    <img src="/assets/img/entrenadors/<?= $nom_entrenador ?>.webp"
                                         class="img-fit transform-center rounded-circle"
                                         width="96" height="96" alt="<?= $entrenador->nom_complet ?>">
                                <?php else: ?>
                                    <i class="fas fa-5x fa-user-circle mb-3 mt-2" style="opacity:.5"></i>
                                <?php endif ?>
                            </div>
                            <h5><?= $entrenador->nom_complet ?></h5>
                            <h6 class="badge badge-pill badge-<?= match ($entrenador->id_rol_costecnic) {
                                1 => 'warning',
                                2 => 'primary',
                                3 => 'success',
                            } ?>"><?= $entrenador->rol_costecnic ?></h6>
                            <p class="text-translucent">
                                <?= ordinal($entrenador->count_temporades) ?> temporada
                            </p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <section id="retalls-de-premsa" class="page-section">
        <div class="container">
            <h2 class="h1">Retalls de premsa</h2>
            <hr class="divider my-4 ml-0">
            <div class="row">
                <?php
                $titulars_premsa = RCDE\TitularPremsaController::llistaTitularsPremsa();
                foreach ($titulars_premsa as $titular_premsa): ?>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4><?= $titular_premsa->text_titular ?></h4>
                                <?php if (isset($titular_premsa->data_titular)): ?>
                                    <time datetime="<?= $titular_premsa->data_titular ?>"><?= strftime('%-e %B %Y', strtotime($titular_premsa->data_titular)) ?></time>
                                <?php endif ?>
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($titular_premsa->getUrls() as $url_titular):
                                    $host_name = str_replace('www.', '', parse_url($url_titular['url'], PHP_URL_HOST)) ?>
                                    <a href="<?= $url_titular['url'] ?>"
                                       class="list-group-item list-group-item-action d-flex align-items-center"
                                       title="Visita <?= $host_name ?> a una nova finestra o pestanya"
                                       rel="external noopener nofollow noreferrer"
                                       target="_blank">
                                        <i class="<?= match ($host_name) {
                                            'youtube.com' => 'fab fa-youtube',
                                            'issuu.com' => 'fas fa-book-open',
                                            default => 'far fa-newspaper',
                                        } ?> mr-2"></i>
                                        <?= $host_name ?>
                                        <div class="d-flex align-items-center justify-content-end w-100">
                                            <div class="badge badge-pill badge-secondary small mr-2" style="opacity:.8">
                                                <?= strtoupper($url_titular['lang']) ?>
                                            </div>
                                            <i class="fas fa-external-link-square-alt text-secondary"></i>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>

</body>

</html>
