<?php
$this->title = "SEGOP - Certificado Médito Aeronáutico (CMA)";
?>

    <div class="wizzard container">
        <h2>Solicitação do seguro: CMA</h2>
        <div id="example-basic">
            <h3>Informações pessoais</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Nome completo</label>
                        <input type="text" name="nome" class="form-control" id="nome"  required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">E-mail</label>
                        <input type="text" name="email" class="form-control" id="email"  required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">CPF</label>
                        <input type="text"  name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00 "id="cpf"  required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Telefone</label>
                        <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Celular</label>
                        <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  reqrequired="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="CEP">CEP</label>
                        <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="true" value="" type="search" maxlength="8" pattern="[0-9]+$">
                    </div>     
                </div>            
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento"  required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">N°</label>
                        <input type="text" name="numero" class="form-control" id="numero"  required="true">
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