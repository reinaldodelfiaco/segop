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
                            <label for=""> Marca</label>
                            <input type="text" name="marca" id="marca" placeholder="Ex. (PT-FJC)" class="form-control" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Operador</label>
                            <input type="text" name="operador" id="operador" class="form-control" placeholder="Ex.: Sete táxi aéreo LTDA" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="form-row col-md-3">
                         <label for="">Modelo</label>
                          <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Ex.: C172"  required="true">
                   </div>
                    <div class="form-row col-md-2">
                         <label for="">Numero de Série</label>
                         <input type="text" name="numeroSerie" class="form-control" id="numeroSerie" placeholder="Ex.: 86987542" required="true">
                     </div>
                    </div>
                    <br>
                            <div class="row">
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
                                     <input type="text" name="nTripulantes" id="nTripulantes" class="form-control"  placeholder="Ex.: 2" required="true">
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
                    <div class="form-row col-md-3">
                            <label for="">CPF/CNPJ</label>
                            <input id="cpf" name="cpf" placeholder="Ex.: 000.000.000-00" class="form-control cpf-mask" required="true" type="text" maxlength="11" pattern="[0-9]+$">
                    </div>
                        <div class="form-row col-md-3">
                            <label for="">Telefone</label>
                            <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.:0000-0000" id="telefone"  required="true">
                            </div>
                            <div class="form-row col-md-3">
                            <label for="">Celular</label>
                             <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  required="true">
                                </div>
                        </div>
                  
                    <br>
                    <div class="row">
                        <div class="form-group col-md-3">
                                <label for="CEP">CEP</label>
                                     <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="true" value="" type="search" maxlength="8" pattern="[0-9]+$">
                              </div>
                        <div class="col-md-3">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required="true">
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
                <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Endereço</label>
                            <input type="text" name="endereco" id="endereco" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="form-row col-md-2">
                            <label for="">N°</label>
                            <input type="number" name="numero" class="form-control" id="numero"  required="true">
                    </div>
                        <div class="form-row col-md-3">
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
                <!-- Adicionar uma âncora para que ao clicar em adicionar aeronave volte para a primeira tela do wizard -->
                <button type="button" onclick="window.location='reta';" value="click here" class="btn btn-primary" >Adicionar aeronave</button>
                
                <button type="button" class="btn btn-primary" onclick="window.location='/';" value="click here">Pagina Inicial</button>
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