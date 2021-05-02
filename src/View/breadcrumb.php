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
            $is_current_page = ($_SERVER['SCRIPT_URL'] === '/' . join('/', $current_paths) . '/');
            ?>
            <li class="breadcrumb-item<?= $is_file || $is_current_page ? ' text-secondary' : '' ?>" aria-current="page"
                <?= $is_current_page ? 'style="text-transform: uppercase; letter-spacing: 0.4px"' : '' ?>>
                <?php
                if ($is_file):
                    echo $path;
                else:
                    $resolved_url = $s->resolvedUrl(join('/', $current_paths));
                    $structure_key = $s->findKeyOf($path);
                    $url_label = empty($structure_key)
                        ? ucfirst(preg_replace('/[-_]/', ' ', $path))
                        : $m->t($structure_key);

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

