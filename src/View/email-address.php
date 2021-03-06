<?php

use RCDE\Model\EmailAddress;

/** @var EmailAddress $address */
?>

<div>
    <a class="btn btn-light btn-xl d-flex m-auto w-min-content"
       href="mailto:<?= $address->getAddress() ?>">
        <i class="fas fa-envelope fa-3x mr-3 text-muted"></i>
        <div class="text-left">
            <div><?= $address->user ?></div>
            <div class="text-secondary text-lowercase font-weight-normal">@<?= $address->domain ?></div>
        </div>
    </a>
</div>
