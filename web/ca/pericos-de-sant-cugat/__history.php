<?php use RCDE\Model\Picture; ?>

<h2 class="h1" id="historia" data-heading>Història</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="la-penya">La Penya</h3>
        <hr class="divider my-4 ml-0">

        <div class="row justify-content-center mt-1 mb-4">
            <div class="col-md-8">
                <?php
                $picture = new Picture(
                    src: '/assets/img/logo/Pericos_blau',
                    alt: 'Logo Pericos de Sant Cugat',
                    width: 500, height: 240,
                );
                include ROOT . '/../src/View/img-set.php' ?>
            </div>
        </div>

        <p>El dia
            <time datetime="2004-10-19">19 d’octubre de 2004</time>
           un grup d’uns quaranta socis i simpatitzants del <em>Real Club Deportivo Espanyol</em> de
           Barcelona ens vàrem reunir al bar ‘Els Italians’ de la nostra ciutat amb la intenció de crear
           una penya blanc i blava.
        </p>

        <div class="mb-4">
            <?php
            $picture = new Picture(
                src: '/assets/img/fotos/pericos-1',
                alt: 'Penya Pericos',
            );
            include ROOT . '/../src/View/img-set.php' ?>
        </div>

        <p>En aquella primera reunió es va decidir:</p>
        <ol>
            <li>El nom oficial de la penya serà el de <em>Pericos de Sant Cugat</em> segons la votació feta
                a mà alçada.
            </li>
            <li>Aprovar els Estatuts de penya <em>Pericos de Sant Cugat</em>, que són reproducció íntegra
                dels Estatuts de l’Associació facilitats per la Federació Catalana de Penyes del RCDE, amb
                les especificacions corresponents a la nostra penya.
            </li>
            <li>Aprovació de les quotes anuals.</li>
            <li>Designació dels membres de la primera Junta Directiva de la penya i delegació de les
                funcions de gestió i representació, tal i com estableix l’article 15è dels Estatuts.
            </li>
            <li>Convocar un concurs per tal de confeccionar el logotip de Pericos de Sant Cugat. El logo
                haurà de combinar trets característics del RCDE —escut, periquito, etc.— i del municipi de
                Sant Cugat —Monestir, Pi d’en Xandri, etc.
            </li>
        </ol>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/pericos-2',
            alt: 'Penya Pericos',
        );
        include ROOT . '/../src/View/img-set.php' ?>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <div data-nav-items="historia"></div>
    </div>
</div>
