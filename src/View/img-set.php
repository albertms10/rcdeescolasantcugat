<?php

use RCDE\Model\Picture;

/** @var Picture $picture */
?>

<picture>
    <source srcset="<?= $picture->src ?>.webp" type="image/webp">
    <source srcset="<?= $picture->src ?>.jpg" type="image/jpeg">
    <img src="<?= $picture->src ?>.jpg" alt="<?= $picture->alt ?>"
         width="<?= $picture->width ?>" height="<?= $picture->height ?>"
         class="rounded w-100 <?= $picture->classlist ?>" loading="lazy">
</picture>
