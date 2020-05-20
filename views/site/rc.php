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
                        <div class="form-row col-md-4">
                            <label for="">Numero hangares que deseja segurar?</label>
                            <input type="number" name="hangar" class="form-control"  id="hangar"  required>
                        </div>
            </div>
                    <br>
            <div class="row">
                        <div class="col-md-4 ">
                            <label for="">Quando iniciou as operações</label>
                            <input type="date" name="data" class="form-control"  id="data"  required>
                        </div>
            </div>
                    <br>
            <div class="row">
                        <div class="col-md-4 ">
                        <label for="">Qual a quantidade de hangares que opera?</label>
                            <input type="number" name="hangar" class="form-control"  id="hangar"  required>
                        </div>
            </section>

            <h3>Informações do hangar</h3>
            <section>          
                    <div class="form-group">
                        <label class="col-lg-6 control-label">Este é o Hangar que deseja segurar?</label>
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
                                     <div class="form-group">
                                        <label for="">Endereço</label>
                                        <input type="text" name="rua" id="rua" class="form-control" required>
                                    </div>                           
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
                                     <label for="">Realiza abastecimento de aeronave?</label><br>
                                            <select id="inputAbastecimento" class="form-control ">
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                </div>  
                           
                                <div class="col-md-4 ">
                                            <label for="">Você é o responsável por esta atividade?</label><br>
                                                 <select id="inputAbastecimento" class="form-control ">
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
                <h4>Capacidade</h3>
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

            <h3>Pager</h3>
            <section>
                    <div class="row">
                         <h4>Quais são as aeronaves hangariadas?</h3>
                                  <div class="form-row col-md-4">
                                    <label for="">Fabricante</label>
                                          <input id="fabricante" name="fabricante"  class="form-control">
                                 </div>  
                                 <div class="col-md-4">
                                        <div class="form-group">
                                              <label for="">Modelo</label>
                                                    <input type="text" name="modelo" id="modelo" class="form-control" required>
                                        </div>                           
                                      </div>
                                 <div class="col-md-2">
                                            <label for="">Quantidade</label>
                                                 <input type="text" name="quantidade" id="quantidade" class="form-control" required>
                                    </div>  
                        </div>
                    <div class="row">
                           <div class="form-row col-md-4">
                                     <label for="">Tipo de Construção</label>
                                            <input type="text" name="construcao" id="construcao" placeholder="Ex. (metálica, alvenaria..)" class="form-control" required>
                            </div>  
                           <div class="form-row col-md-4">
                                    <label for="CEP">Valor médio das aeronaves</label>
                                             <input type="text" name="valor" id="valor" class="form-control" required>
                             </div>  
                    </div>
                             <br><br>
                 <div class="row">
                         <div class="form-row col-md-4">
                                 <label for="">Sistema de Proteção</label>
                                         <textarea cols="50" rows="3" maxlength="10" placeholder="Detalhe os sistemas de proteção a incêndio e
vigilância"></textarea>
                </div>
                </div>

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