<?php

use RCDE\Translation\Pericos;
use RCDE\Translation\Structure;

defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/../vendor/autoload.php';
include ROOT . '/../src/Utils/lang-init.php';
require_once ROOT . '/../src/Utils/minify.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['LOCALE'] ?>" prefix="og: https://ogp.me/ns#">

<head>
    <?php
    include ROOT . '/../src/View/incs-top.php';
    /**
     * @var Structure $s
     * @var string $pathname
     */

    $p = new Pericos();
    ?>
    <meta name="description" property="og:description" content="<?= $p->t('description') ?>" />

    <script defer src="/assets/js/nav-headers.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="text-content">
    <?php include ROOT . '/../src/View/jumbotron.php' ?>
    <section class="page-section bg-light">
        <div class="container">
            <?php include ROOT . $s->resolvedUrl(
                    pathname: $pathname,
                    filename: '__history.php',
                    explicit_locale: true,
                    include_filename: true,
                )['url'] ?>
        </div>
    </section>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
