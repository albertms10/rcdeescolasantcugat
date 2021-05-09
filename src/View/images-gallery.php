<?php

use RCDE\Model\PictureGallery;

/** @var PictureGallery $picture_gallery */
foreach ($picture_gallery->picture_names as $picture_name): ?>
    <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box"
           href="<?= "$picture_gallery->src_dir/$picture_name.webp" ?>">
            <img class="img-fluid"
                 src="<?= "$picture_gallery->thumbnail_src_dir/$picture_name.webp" ?>"
                 width="<?= $picture_gallery->width ?>" height="<?= $picture_gallery->height ?>"
                 loading="lazy" alt="<?= $picture_gallery->title ?>">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50"><?= $picture_gallery->subtitle ?></div>
                <div class="project-name"><?= $picture_gallery->title ?></div>
            </div>
        </a>
    </div>
<?php endforeach ?>
