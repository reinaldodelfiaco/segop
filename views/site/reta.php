<?php
    $this->title = "SEGOP";
?>

<div class="wizzard container">
    <h2>Solicitação do seguro: Reta</h2>
    <form action="/site/reta" method="post">
        <div id="example-basic">
            <h3>Matrícula</h3>
            <section>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Matrícula</label>
                            <input type="text" name="matricula" id="matricula" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Operador</label>
                            <input type="text" name="operador" id="operador" class="form-control" required>
                        </div>
                    </div>
                </div>
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
    </form>
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