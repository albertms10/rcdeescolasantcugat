<h2 class="text-center mt-0">Compta amb nosaltres</h2>
<hr class="divider my-4">
<div class="row">
    <?php
    $slogans = [
        new RCDE\Slogan(
            title: 'Personalització i experiència',
            description: 'Deu anys de bona feina a Sant Cugat',
            fa_icon: 'fa-gem',
        ),
        new RCDE\Slogan(
            title: 'Ambient familiar',
            description: 'El context ideal per als infants',
            fa_icon: 'fa-heart',
        ),
        new RCDE\Slogan(
            title: 'ADN Perico',
            description: 'Esperit de lluita i orgull blanc-i-blau',
            icon_filename: ROOT . '/assets/img/logo/perico-rcde.svg',
        ),
        new RCDE\Slogan(
            title: 'Connexió RCDE',
            description: 'Jornades i trobades amb les RCDE Academy i RCDE Escoles',
            fa_icon: 'fa-globe-europe',
        )
    ];

    require ROOT . '/../src/View/slogans-cols.php' ?>
</div>
