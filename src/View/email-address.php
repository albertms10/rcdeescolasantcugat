<?php if (isset($address)): ?>
    <a class="email-address d-block" href="mailto:<?= $address->getAddress() ?>">
        <?= $address->user ?><span class="domain text-black-50">@<?= $address->domain ?></span>
    </a>
<?php endif ?>
