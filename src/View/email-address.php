<?php if (isset($address)): ?>
    <a class="email-address d-block" href="mailto:<?php echo $address["user"] ?>@<?php echo $address["domain"] ?>">
        <?php echo $address["user"] ?><span class="domain text-black-50">@<?php echo $address["domain"] ?></span>
    </a>
<?php endif ?>
