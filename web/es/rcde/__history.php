<?php

use RCDE\Picture;

require_once ROOT . '/../src/Model/Picture.php';
?>

<h2 class="h1" id="historia" data-heading>Historia</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="fundado-por-universitarios-catalanes">Fundado por universitarios catalanes</h3>
        <hr class="divider my-4 ml-0">
        <p>El <em>Reial Club Deportiu Espanyol de Barcelona</em> es uno de los clubes de fútbol más antiguos de la Liga
           Española. El
            <time datetime="1900-10-28">28 de octubre de 1900,</time>
           en las aulas de la Universidad de Barcelona, nacía la Sociedad Española de
           Football, nombre que le dio al Club su fundador y primer presidente, Ángel Rodríguez. Las principales señas
           de identidad, y lo que determinó el nombre original de este nuevo Club deportivo, fue que todos sus
           componentes eran catalanes o nacidos en el resto de España, en contraposición a los demás equipos, formados
           mayoritariamente, por ingleses y otras nacionalidades.
        </p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-historia-1',
            alt: 'RCDE Escola',
            width: 960, height: 275,
        );
        include ROOT . '/../src/View/img-set.php' ?>

        <h3 id="el-amarillo-color-original-del-club" class="mt-5">El amarillo, color original del club</h3>
        <hr class="divider my-4 ml-0">
        <p>Aunque el RCD Espanyol de Barcelona viste hoy de blanquiazul, el amarillo fue el color original del Club, por
           la sencilla razón que era el color de la pieza de ropa que uno de sus primeros socios regaló a la Entidad
           para que confeccionase sus uniformes. Más adelante vistió camiseta blanca y pantalón azul y, en
            <time datetime="1909">1909,</time>
           vestía ya con los actuales colores blanquiazules, aquellos que lucía en su blasón el almirante Roger de
           Llúria.
        </p>

        <h3 id="jugadores-de-renombre" class="mt-5">Jugadores de renombre</h3>
        <hr class="divider my-4 ml-0">
        <p>A lo largo de su trayectoria, el Espanyol ha contado con jugadores mundialmente famosos y ha nutrido con
           muchos de ellos a la Selección Española. El primer gran ídolo blanquiazul fue el mítico guardameta Ricardo
           Zamora. Tras él, otros jugadores, como Alfredo Di Stefano, Kubala o N’Kono, cogieron su testigo.
        </p>

        <h3 id="futbol-base-de-gran-nivell" class="mt-5">Futbol base de gran nivell</h3>
        <hr class="divider my-4 ml-0">
        <p>El Club cuenta con un equipo filial, el Espanyol B, doce equipos de fútbol base, fútbol femenino y una
           escuela de fútbol. Todos ellos entrenan y juegan sus partidos como locales en la Ciudad Deportiva Dani Jarque
           de Sant Adrià, inaugurada en
            <time datetime="2001-09">septiembre de 2001.</time>
        </p>

        <h3 id="de-sarria-al-olimpico" class="mt-5">De Sarrià al Olímpico</h3>
        <hr class="divider my-4 ml-0">
        <p>El actual RCD Espanyol de Barcelona comenzó a jugar sus partidos en una gran explanada, muy próxima a la
           Sagrada Familia de Barcelona. Desde
            <time datetime="1923">1923</time>
           y hasta la temporada
            <time datetime="1996">1996–97,</time>
           el estadio de Sarrià, popularmente conocido como ‘Can Ràbia’ o ‘la Bombonera’, en la plaza Ricardo Zamora,
           fue el feudo del equipo catalán.
        </p>
        <p>En el año
            <time datetime="1997">1997</time>
           el Club se vio obligado a vender Sarrià y se trasladó al Estadio Olímpico Lluís Companys de
           Montjuïc, donde el RCD Espanyol jugó sus partidos hasta la temporada
            <time datetime="2008">2008–09,</time>
           con un promedio de 22.500 espectadores por partido. Durante estos doce años el equipo alcanzó grandes éxitos
           como las Copas del Rey de
            <time datetime="2000">2000</time>
           y
            <time datetime="2006">2006</time>
           o la clasificación para la Final de la Copa de la UEFA de
            <time datetime="2007">2007,</time>
           competición donde no cayó derrotado en ningún partido.
        </p>
        <p>En Montjuïc también se vivieron momentos de euforia, como la salvación del equipo la temporada
            <time datetime="2003">2003–04</time>
           gracias a un gol de Tamudo contra el Murcia, o el gol de Coro en el tiempo añadido contra la Real Sociedad,
           que permitió que el Espanyol se mantuviese en la máxima categoría en el año
            <time datetime="2006">2006</time>
           y encarase el camino hacia la construcción de la nueva casa en Cornellà&thinsp;–&thinsp;El Prat, donde el
           club se trasladó el
            <time datetime="2009-07-10">10 de julio de 2009.</time>
        </p>

        <h3 id="cuatro-titulos-de-copa" class="mt-5">Cuatro títulos de Copa:
            <time datetime="1929">1929,</time>
            <time datetime="1940">1940,</time>
            <time datetime="2000">2000</time>
                                                     y
            <time datetime="2006">2006</time>
        </h3>
        <hr class="divider my-4 ml-0">
        <p>La primera gran conquista en la historia del espanyolismo fue la Copa Macaia, en la temporada
            <time datetime="1902">1902–03.</time>
           En
            <time datetime="1912">1912,</time>
           S.&thinsp;M. el Rey Alfonso XIII le concedía el título de 'Reial' y el uso de la corona que hoy figura en su
           escudo. Cuando se inauguró el Campeonato Nacional de Liga, en
            <time datetime="1929">1929,</time>
           el Espanyol figuró entre los clubes fundadores, consiguiendo el primer gol oficial de esta Competición.
        </p>
        <p>Aquel mismo año, el conjunto blanquiazul se proclamó campeón de la Copa de S.&thinsp;M. el Rey, título que
           revalidó en
            <time datetime="1940">1940,</time>
           en el
            <time datetime="2000">2000,</time>
           en plena celebración del Centenario de su fundación, y en el
            <time datetime="2006">2006.</time>
           A nivel internacional, obtiene un reconocimiento muy importante el
            <time datetime="1988">1988,</time>
           cuando fue subcampeón de la Copa de la UEFA en Leverkusen. En mayo del
            <time datetime="2007">2007</time>
           vuelve a conseguir llegar a la final europea, y queda subcampeón ante el Sevilla F.&thinsp;C., destacando por
           no haber perdido ningún partido en toda la trayectoria.
        </p>

        <h3 id="dos-veces-finalistas-copa-uefa" class="mt-5">
            Dos veces finalistas de la Copa de la UEFA
        </h3>
        <hr class="divider my-4 ml-0">
        <p>El RCD Espanyol ha sido dos veces finalista de la Copa de la UEFA. En
            <time datetime="1988">1988,</time>
           con Javier Clemente como entrenador, disputó la final de la UEFA ante el Bayer Leverkusen, y el
            <time datetime="2007">2007,</time>
           con Ernesto Valverde en el banquillo, ante el Sevilla F.&thinsp;C. El conjunto blanquiazul llegó a esta
           última final sin perder ningún partido durante toda la competición.
        </p>

        <h3 id="un-nuevo-estadio-marca-el-futuro-del-club" class="mt-5">Un nuevo estadio marca el futuro del club</h3>
        <hr class="divider my-4 ml-0">
        <p>A principios de
            <time datetime="2002">2002,</time>
           el RCD Espanyol de Barcelona anunciaba el inicio de los trámites para la construcción de un nuevo estadio de
           propiedad en el término municipal de Cornellà&thinsp;–&thinsp;El Prat, vecino a la ciudad de Barcelona.
           Después de largos trámites administrativos, en el
            <time datetime="2007">2007</time>
           se iniciaron las obras de pilotaje del Estadio y empezó la cuenta atrás. El proyecto del nuevo estadio marca
           el comienzo de una nueva era para el espanyolismo, que ya tiene de nuevo su propia casa: el Estadio RCD
           Espanyol de Cornellà&thinsp;–&thinsp;El Prat, el más moderno estadio de fútbol en España, con una capacidad
           para 40.000 personas y catalogado por la UEFA con 4 estrellas.
        </p>

        <em class="text-muted float-right">Fuente:
            <a href="https://www.rcdespanyol.com/es/historia/"
               hreflang="es"
               rel="external noopener" target="_blank">
                rcdespanyol.com<i class="fas fa-external-link-square-alt ml-2"></i>
            </a>
        </em>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <div data-nav-items="historia"></div>
    </div>
</div>