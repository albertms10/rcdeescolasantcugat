<?php if (isset($location)): ?>
    <div class="rounded bg-white shadow-sm text-center text-body d-block pt-3 px-2 pb-1 my-3 mx-lg-5">
        <i class="fas fa-map-marker-alt fa-3x mb-3 text-muted"></i>
        <address>
            <p class="lead mb-0"><?= $location->address ?></p>
            <?php if (isset($location->number)): ?>
                <p class="mb-2"><?= $location->number ?></p>
            <?php endif ?>
            <p class="text-muted"><?= $location->getFullAddress() ?></p>
        </address>
        <div class="rounded overflow-hidden">
            <?= $location->gmaps ?>
        </div>
    </div>
<?php endif ?>
