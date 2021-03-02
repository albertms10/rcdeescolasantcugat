<?php if (isset($picture)): ?>
    <picture>
        <source srcset="<?= $picture->src ?>.webp" type="image/webp">
        <source srcset="<?= $picture->src ?>.jpg" type="image/jpeg">
        <img src="<?= $picture->src ?>.jpg" alt="<?= $picture->alt ?>"
             width="<?= $picture->width ?>" height="<?= $picture->height ?>"
             class="rounded" loading="lazy" style="width:100%">
    </picture>
<?php endif ?>
