<?php

use RCDE\Translation\Main;
use RCDE\Translation\Structure;

/**
 * @var string[] $paths
 * @var Main $m
 * @var Structure $s
 */

$centered_breadcrumb ??= false;
?>

<nav class="m-auto"
     aria-label="breadcrumb"<?= $centered_breadcrumb ? ' style="width: fit-content"' : '' ?>>
    <ol class="breadcrumb<?= $centered_breadcrumb ? ' align-items-center' : '' ?>">
        <?php foreach ($paths as $key => $path):
            $current_paths = array_slice($paths, 0, $key + 1);
            $is_file = str_contains($path, '.');
            $is_current_page = ($paths === $current_paths);
            ?>
            <li class="breadcrumb-item<?= $is_file || $is_current_page ? ' text-secondary' : '' ?>" aria-current="page">
                <?php
                if ($is_file):
                    echo $path;
                else:
                    $resolved_url = $s->resolvedUrl(join('/', $current_paths));
                    $structure_key = $s->findKeyOf($path) ?? $path;
                    $url_label = $m->keyExists($structure_key)
                        ? $m->t($structure_key)
                        : ucfirst(preg_replace('/[-_]/', ' ', $path));

                    if ($resolved_url['exists'] && !$is_current_page): ?>
                        <a href="<?= $resolved_url['url'] ?>"><?= $url_label ?></a>
                    <?php else:
                        echo $url_label;
                    endif;
                endif ?>
            </li>
        <?php endforeach ?>
    </ol>
</nav>

