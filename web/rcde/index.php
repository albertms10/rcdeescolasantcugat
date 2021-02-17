<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/../src/Utils/lang-init.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <?php $link_pagina = 'rcde' ?>
    <?php include ROOT . '/../src/View/incs-top.php' ?>
    <meta name="description" content="RCDE Escola Sant Cugat">
    <link rel="canonical" href="https://www.rcdeescolasantcugat.com/rcde/">

    <script defer src="/assets/js/nav-headers-list.js"></script>
</head>

<body id="page-top" data-spy="scroll">
<?php include ROOT . '/../src/View/header.php' ?>

<main class="text-content">
    <?php include ROOT . '/../src/View/jumbotron.php' ?>
    <section id="historia" class="page-section bg-light">
        <div class="container">
            <h2 class="h1">Història</h2>
            <div class="row mt-lg-5">
                <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
                    <h3 id="fundat-per-universitaris-catalans">Fundat per universitaris catalans</h3>
                    <hr class="divider my-4 ml-0">
                    <p>El Reial Club Deportiu Espanyol de Barcelona és un dels clubs de futbol més antics de la
                       Lliga Espanyola. El
                        <time datetime="1900-10-28">28 d’octubre de 1900</time>
                       a les aules de la Universitat de Barcelona, naixia la Societat Espanyola de Futbol, nom que li
                       va
                       donar al Club el seu fundador i primer president, Ángel Rodríguez. Les principals senyes
                       d’identitat, i el que va determinar el nom original d’aquest nou Club esportiu, va ser que tots
                       els seus components eren catalans o nascuts a la resta d’Espanya, en contraposició als altres
                       equips, formats majoritàriament per anglesos i altres nacionalitats.
                    </p>

                    <img src="/assets/img/fotos/rcde-historia-1.webp" class="rounded" loading="lazy" alt="Història RCDE"
                         width="960" height="275" style="width:100%">

                    <h3 id="el-groc-color-original-del-club" class="mt-5">El groc, color original del club</h3>
                    <hr class="divider my-4 ml-0">
                    <p>Encara que el RCD Espanyol de Barcelona vesteix avui de blanc-i-blau, el groc va ser el color
                       original del Club, per la senzilla raó que era el color de la peça de roba que un dels
                       seus primers socis va regalar a l’entitat perquè confeccionés els seus uniformes. Més endavant
                       va
                       vestir samarreta blanca i pantalons blaus i, el 1909, vestia ja amb els actuals colors blanc i
                       blaus, aquells que lluïa en el seu blasó l’almirall Roger de Llúria.</p>

                    <h3 id="jugadors-de-renom" class="mt-5">Jugadors de renom</h3>
                    <hr class="divider my-4 ml-0">
                    <p>Durant la seva trajectòria, l’Espanyol ha comptat amb jugadors mundialment famosos i ha
                       nodrit amb molts d’ells a la Selecció Espanyola. El primer gran ídol blanc-i-blau va ser el
                       mític porter Ricardo Zamora. Després d’ell, altres jugadors, com Alfredo Di Stefano, Kubala o
                       N’Kono, van agafar el seu testimoni.</p>

                    <h3 id="futbol-base-de-gran-nivell" class="mt-5">Futbol base de gran nivell</h3>
                    <hr class="divider my-4 ml-0">
                    <p>El Club compta amb un equip filial, l’Espanyol B, dotze equips de futbol base, futbol
                       femení i una escola de futbol. Tots ells entrenen i juguen els seus partits com a locals a la
                       Ciutat Esportiva Dani Jarque de Sant Adrià, inaugurada el setembre de 2001.</p>

                    <h3 id="de-sarria-a-lolimpic" class="mt-5">De Sarrià a l’Olímpic</h3>
                    <hr class="divider my-4 ml-0">
                    <p>L’actual RCD Espanyol de Barcelona va començar a jugar els seus partits en una gran
                       esplanada, molt propera a la Sagrada Família de Barcelona. Des de 1923 i fins a la temporada
                       1996–97, l’estadi de Sarrià, popularment conegut com ‘Can Ràbia’ o ‘la Bombonera’, a la plaça
                       Ricardo Zamora, va ser el feu de l’equip català.</p>
                    <p>L’any 1997 el Club es va veure obligat a vendre Sarrià i es va traslladar a l’Estadi Olímpic
                       Lluís Companys de Montjuïc, on el RCD Espanyol va jugar els seus partits fins la temporada
                       2008–09, amb una mitjana de 22.500 espectadors per partit. Durant aquests 12 anys l’equip va
                       assolir grans èxits com les Copes del Rei de 2000 i 2006 o la classificació per a la Final de la
                       Copa de la UEFA de 2007, competició on no va caure derrotat en cap partit.</p>
                    <p>A Montjuïc també es van viure moments d’eufòria, com la salvació de l’equip la temporada 2003–04
                       gràcies a un gol de Tamudo contra el Múrcia, o el gol de Coro en el temps afegit contra la Real
                       Sociedad, que va permetre que l’Espanyol es mantingués en la màxima categoria l’any 2006 i
                       encarar el camí cap a la construcció de la nova casa a Cornellà&thinsp;–&thinsp;El Prat, on el
                       club es va traslladar el
                        <time datetime="2009-07-10">10 de juliol de 2009.</time>
                    </p>

                    <h3 id="quatre-titols-de-copa" class="mt-5">Quatre títols de Copa: 1929, 1940, 2000 i 2006</h3>
                    <hr class="divider my-4 ml-0">
                    <p>La primera gran conquesta en la història de l’espanyolisme va ser la Copa Macaia, la
                       temporada 1902–03. El 1912, S.&thinsp;M. el Rei Alfons XIII li concedia el títol de ‘Reial’ i
                       l’ús de la corona que avui figura en el seu escut. Quan es va inaugurar el Campionat Nacional de
                       Lliga, el 1929, l’Espanyol va figurar entre els clubs fundadors, aconseguint el primer gol
                       oficial d’aquesta Competició.</p>
                    <p>Aquell mateix any, el conjunt blanc-i-blau es va proclamar campió de la Copa de S.&thinsp;M. el
                       Rei, títol que va revalidar el 1940, el 2000, en plena celebració del Centenari de la seva
                       fundació, i el 2006. A nivell internacional, obté un reconeixement molt important el 1988, quan
                       va ser subcampió de la Copa de la UEFA a Leverkusen. Al maig del 2007 torna a aconseguir arribar
                       a la final europea, i queda subcampió davant el Sevilla F.&thinsp;C., destacant per no haver
                       perdut cap partit en tota la trajectòria.</p>

                    <h3 id="dues-vegades-finalistes-uefa" class="mt-5">Dues vegades finalistes de la Copa de la
                                                                       UEFA</h3>
                    <hr class="divider my-4 ml-0">
                    <p>El RCD Espanyol ha estat dues vegades finalista de la Copa de la UEFA. El 1988, amb Javier
                       Clemente com a entrenador, va disputar la final de la UEFA davant el Bayer Leverkusen, i el
                       2007, amb Ernesto Valverde a la banqueta, davant el Sevilla F.&thinsp;C. El conjunt blanc-i-blau
                       va arribar a aquesta última final sense perdre cap partit durant tota la competició.</p>

                    <h3 id="un-nou-estadi-marca-el-futur" class="mt-5">Un nou estadi marca el futur del club</h3>
                    <hr class="divider my-4 ml-0">
                    <p>A principis de 2002, el RCD Espanyol de Barcelona anunciava l’inici dels tràmits per a la
                       construcció d’un nou estadi de propietat en el terme municipal de Cornellà&thinsp;–&thinsp;El
                       Prat, veí de la ciutat de Barcelona. Després de llargs tràmits administratius, el 2007 es van
                       iniciar les obres de pilotatge de l’Estadi i va començar el compte enrere. El projecte del nou
                       estadi marca el començament d’una nova era per a l’espanyolisme, que ja té de nou la seva pròpia
                       casa: l’Estadi RCD Espanyol de Cornellà&thinsp;–&thinsp;El Prat, el més modern estadi de futbol
                       a
                       Espanya, amb una capacitat per a 40.000 persones i catalogat per la UEFA amb 4 estrelles.</p>

                    <em class="text-muted float-right">Font:
                        <a href="https://www.rcdespanyol.com/ca/historia/" rel="external noopener noreferrer"
                           target="_blank">
                            rcdespanyol.com<i class="fas fa-external-link-square-alt ml-2"></i>
                        </a>

                    </em>
                </div>
                <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                    <div data-nav-items="historia"></div>
                </div>
            </div>
        </div>
    </section>

    <?php if (false): ?>
        <section id="el-club" class="page-section bg-light">
            <div class="container">
                <h2 class="h1">El club</h2>
                <div class="row mt-lg-5">
                    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5"></div>
                    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                        <div data-nav-items="el-club"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>

    <?php if (false): ?>
        <section id="categories-inferiors" class="page-section bg-light">
            <div class="container">
                <h2 class="h1">Categories inferiors</h2>
                <div class="row mt-lg-5">
                    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5"></div>
                    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
                        <div data-nav-items="categories-inferiors"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
</main>

<?php include ROOT . '/../src/View/footer.php' ?>
</body>

</html>
