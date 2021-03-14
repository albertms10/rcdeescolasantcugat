<?php

use RCDE\Model\Iframe;

/** @var Iframe $iframe */
?>

<div class="container-ratio ratio--16-9 rounded mt-2 mb-2 w-100 overflow-hidden">
    <iframe data-src="<?= $iframe->src ?>"
            frameborder="0" title="<?= $iframe->title ?>"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen class="lazyload" loading="lazy"></iframe>
</div>
