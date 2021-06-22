<main class="content">
    <?php
        renderTitle(
            'Registrar Ponto',
            'Mantenha seu ponto consistente!',
            'icofont-check-alt'
        );

        $date = (new Datetime())->getTimestamp();
        // strftime — Formata uma hora/data de acordo com as configurações locais
        $today = strftime('%d de %B de %Y', $date);

        include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-around m-3">
                <span class="record">Entrada 1: ---</span>
                <span class="record">Saida 1: ---</span>
            </div>
            <div class="d-flex justify-content-around m-3">
                <span class="record">Entrada 2: ---</span>
                <span class="record">Saida 2: ---</span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="???" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>
                Bater o Ponto
            </a>
        </div>
    </div>
</main>