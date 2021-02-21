<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <?php $link_pagina = '__index__' ?>
    <?php include ROOT . '/../src/View/incs-top.php' ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/">
    <script type="application/ld+json">
        [
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "url": "https://www.rcdeescolasantcugat.com",
                "logo": "https://www.rcdeescolasantcugat.com/assets/img/icons/icon-512.webp"
            },
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "url": "https://www.rcdeescolasantcugat.com/"
            }
        ]
    </script>

    <script defer src="/assets/js/home.js"></script>
    <script defer src="/assets/js/make-navbar-translucent.js"></script>

    <?php require_once ROOT . '/../src/Controller/NavegacioController.php' ?>
    <?php require_once ROOT . '/../src/Controller/NoticiaController.php' ?>
    <?php require_once ROOT . '/../src/Controller/ImatgeGaleriaController.php' ?>
    <?php require_once ROOT . '/../src/Model/Slogan.php' ?>
    <?php require_once ROOT . '/../src/Model/Location.php' ?>
    <?php require_once ROOT . '/../src/Model/EmailAddress.php' ?>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="mt-0">
    <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php if ($noticies = RCDE\NoticiaController::llistaNoticies()):
                foreach ($noticies as $key => $noticia): ?>
                    <li data-target="#carouselCaptions"
                        data-slide-to="<?= $key ?>" <?= ($key === 0) ? 'class="active"' : '' ?>></li>
                <?php endforeach;
            endif ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($noticies as $key => $noticia): ?>
                <div class="carousel-item carousel<?= ($key === 0) ? ' active' : '' ?>">
                    <?php
                    $is_video = false;

                    if (isset($noticia->nom_imatge)):
                        $path_img = "/assets/img/noticies/$noticia->nom_imatge.webp";

                        if (!file_exists(ROOT . $path_img)) $path_img = '/assets/img/placeholder.webp' ?>
                        <img src="<?= $path_img ?>" class="img-fit transform-center"
                             width="<?= $noticia->img_width ?? 500 ?>"
                             height="<?= $noticia->img_height ?? 500 ?>"
                             loading="lazy" alt="<?= $noticia->titol_noticia ?>">
                    <?php elseif (isset($noticia->href)):
                        $matches = [];
                        if (preg_match('/(?<=https:\/\/www\.youtube.com\/watch\?v=).*/', $noticia->href, $matches)):
                            $is_video = true;
                            ?>
                            <iframe data-src="https://www.youtube-nocookie.com/embed/<?= $matches[0] ?>?controls=0"
                                    frameborder="0" title="Reproductor YouTube"
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="lazyload" loading="lazy"
                                    style="width:100%; height:100%"></iframe>
                        <?php endif ?>
                    <?php endif ?>
                    <?php if (!$is_video):
                        $href = $noticia->href ?? '';
                        $is_hash = !empty($href) && ($href[0] !== '#') ?>
                        <a class="carousel-caption js-scroll-trigger"
                           href="<?= $href ?? '#' ?>"
                            <?= $is_hash ? 'rel="external noopener nofollow noreferrer" target="_blank"' : '' ?>
                        >
                            <div class="d-flex align-items-center justify-content-center">
                                <h2><?= $noticia->titol_noticia ?></h2>
                                <?php if ($is_hash): ?>
                                    <i class="fas fa-2x fa-external-link-square-alt ml-3"></i>
                                <?php endif ?>
                            </div>
                            <?php if (isset($noticia->subtitol_noticia)): ?>
                                <p class="subtitle"><?= $noticia->subtitol_noticia ?></p>
                            <?php endif ?>
                        </a>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Següent</span>
        </a>
    </div>

    <!-- About Section -->
    <section class="page-section bg-primary" id="sobre-nosaltres">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">El millor complement per a <br /> la formació dels teus fills</h2>
                    <hr class="divider light my-4">
                    <p class="text-white-75 mb-4">Vols fer una prova?</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#com-som">Coneix-nos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="com-som">
        <div class="container">
            <h2 class="text-center mt-0">Compta amb nosaltres</h2>
            <hr class="divider my-4">
            <div class="row">
                <?php
                $slogans = [
                    new RCDE\Slogan(
                        title: 'Personalització i experiència',
                        description: 'Deu anys de bona feina a Sant Cugat',
                        fa_icon: 'fa-gem',
                    ),
                    new RCDE\Slogan(
                        title: 'Ambient familiar',
                        description: 'El context ideal per als infants',
                        fa_icon: 'fa-heart',
                    ),
                    new RCDE\Slogan(
                        title: 'ADN Perico',
                        description: 'Esperit de lluita i orgull blanc-i-blau',
                        icon_filename: ROOT . '/assets/img/logo/perico-rcde.svg',
                    ),
                    new RCDE\Slogan(
                        title: 'Connexió RCDE',
                        description: 'Jornades i trobades amb les RCDE Academy i RCDE escoles',
                        fa_icon: 'fa-globe-europe',
                    )
                ];

                foreach ($slogans as $slogan): ?>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <?php if (isset($slogan->fa_icon)): ?>
                                <i class="fas fa-4x <?= $slogan->fa_icon ?> text-primary mb-4"></i>
                            <?php elseif (isset($slogan->icon_filename)):
                                echo file_get_contents($slogan->icon_filename);
                            endif ?>
                            <h3 class="h4 mb-2"><?= $slogan->title ?></h3>
                            <p class="text-muted mb-0"><?= $slogan->description ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <?php
                $imatges = RCDE\ImatgeGaleriaController::llistaImatgesVisibles();
                foreach ($imatges as $imatge): ?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box"
                           href="assets/img/galeria/fullsize/<?= $imatge->nom_imatge ?>.webp">
                            <img class="img-fluid"
                                 src="assets/img/galeria/thumbnails/<?= $imatge->nom_imatge ?>.webp"
                                 width="650" height="434"
                                 loading="lazy" alt="<?= $imatge->titol_imatge ?>">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?= $imatge->subtitol_imatge ?></div>
                                <div class="project-name"><?= $imatge->titol_imatge ?></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="on-som">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <h2 class="mt-0">RCDE Escola Sant Cugat</h2>
                        <hr class="divider my-4">
                        <p class="text-muted mb-3">
                            Els entrenaments i els partits com a locals<br>
                            es juguen a la <abbr id="zem-tooltip" data-toggle="tooltip"
                                                 title="Zona Esportiva Municipal">ZEM</abbr> La Guinardera.
                        </p>
                        <p class="text-muted mb-3">
                            El nostre horari d’atenció presencial és<br>
                            dilluns i dimecres de 18:00 a 19:30&nbsp;h.
                        </p>
                    </div>
                    <?php
                    $location = new RCDE\Location(
                        address: 'Avinguda de la Guinardera',
                        zip: '08174',
                        city: 'Sant Cugat del Vallès',
                        province: 'Barcelona',
                        url: 'https://goo.gl/maps/pJQAbmjXpnCA5FCJ9',
                        gmaps: '<iframe data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5977.797475239936!2d2.059193!3d41.484795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2696dc691250f0e!2sZEM%20La%20Guinardera!5e0!3m2!1sca!2ses!4v1582883697066!5m2!1sca!2ses" width="100%" height="300" frameborder="0" class="lazyload" loading="lazy" style="border:0;"></iframe>',
                    );
                    include ROOT . '/../src/View/location-card.php' ?>
                    <div class="text-center mt-4">
                        <?php $address = new RCDE\EmailAddress(user: 'administracio');
                        include ROOT . '/../src/View/email-address.php' ?>
                        <?php $address = new RCDE\EmailAddress(user: 'direcciotecnica');
                        include ROOT . '/../src/View/email-address.php' ?>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-5">
                    <div class="text-center">
                        <h2 class="mt-0">Penya Pericos de Sant Cugat</h2>
                        <hr class="divider my-4">
                    </div>
                    <?php
                    $location = new RCDE\Location(
                        address: 'Carrer de Sant Domènec',
                        zip: '08172',
                        city: 'Sant Cugat del Vallès',
                        province: 'Barcelona',
                        url: 'https://goo.gl/maps/LFTwyNjQUMwb6ENY9',
                        gmaps: '<iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2989.4110262637205!2d2.0778853152734262!3d41.47368797925629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a496c4bf966d91%3A0x2da9607bcad9d9da!2sCarrer%20de%20Sant%20Dom%C3%A8nec%2C%2034%2C%2008172%20Sant%20Cugat%20del%20Vall%C3%A8s%2C%20Barcelona!5e0!3m2!1sca!2ses!4v1582883468656!5m2!1sca!2ses" width="100%" height="300" frameborder="0" class="lazyload" loading="lazy" style="border:0;"></iframe>',
                        number: '34, baixos dreta',
                    );
                    include ROOT . '/../src/View/location-card.php' ?>
                    <div class="text-center mt-4">
                        <?php $address = new RCDE\EmailAddress(user: 'penyapericos');
                        include ROOT . '/../src/View/email-address.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
