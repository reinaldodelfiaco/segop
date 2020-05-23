<?php
    $this->title = "SEGOP - Seguro de Responsabilidade Civil do Transportador Aéreo (RETA)";
?>

<div class="wizzard container">
    <h2>Solicitação do seguro: Reta</h2>
    <form action="/site/reta" method="post">
        <div id="example-basic">
            <h3>Informações aeronave</h3>
            <section>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Matrícula</label>
                            <input type="text" name="matricula" id="matricula" placeholder="Ex. (PT-FJC)" class="form-control" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="">Operador</label>
                            <input type="text" name="operador" id="operador" class="form-control" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="form-row col-md-4">
                         <label for="">Modelo</label>
                          <input type="text" name="modelo" class="form-control" id="modelo"  required="true">
                   </div>
                    <div class="form-row col-md-3">
                         <label for="">Numero de Série</label>
                         <input type="text" name="numeroSerie" class="form-control" id="numeroSerie"  required="true">
                     </div>
                    </div>
                    <br>
                            <div class="row">
                                <div class="form-row col-md-4">
                                <label for="">PMD</label>
                                <input type="text" name="pmd" class="form-control" id="pmd"  required="true">
                            </div>
                            <div class="form-row col-md-2">
                                <label for="">Ano</label>
                                <input type="text" name="ano" class="form-control" id="ano"  required="true">
                            </div>
                            </div>
                            <br>
                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                  <label for="">Nº de Tripulates</label>
                                     <input type="text" name="nTripulantes" id="nTripulantes" class="form-control" required="true">
                        </div>
                    </div>
                </div>
            </section>

            <h3>Informações Pessoais</h3>
            <section>
            <div class="row">
                  <div class="form-row col-md-4">
                         <label for="">Nome Completo</label>
                          <input type="text" name="nome" class="form-control" id="nome"  required="true">
                   </div>
                    <div class="form-row col-md-4">
                         <label for="">Email</label>
                         <input type="text" name="email" class="form-control" id="email"  required="true">
                     </div>
                 </div>
                 <br>
                    <div class="row">
                    <div class="form-row col-md-4">
                            <label for="">CPF/CNPJ</label>
                            <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="true" type="text" maxlength="11" pattern="[0-9]+$">
                    </div>
                        <div class="form-row col-md-4">
                            <label for="">Telefone</label>
                            <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required="true">
                            </div>
                            <div class="form-row col-md-4">
                            <label for="">Celular</label>
                             <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  required="true">
                                </div>
                        </div>
                  
                    <br>
                    <div class="row">
                        <div class="form-group col-md-4">
                                <label for="CEP">CEP</label>
                                     <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="true" value="" type="search" maxlength="8" pattern="[0-9]+$">
                              </div>
                        <div class="col-md-4">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required="true">
                      </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="form-row col-md-2">
                            <label for="">N°</label>
                            <input type="number" name="numero" class="form-control" id="numero"  required="true">
                    </div>
                        <div class="form-row col-md-4">
                            <label for="">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento"  required="true">
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