<?php

use RCDE\Model\Slogan;

/** @var Slogan[] $slogans */

foreach ($slogans as $slogan): ?>
    <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
            <?php if (!empty($slogan->fa_icon)): ?>
                <i class="fas fa-4x <?= $slogan->fa_icon ?> text-primary mb-4"></i>
            <?php elseif (!empty($slogan->icon_filename)): ?>
                <div class="svg-icon-container small blue">
                    <?= file_get_contents($slogan->icon_filename) ?>
                </div>
            <?php endif ?>
            <h3 class="h4 mb-2"><?= $slogan->title ?></h3>
            <p class="text-muted mb-0"><?= $slogan->description ?></p>
        </div>
    </div>
<?php endforeach ?>
