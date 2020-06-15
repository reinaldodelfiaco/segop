<?php
$this->title = "SEGOP - Responsabilidade Civil Hangar e Serviços Aeroportuários (RC Hangar)";
?>

    <div class="wizzard container">
        <h2>Solicitação do seguro: RC</h2>
        <div id="example-basic">
            <h3>Natureza das operações</h3>
            <section>
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="inputNatureza">Natureza das operações</label>
                        <!-- colocar multipla escolha -->
                        <select multiple="" id="inputNatureza" class="form-control">
                            <option value="1">Hangaragem</option>
                            <option value="2">Centro de Instrução</option>
                            <option value="3">Operações Agrícolas</option>
                            <option value="4">Oficina de Manutenção</option>
                            <option value="5">Táxi Aéreo</option>
                            <option value="6">Linha Aérea</option>
                        </select>
                    </div>
                    <div class="form-row col-md-6">
                        <label for="">Qual é a quantidade de hangares que você deseja segurar?</label>
                        <div class="col-md-4">
                            <input type="number" name="hangar" class="form-control"  id="hangar"  required="true">
                        </div>
                    </div>
                </div>
                <br> <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Quando iniciou as operações?</label>
                        <input type="date" name="data" class="form-control"  id="data"  required="true">
                    </div>
                    <div class="form-row col-md-6 ">
                        <label for="">Qual a quantidade de hangares que você opera?</label>
                        <div class="col-md-4">
                            <input type="number" name="hangar" class="form-control"  id="hangar"  required="true">
                        </div>
                    </div>
                </div>
            </section>

            <h3>Informações do hangar</h3>
            <section>          
                <div class="form-group">
                    <label class="col-lg-6 control-label">Este é o Hangar que você deseja segurar?</label>
                    <div class="col-lg-4">
                        <label class="radio-inline">
                                <input type="radio" name="radio"> Sim </label>
                                    <label class="radio-inline">
                                <input type="radio" name="radio"> Nâo</label>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="form-row col-md-3">
                        <label for="CEP">CEP</label>
                        <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="true" value="" type="search" maxlength="8" pattern="[0-9]+$">
                    </div>  
                    <div class="col-md-4">
                            <label for="">Cidade</label>
                            <div class="input-group">
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Ex. Goiania" required="true"> 
                            <span class="input-group-addon"><i
                                                        class="fa fa-map-marker fa-fw"></i></span> 
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
                        <input type="text" name="rua" id="rua" class="form-control" required="true">                         
                    </div>
                    <div class="col-md-3">
                        <label for="">Complemento</label>
                        <input type="text" name="complemento" id="complemento" class="form-control" required="true">
                    </div>  
                    <div class="col-md-1">
                        <label for="">N°</label>
                        <input type="text" name="numero" id="numero" class="form-control" required="true">
                    </div>   
                    <div class="col-md-2">
                        <label for="">Bairro</label>
                        <input type="text" name="bairro" id="bairro" class="form-control" required="true">
                    </div>                                        
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="">Realiza abastecimento de Aeronave?</label><br>
                        <select id="inputAbastecimento" class="form-control " >
                            <option>Selecione</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>                             
                    <div class="col-md-4 ">
                        <label for="">Você é o responsável por esta atividade?</label><br>
                            <select id="inputAtividade" class="form-control">
                            <option>Selecione</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>  
                    <div class="col-md-4 form-row">
                        <label for="">Existem compressor(es) no hangar?</label>
                        <select id="inputCompressor" class="form-control">
                        <option>Selecione</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>   
                </div>
                <br>               
                <div class="row">
                <h4>Capacidade Total</h3>
                    <div class="col-md-2 form-row">
                        <label for="">Asas Fixas</label><br>
                        <select id="inputAsas" class="form-control">
                                <option>Atual: 8</option>
                                <option>Máxima: 10</option>
                        </select>
                    </div>      
                    <div class="col-md-2 form-row">
                        <label for="">Asas Rotativas</label><br>
                        <select id="inputAsas" class="form-control">
                            <option>Atual: 3</option>
                            <option>Máxima: 3</option>
                        </select>
                    </div>  
                </div>    
            </section>
            
            <h3>Aeronaves Hangaradas</h3>
            <section>   
                <div class="row">
                    <h4>Quais são as aeronaves hangariadas?</h3>
                    <div class="form-row col-md-4">
                        <label for="">Fabricante</label>
                            <input id="fabricante" name="fabricante"  placeholder="Ex.: Cessna"  class="form-control" required="true">
                    </div>  
                    <div class="col-md-3">
                        <label for="">Modelo</label>
                        <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Ex.: C172" required="true">
                    </div>                           
                    <div class="col-md-2">
                        <label for="">Quantidade</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" required="true">
                    </div>  
                </div>
                <br>            
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Tipo de Construção</label>
                        <input type="text" name="construcao" id="construcao" placeholder="Ex. (metálica, alvenaria..)" class="form-control" required="true">
                    </div>  
                    <div class="form-row col-md-4">
                        <label for="">Qual o valor médio das aeronaves?</label>
                        <input type="text" name="valor" id="valor" class="form-control" required="true">
                    </div>  
                    <div class="form-row col-md-4">
                        <label for="">Sistema de Proteção</label>
                        <textarea cols="45" rows="3" maxlength="10" placeholder="Detalhe os sistemas de proteção a incêndio e vigilância" required="true"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-6">
                        <label for="">Quais são as atividades de manutenção realizadas?</label>
                        <textarea cols="70" rows="10" maxlength="30" ></textarea>
                    </div>
                </div>
                <br>
                </section>

                <h3>Informações</h3>
                    <section>   
                        <div class="row">
                            <div class="form-row col-md-12">
                                <label for="">Quais são os tipos e modelos de aeronaves e turbinas usualmente repadadas nos últimos 12 (doze) meses?</label>
                                <textarea cols="40" rows="5" maxlength="15" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-row col-md-6">
                                    <label for="">A empresa fabrica qualquer produto? Se sim, qual?</label>
                                    <textarea cols="40" rows="3" maxlength="15"></textarea>
                                </div>
                                <div class="form-row col-md-6">
                                    <label for="">Quais fabricantes de produtos aeronaúticos a empresa representa?</label>
                                    <textarea cols="40" rows="3" maxlength="10" placeholder="Quais fabricantes de produtos aeronúticos a empresa representa?"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-10 control-label">A empresa presta serviços pra norte-americanos?</label>
                                    <div class="col-lg-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="radio"> Sim </label>
                                            <label class="radio-inline">
                                            <input type="radio" name="radio"> Não</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-row col-md-6">
                                        <label for="">Qual a experiência dos seus técnicos?</label>
                                        <textarea cols="40" rows="3" maxlength="10"></textarea>
                                    </div>
                                </div>
                    </section>
                   
                   <h3>Translados e Contratos</h3>
                    <section>
                        <div class="form-group">
                            <label class="col-lg-10 control-label">A sua empresa realiza translado de aeronave?</label>
                            <div class="col-lg-6">
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Sim </label>
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Não</label>
                            </div>
                        </div>
                        <br>                     
                        <div class="form-group">
                            <label class="col-lg-10 control-label">Os serviços executados incluem testes em banco de prova?</label>
                            <div class="col-lg-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Sim </label>
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Não</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-10 control-label">Sua empresa obteve renúncia do direito de sub-rogação, de qualquer cliente?</label>
                            <div class="col-lg-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Sim </label>
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Não</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-10 control-label">O segurado participa de qualquer contrato de arrendamento, operação de aeronaves e etc.?</label>
                            <div class="col-lg-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radio"> Sim </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="radio"> Não</label>
                            </div>
                        </div>   
                    </section>
             
                    <h3>Voo de testes</h3>
                    <section>
                        <h4>Qual o valor máximo e médio das aeronaves que fizeram voos de testes nos últimos 12 (doze) meses?</h3>
                            <div class="row">
                            <h4>Asas Fixas</h4>
                            <div class="col-md-2 ">
                                <label for="">Moeda</label><br>
                                <select id="inputMoeda" class="form-control ">
                                    <option>Dólar</option>
                                </select>
                            </div>  
                            <div class="col-md-2 ">
                                <label for="">Máximo ()</label><br>
                                    <select id="inputMaximo" class="form-control ">
                                        <option>10.0000.000.00</option>
                                    </select>
                            </div>  
                            <div class="col-md-2 ">
                                <label for="">Médio ()</label><br>
                                <select id="inputMedio" class="form-control ">
                                    <option> 800.000.00</option>
                                </select>
                            </div>  
                        </div>
                        
                        <div class="row">
                            <h4>Asas Rotativas</h4>
                            <div class="col-md-2 ">
                                <label for="">Moeda</label><br>
                                    <select id="inputMoeda" class="form-control ">
                                        <option>Dólar</option>
                                    </select>
                            </div>  
                            <div class="col-md-2 ">
                                <label for="">Máximo ()</label><br>
                                    <select id="inputMaximo" class="form-control ">
                                        <option>10.0000.000.00</option>
                                    </select>
                            </div>  
                            <div class="col-md-2 ">
                                <label for="">Médio ()</label><br>
                                <select id="inputMedio" class="form-control ">
                                    <option> 800.000.00</option>
                                </select>
                            </div>  
                        </div>
                        <br> 
                        <div class="row">
                            <label class="col-lg-10">É previsto que se tenha alterações nos próximos 12 (doze) meses para os valores indicados anteriormente?</label>
                                <div class="col-lg-6">
                                    <label class="radio-inline">
                                        <input type="radio" name="radio"> Sim </label>
                                        <label class="radio-inline">
                                    <input type="radio" name="radio"> Não</label>
                                </div>
                            </div>
                            <br>                  
                            <div class="row">
                            <div class="form-row col-md-4">
                                    <label for="">Qual o tempo médio de cada voo de teste?</label>
                                    <input type="text" name="tempo" id="tempo"  class="form-control" required="true">
                            </div>  
                       </div>
                    </section>

                    <h3>Pilotos</h3>
                    <section>
                        <div class="row">
                            <div class="form-row col-md-6">
                                <label for="">Tipos/Modelos de aeronaves usualmente testados:</label>
                                <textarea cols="50" rows="5" maxlength="10"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-row col-md-10">
                                <label for="">Qual a experiência dos pilotos (ANAC, CPF, Treinamentos, experiência total, no tipo e no modelo)</label>
                                <textarea cols="60" rows="10" maxlength="30"></textarea>
                            </div>
                        </div>
                    </section>
                    
                    <h3>Sinistros</h3>
                    <section>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-lg-5 control-label">Houve sinistro nos últimos 5 (cinco) anos?</label>
                                    <div class="col-md-3 col-sm-4">
                                <select id="sinistro" class="form-control" required="true">
                                            <option value="1">Selecione</option>
                                            <option value="sim">Sim</option>
                                            <option value="Não">Não</option>
                                            </select>
                                     </div>
                            </div>
                        </div>
                            <script> 
                              $(document).ready(function() {
                                 $('#sinistros').hide();
                                    $("#sinistro").change(function() {
                                      if(this.value == "sim") {
                                          $('#sinistros').show();
                                      } else {
                                        $('#sinistros').hide();
                                      }
                                 });
                             });
                            </script>

                        <br>
                        <div class="row">
                            <div class="form-row col-md-4" id="sinistros">
                                <label for="">Por favor, detalhe cada um dos sinistros.</label>
                                <textarea cols="60" rows="10" maxlength="30"></textarea>
                            </div>
                        </div>
                    </section>

                    <h3>Receitas e Propostas</h3>
                    <section>
                        <div class="row">
                            <div class="form-row col-md-6">
                                <label for=""> Receita de hangaragem auferida nos últimos 12 (doze) meses:</label>
                                    <div class="col-md-5">
                                     <input type="text" name="auferida" id="auferida" placeholder="Valor R$" class="form-control" required="true">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-row col-md-6">
                                    <label for=""> Receita de hangaragem estimada nos últimos 12 (doze) meses:</label>
                                    <div class="col-md-5">
                                        <input type="text" name="estimada" id="estimada" placeholder="Valor R$" class="form-control" required="true">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <h4>Informe o valor segurado pretendido (limite máximo de indenização):</h4>
                                <div class="col-md-3 ">
                                    <label for="">Moeda</label><br>
                                        <select id="inputMoeda" class="form-control ">
                                                <option>USD</option>
                                                <option>BRL</option>
                                        </select>
                                </div>  
                                <div class="form-row col-md-3">
                                    <label for=""> Valor (R$)</label>
                                    <input type="text" name="valor" id="valor"  class="form-control" required="true">
                                </div>
                                <div class="form-row col-md-3">
                                    <label for=""> Franquia (R$)</label>
                                    <input type="text" name="franquia" id="franquia"  class="form-control" required="true">
                                </div>
                            </div>
                    </section>
                    
                    <h3>Informações Pessoais</h3>
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
                                    <input type="text"  name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00 " id="cpf"  required="true">
                                </div>
                                <div class="form-row col-md-3">
                                    <label for="">Telefone</label>
                                    <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required="true">
                                </div>
                                <div class="form-row col-md-3">
                                    <label for="">Celular</label>
                                    <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  required="true">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-row col-md-3">
                                    <label for="CEP">CEP</label>
                                     <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="true" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                </div>     
                                <div class="col-md-4">
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
                                        <input type="text" name="nome_beneficiario" class="form-control" id="nome_beneficiario" placeholder="Ex.: Fulano de tal da Silva" require="true">
                                    </div>
                                    <div class="form-row col-md-4">
                                        <label for="">CPF/CNPJ</label>
                                        <input type="text" name="documento_benecificario" class="form-control" id="documento_benecifiario" placeholder="Ex.: 04967145030" require="true">
                                    </div>
                                </div>
                            </section>
                            
                        <h3>Enviar</h3>
                            <section>
                                <center>
                                <div class="jumbotron">

                                <p>Em breve você receberá um e-mail com a nossa cotação!</p>

                                <p>Obrigado e conte com a SEGOP</p>
                                        <!-- Adicionar uma âncora para que ao clicar em adicionar hangar volte para a primeira tela do wizard -->
                                        <button type="button" onclick="window.location='rc';" class="btn btn-primary">Adicionar hangar</button>
            
                                        <button type="button" class="btn btn-primary" onclick="window.location='/';">Pagina Inicial</button>
                                        </div>
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