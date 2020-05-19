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
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="">Operador</label>
                            <input type="text" name="operador" id="operador" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="form-row col-md-4">
                         <label for="">Modelo</label>
                          <input type="text" name="modelo" class="form-control" id="modelo"  required>
                   </div>
                    <div class="form-row col-md-3">
                         <label for="">Numero de Série</label>
                         <input type="text" name="numeroSerie" class="form-control" id="numeroSerie"  required>
                     </div>
                    </div>
                    <br>
                            <div class="row">
                                <div class="form-row col-md-4">
                                <label for="">PMD</label>
                                <input type="text" name="pmd" class="form-control" id="pmd"  required>
                            </div>
                            <div class="form-row col-md-2">
                                <label for="">Ano</label>
                                <input type="text" name="ano" class="form-control" id="ano"  required>
                            </div>
                            </div>
                            <br>
                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                  <label for="">Nº de Tripulates</label>
                                     <input type="text" name="nTripulantes" id="nTripulantes" class="form-control" required>
                        </div>
                    </div>
                </div>
            </section>

            <h3>Informações Pessoais</h3>
            <section>
            <div class="row">
                  <div class="form-row col-md-4">
                         <label for="">Nome Completo</label>
                          <input type="text" name="nome" class="form-control" id="nome"  required>
                   </div>
                    <div class="form-row col-md-4">
                         <label for="">Email</label>
                         <input type="text" name="email" class="form-control" id="email"  required>
                     </div>
                 </div>
                 <br>
                    <div class="row">
                    <div class="form-row col-md-4">
                            <label for="">CPF/CNPJ</label>
                            <input type="text" name="cpf" class="form-control" id="cpf"  required>
                    </div>
                        <div class="form-row col-md-4">
                            <label for="">Telefone</label>
                            <input type="text" name="telefone" class="form-control" id="telefone"  required>
                            </div>
                    </div>
                    <br>
                        <div class="row">
                        <div class="form-row col-md-4">
                                <label for="">CEP</label>
                                <input type="text" name="cep" class="form-control" id="cep"  required>
                        </div>
                            <div class="form-row col-md-4">
                                <label for="">Celular</label>
                                <input type="text" name="celular" class="form-control" id="celular"  required>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-2">
                            <label for="">N°</label>
                            <input type="text" name="numero" class="form-control" id="numero"  required>
                    </div>
                        <div class="form-row col-md-4">
                            <label for="">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento"  required>
                            </div>
                    </div>
            </section>

            <h3>Enviar</h3>
            <section>
                <center>
                <p>Em breve você receberá um e-mail com a nossa cotação!</p>

                <p>Obrigado e conte com a SEGOP</p>

                <button type="button" class="btn btn-primary">Adicionar aeronave</button>
                
                <button type="button" class="btn btn-primary">Pagina Inicial</button>
                </center>
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