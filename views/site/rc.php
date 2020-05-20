<?php
$this->title = "SEGOP";
?>

    <div class="wizzard container">
        <h2>Solicitação do seguro: RC</h2>
        <div id="example-basic">
            <h3>Natureza das operações</h3>
            <section>
                  <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Natureza das operações</label>
                            <select id="inputNatureza" class="form-control">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-row col-md-6">
                                <label for="">Qual é a quantidade de hangares que você deseja segurar?</label>
                                    <div class="col-md-4">
                                        <input type="number" name="hangar" class="form-control"  id="hangar"  required>
                                     </div>
                        </div>
                  </div>
                    <br>
                 <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Quando iniciou as operações?</label>
                            <input type="date" name="data" class="form-control"  id="data"  required>
                        </div>
                  </div>
                    <br>
                 <div class="row">
                        <div class="form-row col-md-6 ">
                            <label for="">Qual a quantidade de hangares que você opera?</label>
                              <div class="col-md-4">
                               <input type="number" name="hangar" class="form-control"  id="hangar"  required>
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
                         <div class="form-row col-md-2">
                                 <label for="CEP">CEP</label>
                                   <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                         </div>  
                         <div class="col-md-4">
                                 <label for="">Endereço</label>
                                    <input type="text" name="rua" id="rua" class="form-control" required>                         
                         </div>
                        <div class="col-md-2">
                                 <label for="">Complemento</label>
                                     <input type="text" name="complemento" id="complemento" class="form-control" required>
                        </div>  
                        <div class="col-md-1">
                                 <label for="">N°</label>
                                     <input type="text" name="numero" id="numero" class="form-control" required>
                        </div>   
                        <div class="col-md-2">
                                 <label for="">Bairro</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" required>
                        </div>                                   
                     </div> 
                 <br>
                        <div class="row">
                         <div class="col-md-4">
                                 <label for="">Cidade</label>
                                    <input type="text" name="cidade" id="cidade" class="form-control" required>                    
                         </div>
                         <div class="col-md-2">
                                  <label for="">Estado</label>
                                     <input type="text" name="uf" id="uf" class="form-control" required>
                         </div> 
                     </div>
                <br>
                         <div class="row">
                             <div class="col-md-4 ">
                                 <label for="">Realiza abastecimento de Aeronave?</label><br>
                                     <select id="inputAbastecimento" class="form-control ">
                                          <option>Sim</option>
                                          <option>Não</option>
                                    </select>
                             </div>                             
                             <div class="col-md-4 ">
                                 <label for="">Você é o responsável por esta atividade?</label><br>
                                     <select id="inputAtividade" class="form-control ">
                                             <option>Sim</option>
                                             <option>Não</option>
                                    </select>
                             </div>  
                             <div class="col-md-4 form-row">
                                  <label for="">Existem compressor(es) no hangar?</label><br>
                                      <select id="inputCompressor" class="form-control">
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
                     <br>
                       <div class="row">
                         <h4>Quais são as aeronaves hangariadas?</h3>
                                 <div class="form-row col-md-4">
                                      <label for="">Fabricante</label>
                                          <input id="fabricante" name="fabricante"  class="form-control">
                                 </div>  
                                 <div class="col-md-4">
                                      <label for="">Modelo</label>
                                          <input type="text" name="modelo" id="modelo" class="form-control" required>
                                </div>                           
                                 <div class="col-md-2">
                                     <label for="">Quantidade</label>
                                          <input type="text" name="quantidade" id="quantidade" class="form-control" required>
                                </div>  
                      </div>
                <br>
                     <div class="row">
                           <div class="form-row col-md-4">
                                 <label for="">Tipo de Construção</label>
                                    <input type="text" name="construcao" id="construcao" placeholder="Ex. (metálica, alvenaria..)" class="form-control" required>
                            </div>  
                          <div class="form-row col-md-4">
                              <label for="">Qual o valor médio das aeronaves?</label>
                                 <input type="text" name="valor" id="valor" class="form-control" required>
                         </div>  
                    </div>
                 <br>
                  <div class="row">
                         <div class="form-row col-md-4">
                             <label for="">Sistema de Proteção</label>
                                 <textarea cols="50" rows="3" maxlength="10" placeholder="Detalhe os sistemas de proteção a incêndio e
vigilância"></textarea>
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
                 <h3>Sinistros</h3>
                     <section>
                         <div class="row">
                              <div class="form-group">
                                  <label class="col-lg-10 control-label">Houve sinistro nos últimos 5 (cinco) anos?</label>
                                       <div class="col-lg-6">
                                           <label class="radio-inline">
                                           <input type="radio" name="radio"> Sim </label>
                                           <label class="radio-inline">
                                            <input type="radio" name="radio"> Nâo</label>
                                        </div>
                            </div>
                       </div>
                    <br>
                         <div class="row">
                             <div class="form-row col-md-4">
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
                                     <input type="text" name="auferida" id="auferida" placeholder="Valor R$" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                       <br>
                          <div class="row">
                               <div class="form-row col-md-6">
                                    <label for=""> Receita de hangaragem estimada nos últimos 12 (doze) meses:</label>
                                    <div class="col-md-5">
                                   <input type="text" name="estimada" id="estimada" placeholder="Valor R$" class="form-control" required>
                                 </div>
                                </div>
                         </div>
                     <br>
                          <div class="row">
                              <h4>Informe o valor segurado pretendido (limite máximo de indenização):</h4>
                              <div class="col-md-4 ">
                                   <label for="">Moeda</label><br>
                                      <select id="inputMoeda" class="form-control ">
                                            <option>USD</option>
                                             <option>BRL</option>
                                     </select>
                             </div>  
                             <div class="form-row col-md-4">
                                 <label for=""> Valor (R$)</label>
                                      <input type="text" name="valor" id="valor"  class="form-control" required>
                             </div>
                              <div class="form-row col-md-4">
                                   <label for=""> Franquia (R$)</label>
                                      <input type="text" name="franquia" id="franquia"  class="form-control" required>
                             </div>
                          </div>
                 </section>
                     <h3>Informações Pessoais</h3>
                          <section>
                            <div class="row">
                                  <div class="form-row col-md-4">
                                      <label for="">Nome completo</label>
                                         <input type="text" name="nome" class="form-control" id="nome"  required>
                                  </div>
                             <div class="form-row col-md-4">
                                  <label for="">E-mail</label>
                                     <input type="text" name="email" class="form-control" id="email"  required>
                              </div>
                          </div>
                     <br>
                          <div class="row">
                                <div class="form-row col-md-4">
                                     <label for="">CPF/CNPJ</label>
                                          <input type="text"  name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00 "id="cpf"  required>
                                 </div>
                                <div class="form-row col-md-4">
                                     <label for="">Telefone</label>
                                          <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required>
                                </div>
                                <div class="form-row col-md-4">
                                     <label for="">Celular</label>
                                         <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  required>
                                 </div>
                             </div>
                        <br>
                          <div class="row">
                               <div class="form-row col-md-4">
                                    <label for="CEP">CEP</label>
                                     <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                 <label for="">Bairro</label>
                                         <input type="text" name="bairro" id="bairro" class="form-control" required>
                            </div>
                        </div>
                      </div>
                       <div class="row">
                            <div class="form-row col-md-4">
                                <label for="">Complemento</label>
                                     <input type="text" name="complemento" class="form-control" id="complemento"  required>
                             </div>
                            <div class="form-row col-md-2">
                                 <label for="">N°</label>
                                     <input type="number" name="numero" class="form-control" id="numero"  required>
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