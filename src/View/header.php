<?php

use RCDE\Model\Pagina;
use RCDE\Translation\Main;
use RCDE\Translation\Structure;

/**
 * @var Main $m
 * @var Structure $s
 * @var string $pathname
 * @var Pagina[] $pagines
 */

$link_pagina ??= '';
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light main-nav fixed-top py-3"
         id="mainNav">
        <div class="container" style="min-height:4rem">
            <?php
            $index_url = '';
            $resolved_index_url = null;

            if ($link_pagina === '/') {
                $index_url = '#page-top';
            } else {
                $resolved_index_url = $s->resolvedUrl('/');
                $index_url = $resolved_index_url['url'];
            }
            ?>
            <a class="navbar-brand js-scroll-trigger py-0"
               href="<?= $index_url ?>"
                <?= empty($resolved_index_url) ? '' : "hreflang=\"{$resolved_index_url['locale']}\"" ?>
               style="width: 147px; height: 60px;">
                <div id="navbar-logo"
                     class="translucent position-relative blanc">
                    <img src="/assets/img/logo/Escoles_sant_cugat_rectangular_blanc.webp"
                         id="navbar-logo-color" width="500" height="245"
                         alt="RCDE Escola Sant Cugat">
                    <img src="/assets/img/logo/Escoles_sant_cugat_blanc.webp"
                         id="navbar-logo-blanc" width="500" height="245"
                         alt="RCDE Escola Sant Cugat">
                </div>
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <?php
                    $current_has_subnav = true;
                    foreach ($pagines as $pagina):
                        $is_current = $pagina->link_pagina === $link_pagina;
                        $pagina_url = '';
                        $resolved_pagina_url = null;

                        if ($is_current) {
                            $current_has_subnav = $pagina->has_subnav;
                            $pagina_url = '#page-top';
                            $titol_pagina = $m->t($pagina->titol_pagina);
                        } else {
                            $resolved_pagina_url = $s->resolvedUrl($pagina->link_pagina);
                            $pagina_url = $resolved_pagina_url['url'];
                        } ?>
                        <li class="nav-item d-flex align-items-center" data-target="#page-top">
                            <a class="nav-link js-scroll-trigger text-center<?= $is_current ? ' active' : '' ?>"
                               href="<?= $pagina_url ?>"
                                <?= empty($resolved_pagina_url) ? '' : "hreflang=\"{$resolved_pagina_url['locale']}\"" ?>
                            >
                                <?= $m->t($pagina->titol_pagina) ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php
            $resolved_locales = array_map(
                fn($locale) => $s->resolvedUrl($pathname, locale: $locale),
                $_SESSION['LOCALES'],
            );
            $filtered_locales = array_filter(
                $resolved_locales,
                fn($resolved_locale) => $resolved_locale['exists'],
            );
            if (count($filtered_locales) > 1): ?>
                <div class="btn-group">
                    <button class="btn btn-sm text-white text-uppercase font-weight-bold dropdown-toggle" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['LOCALE'] ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" style="font-size: small">
                        <?php foreach ($filtered_locales as $resolved_locale): ?>
                            <a class="dropdown-item<?= ($resolved_locale['locale'] === $_SESSION['LOCALE']) ? ' active' : '' ?>"
                               href="<?= $resolved_locale['url'] ?>"
                               hreflang="<?= $resolved_locale['locale'] ?>"><?= match ($resolved_locale['locale']) {
                                    'ca' => 'Català',
                                    'en' => 'English',
                                    'es' => 'Español',
                                    'zh' => '中文',
                                } ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </nav>

    <?php if ($current_has_subnav): ?>
        <div class="nav-scroller position-absolute">
            <nav class="navbar navbar-expand navbar-light main-nav fixed-top py-2 scrollspy"
                 id="subNav" <?= ($link_pagina !== '/') ? '' : 'style="opacity: 1"' ?>>
                <div class="container">
                    <div class="navbar-collapse" id="subNavbarResponsive">
                        <ul class="navbar-nav ml-auto"></ul>
                    </div>
                </div>
            </nav>
        </div>
    <?php endif ?>
</header>
