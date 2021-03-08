<?php

use RCDE\Model\Picture;

require_once ROOT . '/../src/Model/Picture.php';
?>

<h2 class="h1" id="como-trabajamos" data-heading>Cómo trabajamos</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="objetivos">Objetivos</h3>
        <hr class="divider my-4 ml-0">
        <p>Bajo la supervisión de los responsables del fútbol base y la coordinación de la dirección técnica de la
           Escuela, se procura que todos los alumnos que lleguen, puedan disfrutar de la práctica deportiva en un
           ambiente de esfuerzo, alegría y compromiso.</p>
        <p>Nuestro principal objetivo es posibilitar una contribución efectiva, mediante el deporte y los valores
           positivos que de esta actividad podemos extraer, a la formación integral de todos los alumnos. </p>
        <p>La práctica deportiva asociada a los valores del trabajo, la superación personal, la responsabilidad y el
           esfuerzo, junto con la referencia propia del RCD Espanyol, definen cada temporada nuestra labor
           educativa.</p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola',
            alt: 'RCDE Escola',
            width: 1920, height: 1280,
        );
        include ROOT . '/../src/View/img-set.php' ?>

        <h3 id="planificacion" class="mt-5">Planificación</h3>
        <hr class="divider my-4 ml-0">
        <p>A partir de la temporada
            <time datetime="2017">2017–18,</time>
           todo el cuerpo técnico trabaja para materializar una planificación adecuada a nuestra realidad a través de
           las tareas de cada entrenador, de la observación directa y de la evaluación posterior de cada grupo y del
           conjunto de la Escuela.
        </p>
        <p>Trabajamos para conseguir que el alumno que llega a la Escuela, independientemente de la edad que tenga,
           pueda marcarse unos objetivos personales y de grupo reales y ponemos los medios para que pueda asumirlos.</p>
        <p>La actividad se inicia a los cuatro años y finaliza en la categoría infantil. Trabajamos en grupos reducidos,
           siempre que las infraestructuras lo permiten y, como complemento de esta formación, los alumnos pueden
           participar en la Liga Escolar que organiza el Consell Esportiu de Terrassa.</p>
        <p>La competición se convierte en una herramienta provechosa donde cada alumno puede poner a prueba sus
           aprendizajes ante los jugadores de los equipos rivales y destacar la importancia del trabajo cooperativo con
           sus propios compañeros, en un ambiente de respeto y deportividad.</p>
        <p>En septiembre empezamos los entrenamientos y procuramos seguir la dinámica escolar buscando facilitar la
           logística familiar de cada alumno. Entrenamos dos días a la semana, una hora y media cada día de
           entrenamiento más el partido del fin de semana que suele jugarse los sábados por la mañana, teniendo un
           calendario muy flexible en cuanto a los días festivos.</p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-escola-4',
            alt: 'RCDE Escola',
        );
        include ROOT . '/../src/View/img-set.php' ?>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <div data-nav-items="como-trabajamos"></div>
    </div>
</div>
