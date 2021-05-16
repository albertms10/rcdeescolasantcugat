<?php

use RCDE\Translation\Escola;

/**
 * @var string[] $url_titular
 * @var Escola $e
 */
?>

<?php
$host_name = str_replace('www.', '', parse_url($url_titular['url'], PHP_URL_HOST))
?>

<a href="<?= $url_titular['url'] ?>"
   class="list-group-item list-group-item-action d-flex align-items-center"
   title="<?= $e->t('visit-new-window-or-tab', null, $host_name) ?>"
   rel="external noopener"
   target="_blank">
    <i class="<?= match ($host_name) {
        'youtube.com' => 'fab fa-youtube',
        'issuu.com' => 'fas fa-book-open',
        default => 'far fa-newspaper',
    } ?> mr-2"></i>
    <?= $host_name ?>
    <div class="d-flex align-items-center justify-content-end w-100">
        <div class="badge badge-pill badge-secondary small mr-2 op-80">
            <?= strtoupper($url_titular['lang']) ?>
        </div>
        <i class="fas fa-external-link-square-alt text-secondary"></i>
    </div>
</a>
