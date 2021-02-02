<footer class="bg-light py-5 border-top">
    <div class="container d-flex justify-content-between flex-wrap mb-4">
        <div class="d-flex flex-wrap justify-content-center mb-4">
            <img src="/assets/img/logo/Escoles_sant_cugat_rectangular.webp" class="w-auto mr-4" alt="Logo RCDE Escola"
                 style="height:6rem" width="500" height="248">
            <img src="/assets/img/logo/Pericos_blau.webp" class="w-auto" alt="Logo Pericos de Sant Cugat"
                 style="height:6rem" width="500" height="240">
        </div>

        <ul class="list-group list-group-horizontal text-center social-media justify-content-center flex-wrap">
            <?php
            $socials = [
                [
                    "icon" => "fab fa-facebook",
                    "title" => "Facebook",
                    "link" => "facebook.com/RCDEscolaSTC",
                    "color" => "#3b5998"
                ],
                [
                    "icon" => "fab fa-instagram",
                    "title" => "Instagram",
                    "link" => "instagram.com/rcdescola_santcugat",
                    "color" => "#3f729b"
                ],
                [
                    "icon" => "fab fa-youtube",
                    "title" => "YouTube",
                    "link" => "youtube.com/channel/UCyBL6WE136kShyBpVldvyOg",
                    "color" => "#c4302b"
                ],
            ];

            foreach ($socials as $social): ?>
                <li class="list-group-item">
                    <a href="https://www.<?= $social["link"] ?>"
                       rel="external noopener nofollow noreferrer" target="_blank">
                        <i class="<?= $social["icon"] ?> fa-2x mb-2"
                           style="color: <?= $social["color"] ?>"></i>
                        <p class="mb-0"><?= $social["title"] ?></p>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="container">
        <div class="small text-center text-muted">&copy; RCDE Escola Sant Cugat</div>
    </div>
</footer>

<?php include ROOT . "/../src/View/incs-bottom.php" ?>
