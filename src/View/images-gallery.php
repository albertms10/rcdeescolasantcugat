<?php
/** @var array $imatges */
foreach ($imatges as $imatge): ?>
    <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box"
           href="/assets/img/galeria/fullsize/<?= $imatge->nom_imatge ?>.webp">
            <img class="img-fluid"
                 src="/assets/img/galeria/thumbnails/<?= $imatge->nom_imatge ?>.webp"
                 width="650" height="434"
                 loading="lazy" alt="<?= $imatge->titol_imatge ?>">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50"><?= $imatge->subtitol_imatge ?></div>
                <div class="project-name"><?= $imatge->titol_imatge ?></div>
            </div>
        </a>
    </div>
<?php endforeach ?>
