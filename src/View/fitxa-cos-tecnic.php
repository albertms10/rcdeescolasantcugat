<?php

use RCDE\Model\CosTecnic;
use RCDE\Translation\Escola;

require_once ROOT . '/../src/Utils/ordinal.php';

/**
 * @var CosTecnic $entrenador
 * @var Escola $e
 */
?>

<div class="col-lg-3 col-md-4 p-3 text-center user-card">
    <div class="transform-center p-3 avatar-cos-tecnic">
        <?php
        $nom_entrenador = str_replace(' ', '-', mb_strtolower($entrenador->nom_complet));
        if (file_exists(ROOT . "/assets/img/entrenadors/$nom_entrenador.webp")): ?>
            <img src="/assets/img/entrenadors/<?= $nom_entrenador ?>.webp"
                 class="img-fit transform-center rounded-circle"
                 width="96" height="96" alt="<?= $entrenador->nom_complet ?>">
        <?php else: ?>
            <i class="fas fa-5x fa-user-circle mb-3 mt-2 op-50"></i>
        <?php endif ?>
    </div>
    <h5><?= $entrenador->nom_complet ?></h5>
    <h6 class="badge badge-pill badge-<?= match ($entrenador->id_rol_costecnic) {
        1 => 'warning',
        2 => 'primary',
        3 => 'success',
    } ?>"><?= $e->t($entrenador->rol_costecnic) ?></h6>
    <p class="text-translucent">
        <?= $e->t('season', null, ordinal($entrenador->count_temporades, locale: $_SESSION['LOCALE'])) ?>
    </p>
</div>
