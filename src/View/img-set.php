<?php

use RCDE\Model\Picture;

/** @var Picture $picture */
?>

<picture>
    <source srcset="<?= $picture->src ?>.webp" type="image/webp">
    <source srcset="<?= $picture->src ?>.jpg" type="image/jpeg">
    <img src="<?= $picture->src ?>.jpg" alt="<?= $picture->alt ?>"
         width="<?= $picture->width ?>" height="<?= $picture->height ?>"
         class="rounded <?= $picture->classlist ?>" loading="lazy" style="width:100%">
</picture>
