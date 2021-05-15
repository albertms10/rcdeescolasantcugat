<?php

use RCDE\Model\Location;

/** @var Location $location */
?>

<div class="rounded bg-white shadow-sm text-center text-body d-block pt-3 px-2 pb-1 my-3 mx-lg-5">
    <i class="fas fa-map-marker-alt fa-3x mb-3 text-muted"></i>
    <address>
        <p class="lead mb-0"><?= $location->address ?></p>
        <?php if (!empty($location->number)): ?>
            <p class="mb-2"><?= $location->number ?></p>
        <?php endif ?>
        <p class="text-muted"><?= $location->getFullAddress() ?></p>
    </address>
    <div class="rounded overflow-hidden">
        <iframe data-src="<?= $location->gmaps ?>&language=<?= $_SESSION['LOCALE'] ?>"
                width="100%" height="300" frameborder="0" class="lazyload border-0" loading="lazy"
                title="Google Maps"></iframe>
    </div>
</div>
