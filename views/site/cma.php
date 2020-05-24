<?php
$this->title = "SEGOP - Certificado Médito Aeronáutico (CMA)";
?>

    <div class="wizzard container">
        <h2>Solicitação do seguro: CMA</h2>
        <div id="example-basic">
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
                        <label for="">RG</label>
                        <input type="text" name="rg" class="form-control" placeholder="Ex.: 596875" id="rg" required="true">
                    </div>
                    <div>
                        <label for="">Orgão de emissão</label>
                        <input type="text" name="orgao_emissao" class="form-control" placeholder="Ex. SSP" id="orgao_emissao" required="true">
                    </div>
                    <div>
                        <label for="">Data de emissão</label>
                        <input type="text" id="data_emissao_rg" name="data_emissao_rg" class="form-control" placeholder="DD/MM/AAAA">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>    
                <br>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Data de Nascimento</label>
                        <input type="text" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="DD/MM/AAAA">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                    <div>
                        <label for="">CPF</label>
                        <input type="text"  name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" id="cpf"  required="true">
                    </div>
                    <div>
                        <label for="">Telefone</label>
                        <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required="true">
                    </div>
                    <div>
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
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Ex.: Goiânia" required="true">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Ex.: Setor Aeroporto" required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento" placeholder=""  required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">N°</label>
                        <input type="text" name="numero" class="form-control" id="numero" placeholder=""  required="true">
                    </div>
                </div>
            </section>

            <h3>Licenças e habilitações</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Agência Reguladora</label>
                        <input type="text" name="agencia_licenca" class="form-control" id="agencia_licenca" placeholder="Ex.: ANAC" required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Licença</label>
                        <input type="text" name="licenca" class="form-control" id="licenca"  required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Data de expedição</label>
                        <input type="text" id="data_expedicao_licenca" name="data_expedicao_licenca" class="form-control" placeholder="DD/MM/AAAA">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                    <!-- Botão de adicionar, o usuário poderá preencher mais de uma licença -->
                </div>
                <br>
                <div>
                    <div class="form-row col-md-4">
                        <label for="">Agência Reguladora</label>
                        <input type="text" name="agencia_habilitacao" class="form-control" id="agencia_habilitacao" required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Habilitações</label>
                        <input type="text" name="habilitacoes" class="form-control" id="habilitacoes" required="true">
                    </div>
                    <div>
                        <label for="">Total de horas voadas</label>
                        <input type="text" name="total_horas_voadas" class="form-control" id="total_horas_voadas" placeholder="Ex.: 1.550,00" required="true">
                        <!-- Adicionar máscara NN.NNN,NN -->
                    </div>
                    <!-- Botão de adicionar, o usuário poderá preencher mais de uma habilitação -->
                </div>
            </section>
            <h3>Experiências e treinamentos</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Horas voadas no último ano</label>
                        <input type="text" name="horas_voadas_ultimo_ano" class="form-control" id="horas_voadas_ultimo_ano" placeholder="Ex.: 700,00" required="true">
                    </div>
                    <br>
                    <div class="form-row col-md-4">
                        <label for="">Nome do treinamento</label>
                        <input type="text" name="nome_treinamento" class="form-control" id="nome_treinamento" placeholder="Ex.: IFR-A" required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Tipo do treinamento</label>
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
                    <div>
                        <div class="form-row col-md-4">
                            <label for="">Data de conclusão</label>
                            <input type="text" id="data_conclusao_curso" name="data_conclusao_curso" class="form-control" placeholder="DD/MM/AAAA">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        </div>
                        <!-- adicionar botão de mais, para que possa preencher mais de um curso -->
                    </div>
                </div>
            </section>
            <h3>Histórico de acidentes</h3>
            <section>
                <div class="form-group">
                    <label class="col-lg-6 control-label">Sofreu algum acidente/indicente nos últimos 5 anos?</label>
                    <div class="col-lg-4">
                        <label class="radio-inline">
                            <input type="radio" name="radio"> Sim </label>
                        <label class="radio-inline">
                            <input type="radio" name="radio"> Nâo</label>
                    </div>
                </div>
                <br><br>
                <!-- Se sim, abrir as opções a seguir -->
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Classificação da situação</label>
                        <select id="classificacao_situacao" class="form-control" required="true">
                            <option selected>Selecione..</option>
                            <option>Acidente</option>
                            <option>Incidente</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Marca da aeronave</label>
                        <input type="text" name="marca_aeronave" id="marca_aeronave" class="form-control" placeholder="Ex.: PP-PPP" required="true">
                        <!-- Incluir  a API da Embarque Tec -->
                    </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-6">
                        <label for="">Descreva em detalhes o ocorrido</label>
                        <input type="text" name="detalhes_ocorrido" id="detalhes_ocorrido" class="form-control" placeholder="Ex.: Descreva o máximo possível os detalhes do ocorrido" required="true">
                    </div>
                    <!-- incluir o botão de adicionar, o usuário poderá preencher mais de um ocorrido -->
                </div>
            </section>
            <h3>Operador atual</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Selecione o tipo de operação</label>
                        <select id="tipo_operacao" class="form-control" required="true">
                            <option>Geral/Executiva</option>
                            <option>Centro de Instrução</option>
                            <option>Agrícola</option>
                            <option>Táxi Aéreo</option>
                            <option>Linha Aérea</option>
                        </select>
                    </div>
                </div>
                <br>
                <!-- início das opções após selecionar a linha aérea -->
                <div class="row">
                    <div class="form-row col-md-6">
                        <label for="">Operador</label>
                        <input type="text" name="nome_operador" id="nome_operador" class="form-control" placeholder="Ex.: SETE Táxi Aéreo LTDA" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-4">
                        <
                    </div>
                </div>
                <!-- fim das opções após selecionar a linha aérea -->
                <!-- início das opções após selecionar qualquer outra opção, menos linha aérea -->
                <div>

                </div>
                <!-- fim das opções após selecionar qualquer outra opção, menos linha aérea -->
            </section>
            <h3>Beneficiários</h3>
            <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
            <h3>Enviar</h3>
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