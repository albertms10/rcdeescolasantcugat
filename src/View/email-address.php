<?php if (isset($address)): ?>
    <div>
        <a class="btn btn-light btn-xl"
           href="mailto:<?= $address->getAddress() ?>">
            <div><?= $address->user ?></div>
            <div class="text-secondary">@<?= $address->domain ?></div>
        </a>
    </div>
<?php endif ?>
