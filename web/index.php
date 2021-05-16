<?php

use RCDE\Controller\NoticiaController;
use RCDE\Model\EmailAddress;
use RCDE\Model\ImatgeGaleria;
use RCDE\Model\Location;
use RCDE\Model\PictureGallery;
use RCDE\Model\TimetableDay;
use RCDE\Translation\Home;
use RCDE\Translation\Main;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var Main $m
     * @var Structure $s
     * @var string $pathname
     */

    $h = new Home();
    ?>
    <meta name="description" property="og:description" content="<?= $m->t('description') ?>" />

    <script type="application/ld+json">
        [
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "url": "https://rcdeescolasantcugat.com",
                "logo": "https://rcdeescolasantcugat.com/assets/img/icons/icon-512.webp"
            },
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "url": "https://rcdeescolasantcugat.com/"
            }
        ]
    </script>

    <script defer src="/assets/js/defer-magnific-popup-css.js"></script>
    <script defer src="/assets/js/magnific-popup.js"></script>
    <script defer src="/assets/js/make-navbar-translucent.js"></script>
    <script defer src="/assets/js/nav-headers.js"></script>
    <script defer src="/assets/js/zem-tooltip.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="mt-0">
    <h1 class="visuallyhidden">RCDE Escola Sant Cugat</h1>
    <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $noticies = NoticiaController::llistaNoticies();
            foreach ($noticies as $key => $noticia): ?>
                <li data-target="#carouselCaptions"
                    data-slide-to="<?= $key ?>" <?= ($key === 0) ? 'class="active"' : '' ?>></li>
            <?php endforeach ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($noticies as $key => $noticia): ?>
                <div class="carousel-item carousel<?= ($key === 0) ? ' active' : '' ?>">
                    <?php
                    $is_video = false;

                    if (!empty($noticia->nom_imatge)):
                        $path_img = "/assets/img/noticies/$noticia->nom_imatge.webp";

                        if (!file_exists(ROOT . $path_img)) $path_img = '/assets/img/placeholder.webp' ?>
                        <img src="<?= $path_img ?>" class="img-fit transform-center"
                             width="<?= $noticia->img_width ?? 500 ?>"
                             height="<?= $noticia->img_height ?? 500 ?>"
                             loading="lazy" alt="<?= $noticia->titol_noticia ?>">
                    <?php elseif (!empty($noticia->href)):
                        $matches = [];
                        if (preg_match('/(?<=https:\/\/www\.youtube\.com\/watch\?v=).+/', $noticia->href, $matches)):
                            $is_video = true;
                            ?>
                            <iframe data-src="https://www.youtube-nocookie.com/embed/<?= $matches[0] ?>?controls=0&hl=<?= $_SESSION['LOCALE'] ?>"
                                    frameborder="0" title="Reproductor YouTube"
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="w-100 h-100 lazyload" loading="lazy"></iframe>
                        <?php endif ?>
                    <?php endif ?>
                    <?php if (!$is_video):
                        $is_hash = false;
                        $is_inner_link = false;
                        $is_ext_link = false;
                        if (!empty($noticia->href)) {
                            $is_hash = ($noticia->href[0] === '#');
                            $is_inner_link = ($noticia->href[0] === '/');
                            $is_ext_link = !$is_hash && !$is_inner_link;
                        } ?>
                        <a class="carousel-caption js-scroll-trigger"
                           href="<?= $is_hash ? '#' . $h->t(substr($noticia->href, 1))
                               : ($is_inner_link ? $s->resolvedUrl(substr($noticia->href, 1))['url']
                                   : ($noticia->href ?? '#')) ?>"
                            <?= $is_ext_link ? 'rel="external noopener" target="_blank"' : '' ?>
                        >
                            <div class="d-flex align-items-center justify-content-center">
                                <h2><?= $noticia->titol_noticia ?></h2>
                                <?php if ($is_ext_link): ?>
                                    <i class="fas fa-2x fa-external-link-square-alt ml-3"></i>
                                <?php endif ?>
                            </div>
                            <?php if (!empty($noticia->subtitol_noticia)): ?>
                                <p class="subtitle"><?= $noticia->subtitol_noticia ?></p>
                            <?php endif ?>
                        </a>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><?= $h->t('previous') ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><?= $h->t('next') ?></span>
        </a>
    </div>

    <section class="page-section bg-primary" id="<?= $h->t('about-us-id') ?>" data-heading="<?= $h->t('about-us') ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <?php include ROOT . $s->resolvedUrl(
                            pathname: $pathname,
                            filename: '__about-us.php',
                            explicit_locale: true,
                            include_filename: true,
                        )['url'] ?>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="<?= $h->t('how-we-are-id') ?>" data-heading="<?= $h->t('how-we-are') ?>">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $pathname,
                    filename: '__how-we-are.php',
                    explicit_locale: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>

    <section id="<?= $h->t('gallery-id') ?>" data-heading="<?= $h->t('gallery') ?>">
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <?php
                    $picture_gallery = new PictureGallery(
                        src_dir: '/assets/img/galeria/fullsize',
                        thumbnail_src_dir: '/assets/img/galeria/thumbnails',
                        title: 'RCDE',
                        subtitle: 'Escola',
                        width: 650, height: 434,
                        picture_names: [
                            'DSC_0092',
                            'DSC_0125',
                            'DSC_0113',
                            'P1260706',
                            'P1260713',
                            'P1260908',
                        ]
                    );
                    include ROOT . '/../src/View/images-gallery.php' ?>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="<?= $h->t('find-us-id') ?>" data-heading="<?= $h->t('find-us') ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h2 class="mt-0">RCDE Escola Sant Cugat</h2>
                        <hr class="divider my-4">

                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <p class="text-muted mb-3">
                                    <?= preg_replace(
                                        '/(ZEM)/',
                                        '<abbr id="zem-tooltip" data-toggle="tooltip" title="Zona Esportiva Municipal">${1}</abbr>',
                                        $h->t('traning-sessions-matches')
                                    ) ?>
                                </p>

                                <h3 class="h5 mt-4 text-muted"><?= $h->t('contact-hours') ?></h3>
                                <table class="table table-sm table-hover table-rounded table-borderless text-left m-auto w-fit-content">
                                    <tbody>
                                    <?php
                                    $timetable = [
                                        new TimetableDay(0, '18:00', '19:30'),
                                        new TimetableDay(2, '18:00', '19:30'),
                                    ];
                                    foreach ($timetable as $day): ?>
                                        <tr>
                                            <td>
                                                <b class="text-muted"><?= $day->getTextualWeekday() ?></b>
                                            </td>
                                            <td><?= $day->getTimeRange() ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <?php $address = new EmailAddress(user: 'administracio');
                        include ROOT . '/../src/View/email-address.php' ?>
                        <?php $address = new EmailAddress(user: 'direcciotecnica');
                        include ROOT . '/../src/View/email-address.php' ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                    $location = new Location(
                        address: 'Avinguda de la Guinardera',
                        zip: '08174',
                        city: 'Sant Cugat del Vallès',
                        province: 'Barcelona',
                        url: 'https://goo.gl/maps/pJQAbmjXpnCA5FCJ9',
                        gmaps: 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5977.797475239936!2d2.059193!3d41.484795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2696dc691250f0e!2sZEM%20La%20Guinardera!5e0!3m2!1sca!2ses!4v1582883697066!5m2!1sca!2ses',
                    );
                    include ROOT . '/../src/View/location-card.php' ?>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h2 class="mt-0">Penya Pericos de Sant Cugat</h2>
                        <hr class="divider my-4">
                    </div>

                    <div class="text-center mt-4">
                        <?php $address = new EmailAddress(user: 'penyapericos');
                        include ROOT . '/../src/View/email-address.php' ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                    $location = new Location(
                        address: 'Carrer de Sant Domènec',
                        zip: '08172',
                        city: 'Sant Cugat del Vallès',
                        province: 'Barcelona',
                        url: 'https://goo.gl/maps/LFTwyNjQUMwb6ENY9',
                        gmaps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2989.4110262637205!2d2.0778853152734262!3d41.47368797925629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a496c4bf966d91%3A0x2da9607bcad9d9da!2sCarrer%20de%20Sant%20Dom%C3%A8nec%2C%2034%2C%2008172%20Sant%20Cugat%20del%20Vall%C3%A8s%2C%20Barcelona!5e0!3m2!1sca!2ses!4v1582883468656!5m2!1sca!2ses',
                        number: '34, baixos dreta',
                    );
                    include ROOT . '/../src/View/location-card.php' ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
