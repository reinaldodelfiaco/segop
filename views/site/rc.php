<?php
$this->title = "SEGOP";
?>

    <div class="wizzard container">
        <h2>Solicitação do seguro: RC</h2>
        <div id="example-basic">
        <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Natureza das operações</label>
                            <select id="inputLicenças" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                        </div>
            <section>
                <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Effects</h3>
            <section>
                <p>Wonderful transition effects.</p>
            </section>
            <h3>Pager</h3>
            <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
        </div>
    </div>
<?php

$this->registerJs('
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true,
        labels: {
            cancel: "Cancelar",
            current: "Atual:",
            pagination: "Paginação",
            finish: "CONFIRMAR",
            next: "PRÓXIMO",
            previous: "ANTERIOR",
            loading: "Carregando ..."
        }
    });
');