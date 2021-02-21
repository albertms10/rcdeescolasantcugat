<?php $link_pagina ??= '' ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light main-nav fixed-top py-3"
         id="mainNav">
        <div class="container" style="min-height:4rem">
            <a class="navbar-brand js-scroll-trigger py-0"
               href="<?= ($link_pagina === '__index__') ? '#page-top' : '/' ?>"
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
                    if (!empty($pagines)):
                        foreach ($pagines as $pagina):
                            $is_current = $pagina->link_pagina === $link_pagina;
                            if ($is_current)
                                $titol_pagina = $pagina->titol_pagina ?>
                            <li class="nav-item d-flex align-items-center" data-target="#page-top">
                                <a class="nav-link js-scroll-trigger text-center<?= $is_current ? ' active' : '' ?>"
                                   href="<?= $is_current ? '#page-top' : ('/' . $pagina->link_pagina . '/') ?>">
                                    <?= $pagina->titol_pagina ?>
                                </a>
                            </li>
                        <?php endforeach;
                    endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    $pagines_seccions = RCDE\NavegacioController::llistaPaginesSeccions($link_pagina);

    if (count($pagines_seccions) > 0): ?>
        <div class="nav-scroller position-absolute">
            <nav class="navbar navbar-expand navbar-light main-nav fixed-top py-2 scrollspy"
                 id="subNav" <?= ($link_pagina !== '__index__') ? '' : 'style="opacity: 1"' ?>>
                <div class="container">
                    <div class="navbar-collapse" id="subNavbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <?php foreach ($pagines_seccions as $pagina_seccio) : ?>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger py-1 px-3"
                                       href="#<?= $pagina_seccio->link_pagina_seccio ?>"><?= $pagina_seccio->titol_pagina_seccio ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <?php endif ?>
</header>
