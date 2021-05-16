<?php

use RCDE\Model\TitularPremsa;
use RCDE\Translation\Escola;

/**
 * @var TitularPremsa $titular_premsa
 * @var Escola $e
 */
?>

<div class="col-lg-6">
    <div class="card mb-4">
        <div class="card-body">
            <h4><?= $titular_premsa->text_titular ?></h4>
            <?php if (!empty($titular_premsa->data_titular)): ?>
                <time datetime="<?= $titular_premsa->data_titular ?>">
                    <?= utf8_encode(strftime('%-e %B %Y', strtotime($titular_premsa->data_titular))) ?>
                </time>
            <?php endif ?>
        </div>
        <ul class="list-group list-group-flush">
            <?php foreach ($titular_premsa->getUrls() as $url_titular) {
                require ROOT . '/../src/View/referencia-retall-premsa.php';
            } ?>
        </ul>
    </div>
</div>
