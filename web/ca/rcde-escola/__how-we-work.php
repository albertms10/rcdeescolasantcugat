<?php use RCDE\Model\Picture; ?>

<h2 class="h1" id="com-treballem" data-heading>Com treballem</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="objectius">Objectius</h3>
        <hr class="divider my-4 ml-0">
        <p>Sota la supervisió dels responsables del futbol base i la coordinació de la direcció tècnica de
           l’Escola, es procura que tots els alumnes que arribin, puguin gaudir de la pràctica esportiva en
           un ambient d’esforç, alegria i compromís.</p>
        <p>El nostre principal objectiu és possibilitar una contribució efectiva, mitjançant l’esport i el
           valors positius que d’aquesta activitat es poden treure, a la formació integral de tots els
           alumnes que tenim temporada rere temporada.</p>
        <p>La pràctica esportiva associada als valors del treball, la superació personal, la responsabilitat
           i l’esforç juntament amb la referència pròpia del RCD Espanyol ens defineix cada temporada la
           nostra tasca educativa.</p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola',
            alt: 'RCDE Escola',
            width: 1920, height: 1280,
        );
        include ROOT . '/../src/View/img-set.php' ?>

        <h3 id="planificacio" class="mt-5">Planificació</h3>
        <hr class="divider my-4 ml-0">
        <p>A partir de la temporada
            <time datetime="2017">2017–18,</time>
           tot el cos tècnic treballa per materialitzar una planificació
           adient a la nostra realitat a través de les tasques de cada entrenador, de l’observació directa
           i de l’avaluació posterior de cada grup i del conjunt de l’Escola.
        </p>
        <p>Treballem per aconseguir que l’alumne que arriba a l’Escola, independentment de l’edat que
           tingui, pugui marcar-se uns objectius personals i de grup reals i posem els mitjans perquè els
           assoleixi.</p>
        <p>L’activitat es comença als quatre anys i finalitza quan s’arriba a la categoria infantil.
           Treballem en grups reduïts, sempre que les infraestructures ens ho permeten, i, com a complement
           d’aquesta formació, els alumnes poden participar a la Lliga Escolar que organitza el Consell
           Esportiu de Terrassa.</p>
        <p>La competició esdevé una eina profitosa on cada alumne pot posar a prova els seus aprenentatges
           davant dels jugadors dels equips rivals i destacar la importància del treball cooperatiu amb els
           seus propis companys, en un ambient de respecte i esportivitat.</p>
        <p>Al setembre comencem els entrenaments i procurem seguir la dinàmica escolar buscant facilitar la
           logística familiar de cada alumne. Entrenem dos dies a la setmana, una hora i mitja cada dia
           d’entrenament més el partit del cap de setmana que acostuma a jugar-se els dissabtes al matí,
           tenint un calendari molt flexible pel que fa als dies festius.</p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola-4',
            alt: 'RCDE Escola',
        );
        include ROOT . '/../src/View/img-set.php' ?>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <div data-nav-items="com-treballem"></div>
    </div>
</div>
