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
                        <input type="number" name="rg" class="form-control" placeholder="Ex.: 596875" id="rg" required="true">
                    </div>
                    <div>
                        <label for="">Orgão de emissão</label>
                        <input type="text" name="orgao_emissao" class="form-control" placeholder="Ex. SSP" id="orgao_emissao" required="true">
                    </div>
                    <div>
                        <label for="">Data de emissão</label>
                        <input type="date" id="data_emissao_rg" name="data_emissao_rg" class="form-control" placeholder="DD/MM/AAAA">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                </div>    
                <br>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Data de Nascimento</label>
                        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="DD/MM/AAAA">
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
                        <input type="number" name="numero" class="form-control" id="numero" placeholder=""  required="true">
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
                            <input type="date" id="data_conclusao_curso" name="data_conclusao_curso" class="form-control" placeholder="DD/MM/AAAA">
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
                    <div class="form-row col-md-2">
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
                    <div class="form-row col-md-2">
                        <label for="">Quantas aeronaves esse operador possui?</label>
                        <input type="number" name="quantidade_aeronaves_operador" id="quantidade_aeronaves_operador" placeholder="Ex.: 17" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Qual a sua função a bordo?</label>
                        <select id="funcao_bordo" class="form-control" required="true">
                            <option>Comandante</option>
                            <option>Primeiro Oficial</option>
                            <option>Engenheiro(a) de voo</option>
                            <option>Mecânico(a)</option>
                            <option>Comissário(a)</option>
                    </div>
                </div>
                <!-- fim das opções após selecionar a linha aérea -->
                <!-- início das opções após selecionar qualquer outra opção, menos linha aérea -->
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Marca</label>
                        <input name="marca" id="marca" type="text" placeholder="Ex.: PP-PPP" required="true">
                    </div>
                    <div class="form-row col-md-6">
                        <label for="">Operador</label>
                        <input type="text" name="operador" id="operador" placeholder="Ex.: Brasil Vida Táxi Aéreo" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-6>
                        <label for="">Fabricante</label>
                        <input type="text" name="fabricante" id="fabricante" placeholder="Cessna" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Modelo</label>
                        <input type="text" name="modelo" id="modelo" placeholder="C172" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-2">
                        <label for="">Número de série</label>
                        <input type="text" name="numero_serie" id="numero_serie" placeholder="86987542" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">PMD</label>
                        <input type="text" name="pmd" id="pmd" placeholder="EX.: 4800 kg" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Ano de Fabricação</label>
                        <input type="number" name="ano_fabricacao" id="ano_fabricacao" placeholder="Ex.: 1978" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-2">
                        <label for="">Número de passageiros</label>
                        <input type="number" name="numero_passageiros" id="numero_passageiros" placeholder="Ex.: 5" required="true">
                    </div>
                    <div class="row">
                        <label for="">Número de tripulantes</label>
                        <input type="number" name="numero_tripulante" id="numero_tripulante" placeholder="Ex.: 2" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Número de motores</label>
                        <input type="number" name="numero_motores" id="numero_motores" placeholder="Ex.: 2" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-2">
                        <label for="">Tipo de Habilitação para Pilotos</label>
                        <input type="text" name="tipo_habilitacao" id="tipo_habilitacao" placeholder="Ex.: MNTE" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Horas totais de célula</label>
                        <input type="number" name="horas_totais_celula" id="horas_totais_celula" placeholder="Ex.: 5772" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Horas totais do(s) motor(es)</label>
                        <input type="number" name="horas_totais_motor" id="horas_totais_motor" placeholder="Ex.: 5772" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-2">
                        <label for="">Validade do IAM</label>
                        <input type="date" name="validade_iam" id="validade_iam" placeholder="EX.: DD/MM/AAAA" required="true"
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Horas totais nos últimos 12 meses</label>
                        <input type="number" name="horas_totais_doze_meses" id="horas_totais_doze_meses" placeholder="Ex.: 540" required="true"
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Horas estimadas para os próximos 12 meses</label>
                        <input type="number" name="horas_estimadas_doze_meses" id="horas_estimadas_doze_meses" placeholder="Ex.: 780" required="true">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-6">
                        <label for="">Oficina onde foi realizada a última revisão geral dos motores</label>
                        <input type="text" name="oficina_revisao_motores" id="oficina_revisao_motores" placeholder="AEROBAT Oficina de Manutenção Aeronáutica" required="true">
                    </div>
                    <br>
                    <div class="form-row col-md-6">
                        <label for="">Oficina onde foi realizada a última IAM</label>
                        <input type="text" name="oficina_ultima_iam" id="oficina_ultima_iam" placeholder="AEROBAT Oficina de Manutenção Aeronáutica" required="true">
                    </div>
                </div>
                <!-- fim das opções após selecionar qualquer outra opção, menos linha aérea -->
            </section>

            <h3>Beneficiários</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-2">
                        <label for="">Quantos serão os beneficiários?</label>
                        <select id="numero_beneficiarios" class="form-control" required="true">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                    </div>
                    <br>
                    <div class="form-row col-md-2">
                        <label for="">Data de nascimento</label>
                        <input type="date" name="data_nascimento_beneficiario" id="data_nascimento_benecificario" required="true">
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">Grau de parentesco</label>
                        <select id="grau_parentesco" class="form-control" required="true">
                            <option>1° Grau</option>
                            <option>2° Grau</option>
                            <option>3° Grau</option>
                            <option>Familiar distante</option>
                            <option>Amigo</option>
                            <option>Conjuge</option>
                    </div>
                </div>
            </section>

        <h3>Enviar</h3>
        <section>
            <center>
                <p>Em breve você receberá um e-mail com a nossa cotação!</p>

                <p>Obrigado e conte com a SEGOP</p>
                <!-- Adicionar uma âncora para que ao clicar em adicionar outro tripulante volte para a primeira tela do wizard -->
                <button type="button" class="btn btn-primary" href="/site/cma">Adicionar outro tripulante</button>

                <button type="button" class="btn btn-primary" href="/">Pagina Inicial</button>
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