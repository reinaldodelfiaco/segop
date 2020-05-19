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
                            <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Ex. PT-FJC" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for=""> Operador</label>
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

            <h3>Informações do piloto</h3>
            <section>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Comandante</label>
                            <input type="text" class="form-control" id="nome" name="nome"  required>
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas totais (Asas Fixas)</label>
                             <input type="text" class="form-control" id="horaTotal" name="horaTotal"  required>
                        </div>
                        <div class="col-md-4 ">
                            <label for="">Acidente aéreo nos ultimos 5 anos?</label><br>
                            <select id="inputAcidente" class="form-control">
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">CANAC</label>
                            <input type="text" class="form-control" id="canac" name="canac"  required>
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas totais (Asas Rotativas)</label>
                             <input type="text" class="form-control" id="hora" name="hora"  required>
                        </div>
                        <div class="col-md-4 ">
                            <label for="">Treinamentos ?</label><br>
                            <input type="text" class="form-control" id="treinamento" name="treinamento" placeholder="Ground School e Simuladores"  required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">CPF</label>
                            <input type="number" max="11"  class="form-control" id="cpf" name="cpf"  required>
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas voadas (ultimo ano)</label>
                             <input type="text" class="form-control" id="hvoada" name="hvoada"  required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Data de Nascimento</label>
                            <input type="date"  class="form-control" id="dataNascimento" name="dataNascimento"  required>
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Horas nesta Aeronave</label>
                             <input type="text" class="form-control" id="voada" name="voada"  required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Licenças</label>
                            <select id="inputLicenças" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-4 ">
                             <label for="">Habilitação</label>
                             <select id="inputHabilitacao" class="form-control">
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
                                     <input type="text" name="tipo" id="tipo" class="form-control" required>
                        </div>
                    </div>
                </div>
            </section>

            <h3>Informações pessoais</h3>
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
                            <input type="number" max="11" name="cpf" class="form-control" id="cpf"  required>
                    </div>
                        <div class="form-row col-md-4">
                            <label for="">Telefone</label>
                            <input type="number" name="telefone" class="form-control" id="telefone"  required>
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
                            <input type="number" name="numero" class="form-control" id="numero"  required>
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