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
                            <label for=""> Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" placeholder="Ex. PT-FJC" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Operador</label>
                            <input type="text" name="operador" id="operador" class="form-control" placeholder="Ex.: Sete táxi aéreo LTDA" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-3">
                        <label for="">Modelo</label>
                        <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Ex.: C172" required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Número de Série</label>
                        <input type="text" name="numeroSerie" class="form-control" placeholder="Ex.: 86987542" id="numeroSerie"  required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">PMD</label>
                        <input type="text" name="pmd" class="form-control" id="pmd" placeholder="Ex.: 4800 kg"  required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Ano</label>
                        <input type="text" name="ano" class="form-control" id="ano"  required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nº de Tripulates</label>
                            <input type="number" name="nTripulantes" id="nTripulantes" placeholder="Ex.: 2" class="form-control" required="true">
                        </div>
                    </div>
                </div>
            </section>

            <h3>Informações do piloto</h3>
            <section>
                <div class="row">
                    <div class="col-md-3 ">
                        <label for="">Comandante</label>
                        <input type="text" class="form-control" id="nome" name="nome"  required="true">
                    </div>
                    <div class="col-md-3">
                        <label for="">Data de Nascimento</label>
                        <input type="date"  class="form-control" id="dataNascimento" name="dataNascimento"  required="true">
                  
                    </div>
                    <div class="col-md-3">
                        <label for="">CPF</label>
                        <input type="text"   class="form-control" id="cpf" name="cpf" placeholder="Ex:. 000.000.000.00" required="true">
                    </div> 
                    <div class="col-md-3 ">
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
                    <div class="col-md-3 ">
                            <label for="">Horas totais (Asas Fixas)</label>
                            <input type="text" class="form-control" id="horaTotal" name="horaTotal"  required="true">
                    </div>
                    <div class="col-md-3 ">
                            <label for="">Horas totais (Asas Rotativas)</label>
                            <input type="text" class="form-control" id="hora" name="hora"  required="true">
                    </div>
                    <div class="col-md-3 ">
                        <label for="">CANAC</label>
                        <input type="text" class="form-control" id="canac" name="canac"  required="true">
                    </div>
                    <div class="col-md-3 ">
                        <label for="">Licença</label>
                        <select id="inputLicenças" class="form-control" required="true">
                            <option selected>Escolher...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col-md-3 ">
                        <label for="">Habilitação</label>
                        <select id="inputHabilitacao" class="form-control" required="true">
                            <option selected>Selecione</option>
                            <option>...</option>
                        </select>
                    </div>
                       <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" required="true">
                        </div>
                        </div>
                       <div class="col-md-3 ">
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
                        <label for="">Acidente aéreo nos ultimos 5 anos?</label><br>
                        <select id="inputAcidente" class="form-control" required="true">
                            <option>Selecione</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                    <div class="col-md-4 ">
                        <label for="">Treinamentos ?</label><br>
                        <select id="input_tipo_treinamento" class="form-control" required="true">
                            <option selected>Selecione..</option>
                            <option>Simulador AATD</option>
                            <option>Jet training</option>
                            <option>Ground school</option>
                            <option>SGSO</option>
                            <option>AVSEC</option>
                            <option>Treinamento na selva</option>
                            <option>Artigos perigosos</option>
                        </select>
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
                    <div class="form-row col-md-3">
                        <label for="">CPF/CNPJ</label>
                        <input type="text"  name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00 "id="cpf"  required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Telefone</label>
                        <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Celular</label>
                        <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  reqrequired="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-3">
                        <label for="CEP">CEP</label>
                         <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="true" value="" type="search" maxlength="8" pattern="[0-9]+$">
                    </div>     
           
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="col-md-3">
                            <label for="">Estado</label>
                                <select  id="uf" name="uf" class="form-control" required="true">
                                    <option>Selecionar</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                            <div class="col-md-4">
                                <label for="">Endereço</label>
                                <input type="text" name="endereco" id="endereco" class="form-control" required="true" placeholder="Ex.: Orfelino Reichel">
                                </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Bairro</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" required="true">
                                </div>
                                </div>
                             <div class="form-row col-md-3">
                                    <label for="">Complemento</label>
                                    <input type="text" name="complemento" class="form-control" id="complemento"  required="true">
                                </div>
                            <div class="form-row col-md-2">
                                <label for="">N°</label>
                                <input type="number" name="numero" class="form-control" id="numero"  required="true">
                              </div>
                         </div>
            </section>

            <h3>Beneficiário</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Nome do beneficiário</label>
                        <input type="text" name="nome_beneficiario" class="form-control" id="nome_beneficiario" placeholder="Ex.: Fulano de Tal" required="true">
                    </div>
                    <div class="row">
                    <div class="col-md-4 ">
                        <label for="">CPF/CNPJ</label>
                        <input type="text"   class="form-control" id="documento_beneficiario" name="documento_beneficiario" placeholder="Ex.: 000.000.000.00" required="true">
                    </div>  
                </div>
            </section>

            <h3>Enviar</h3>
            <section>

            <center>
            <div class="jumbotron">

                <p>Em breve você receberá um e-mail com a nossa cotação!</p>

                <p>Obrigado e conte com a SEGOP</p>
                <!-- Adicionar uma âncora para que ao clicar em adicionar aeronave volte para a primeira tela do wizard -->
                <button type="button" onClick="window.location='casco';" value="click here" class="btn btn-primary">Adicionar aeronave</button>
                <button type="submit" class="btn btn-primary" href="/">Pagina Inicial</button>
               
                </center>
               </div>
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