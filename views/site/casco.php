<?php
$this->title = "SEGOP";
?>

    <div class="wizzard container">
        <h2>Solicitação do seguro: Casco</h2>
        <div id="example-basic">
            <h3>Informações aeronave</h3>
            <section>
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Matrícula</label>
                            <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Ex. PT-FJC" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for=""> Operador</label>
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

            <h3>Informações do piloto</h3>
            <section>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Comandante</label>
                            <input type="text" class="form-control" id="nome" name="nome"  required="true">
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas totais (Asas Fixas)</label>
                             <input type="text" class="form-control" id="horaTotal" name="horaTotal"  required="true">
                        </div>
                        <div class="col-md-4 ">
                            <label for="">Acidente aéreo nos ultimos 5 anos?</label><br>
                            <select id="inputAcidente" class="form-control" required="true">
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">CANAC</label>
                            <input type="text" class="form-control" id="canac" name="canac"  required="true">
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas totais (Asas Rotativas)</label>
                             <input type="text" class="form-control" id="hora" name="hora"  required="true">
                        </div>
                        <div class="col-md-4 ">
                            <label for="">Treinamentos ?</label><br>
                            <input type="text" class="form-control" id="treinamento" name="treinamento" placeholder="Ground School e Simuladores"  required="true">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">CPF</label>
                            <input type="text"   class="form-control" id="cpf" name="cpf"  required="true">
                        </div>
                        
                        <div class="col-md-4 ">
                             <label for="">Horas voadas (ultimo ano)</label>
                             <select id="inputHvoadas" class="form-control" required="true">
                                <option selected>Selecione..</option>
                                <option>Até 500</option>
                                <option>De 501 a 1000</option>
                                <option>De 1001 a 3000</option>
                                <option>Acima de 3000</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Data de Nascimento</label>
                            <input type="date"  class="form-control" id="dataNascimento" name="dataNascimento"  required="true">
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas nesta Aeronave</label>
                             <select id="inputHoraAeronave" class="form-control" required="true">
                                <option selected>Selecione..</option>
                                <option>Até 500</option>
                                <option>De 501 a 1000</option>
                                <option>De 1001 a 3000</option>
                                <option>Acima de 3000</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Licenças</label>
                            <select id="inputLicenças" class="form-control" required="true">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Habilitação</label>
                             <select id="inputHabilitacao" class="form-control" required="true">
                                <option selected>Tipo..</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                  <label for="">Tipo</label>
                                     <input type="text" name="tipo" id="tipo" class="form-control" required="true">
                        </div>
                    </div>
                </div>
            </section>

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
                        <label for="">CPF/CNPJ</label>
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
                            <input type="number" name="numero" class="form-control" id="numero"  required="true">
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