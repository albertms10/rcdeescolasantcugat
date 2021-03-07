<h2 class="text-center mt-0">Cuenta con nosotros</h2>
<hr class="divider my-4">
<div class="row">
    <?php
    $slogans = [
        new RCDE\Slogan(
            title: 'Personalización y experiencia',
            description: 'Diez años de buen trabajo en Sant Cugat',
            fa_icon: 'fa-gem',
        ),
        new RCDE\Slogan(
            title: 'Ambiente familiar',
            description: 'El contexto ideal para los niños',
            fa_icon: 'fa-heart',
        ),
        new RCDE\Slogan(
            title: 'ADN Perico',
            description: 'Espíritu de lucha y orgullo blanquiazul',
            icon_filename: ROOT . '/assets/img/logo/perico-rcde.svg',
        ),
        new RCDE\Slogan(
            title: 'Conexión RCDE',
            description: 'Jornadas y encuentros con las RCDE Academy y RCDE Escoles',
            fa_icon: 'fa-globe-europe',
        )
    ];

    require ROOT . '/../src/View/slogans-cols.php' ?>
</div>
