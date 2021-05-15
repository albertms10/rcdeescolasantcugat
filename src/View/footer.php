<?php

use RCDE\Model\Social;
use RCDE\Translation\Main;
use RCDE\Translation\Structure;

/**
 * @var Main $m
 * @var Structure $s
 */
?>

<footer class="bg-light py-5 border-top">
    <div class="container d-flex justify-content-between flex-wrap mb-4">
        <div class="d-flex flex-wrap justify-content-center mb-4">
            <img src="/assets/img/logo/Escoles_sant_cugat_rectangular.webp" class="w-auto mr-4 footer-logo"
                 alt="Logo RCDE Escola" width="500" height="222">
            <img src="/assets/img/logo/Pericos_blau.webp" class="w-auto footer-logo" alt="Logo Pericos de Sant Cugat"
                 width="500" height="240">
        </div>

        <ul class="list-group list-group-horizontal text-center social-media justify-content-center flex-wrap">
            <?php
            $socials = [
                new Social(
                    title: 'Facebook',
                    link: 'facebook.com/RCDEscolaSTC',
                    classname: 'fab fa-facebook social-fb-icon',
                ),
                new Social(
                    title: 'Instagram',
                    link: 'instagram.com/rcdescola_santcugat',
                    classname: 'fab fa-instagram social-ig-icon',
                ),
                new Social(
                    title: 'YouTube',
                    link: 'youtube.com/channel/UCyBL6WE136kShyBpVldvyOg',
                    classname: 'fab fa-youtube social-yt-icon',
                ),
            ];

            foreach ($socials as $social): ?>
                <li class="list-group-item">
                    <a href="https://www.<?= $social->link ?>"
                       rel="external noopener nofollow noreferrer" target="_blank">
                        <i class="<?= $social->classname ?> fa-2x mb-2"></i>
                        <p class="mb-0"><?= $social->title ?></p>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item">
                <span class="small text-center text-muted">&copy; RCDE Escola Sant Cugat</span>
            </li>
            <li class="list-inline-item">
                <a href="<?= $s->resolvedUrl('privacy-policy', locale: 'es')['url'] ?>"
                   class="small text-center text-muted">
                    <?= $m->t('privacy-policy') ?>
                </a>
            </li>
        </ul>
    </div>
</footer>

<?php include ROOT . '/../src/View/incs-bottom.php' ?>
