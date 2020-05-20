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
                    <div class="row">
                            <div class="col-md-4 ">
                                <label for="">Esse é o hangar que deseja segurar?</label>
                                    <label required="" class="radio-inline" for="radios-0" >
                                         <input name="sim" id="sim"  type="radio" required>Sim</label> 
                                           <label required class="radio-inline" for="radios-0" >
                                                 <input name="nao" id="nao"  type="radio" required>Não</label> 
                            </div>
                  </div>      
            <br>
                     <div class="row">
                              <div class="form-row col-md-4">
                                    <label for="CEP">CEP</label>
                                          <input id="cep" name="cep"  class="form-control cep-mask" placeholder="Ex.: 00000-000" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                 </div>  
                             <div class="col-md-4 ">
                                    <label for="">Realiza abastecimento de aeronave?</label><br>
                                         <select id="inputAbastecimento" class="form-control">
                                              <option>Sim</option>
                                             <option>Não</option>
                                         </select>
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