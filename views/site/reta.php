<?php
    $this->title = "SEGOP";
?>

<div class="wizzard container">
    <h2>Solicitação do seguro: Reta</h2>
    <div id="example-basic">
        <h3>Keyboard</h3>
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