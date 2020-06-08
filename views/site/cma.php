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
                        <input type="text" name="nome" class="form-control  " id="nome"  required="true" >
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">E-mail</label>
                        <div class="input-group">
                        <input type="text" name="email" class="form-control" id="email"  required="true">
                        <span class="input-group-addon"><i
                                                        class="fa fa-envelope fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="form-row col-md-3">
                        <label for="">Data de Nascimento</label>
                        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="DD/MM/AAAA">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">RG</label>
                        <input type="number" name="rg" class="form-control" placeholder="Ex.: 5968756987" id="rg" required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Orgão de emissão</label>
                        <input type="text" name="orgao_emissao" class="form-control" placeholder="Ex. SSP" id="orgao_emissao" required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Data de emissão</label>
                        <input type="date" id="data_emissao_rg" name="data_emissao_rg" class="form-control" placeholder="DD/MM/AAAA">
                    </div>
                </div>    
                <br>
                <div class="row">
                    <div class="form-row col-md-3">
                        <label for="">CPF</label>
                        <input type="text"  name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" id="cpf"  required="true">
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Telefone</label>
                        <div class="input-group">
                        <input type="text" name="telefone" class="form-control phone-mask" placeholder="Ex.: 0000-0000" id="telefone"  required="true">
                        <span class="input-group-addon"><i
                                                        class="fa fa-phone fa-fw"></i></span>
                    </div>
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Celular</label>
                        <div class="input-group">
                        <input type="text" name="celular" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="celular"  reqrequired="true">
                        <span class="input-group-addon"><i
                                                        class="fa fa-mobile fa-fw"></i></span>
                        </div>
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
                            <div class="input-group">
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Ex.: Goiânia" required="true">
                            <span class="input-group-addon"><i
                                                        class="fa fa-map-marker fa-fw"></i></span>
                            </div>
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
                    </br>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Endereço</label>
                            <div class="input-group">
                            <input type="text" name="endereco" id="endereco" class="form-control"  required="true">
                            <span class="input-group-addon"><i
                                                        class="fa fa-home fa-fw"></i></span>
                        </div>
                        </div>
                    </div>
                    <div class="form-row col-md-2">
                        <label for="">N°</label>
                        <input type="number" name="numero" class="form-control" id="numero" placeholder=""  required="true">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Ex.: Setor Aeroporto" required="true">
                        </div>
                    </div>
                        <div class="form-row col-md-3">
                        <label for="">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento" placeholder=""  required="true">
                    </div>
                  
                </div>
            </section>

            <h3>Licenças e habilitações</h3>
            <section >
                <div class="row">
                       <div class="form-row col-md-4" id="agencia_licenca">
                        <label for="">Agência Reguladora</label>
                        <input type="text" name="agencia_licenca" class="form-control" id="agencia_licenca" placeholder="Ex.: ANAC" required="true">
                         </div>
                 
                </div>
                <br>
                    <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Licença</label>
                        <input type="text" name="licenca" class="form-control" id="licenca"  required="true">
                        
                    </div>
                    <div class="form-row col-md-3">
                        <label for="">Data de expedição</label>
                        <input type="date" id="data_expedicao_licenca" name="data_expedicao_licenca" class="form-control" placeholder="DD/MM/AAAA">              
                </div>
              </div>
                <br>
                    <div class="row">
                    <div class="form-row col-md-4 " id="habilitacoes">
                        <label for="">Habilitação</label>
                        <div class="input-group">
                        <input type="text" name="habilitacoes" class="form-control" id="habilitacoes" required="true">
                        <span class="input-group-addon"><i
                                                        class="fa fa-plus fa-fw"></i></span>
                        </div>
                        </div>
                    
                    <div class="form-row col-md-3" id="total_horas_voadas">
                        <label for="">Total de horas voadas</label>
                        <input type="text" name="total_horas_voadas" class="form-control" id="total_horas_voadas" placeholder="Ex.: 1.550,00" required="true">
                        <!-- Adicionar máscara NN.NNN,NN -->
                        <script type="text/javascript">
                         $(document).ready(function(){
                            $('#total_horas_voadas').mask('NN.NNN,NN');
                                 });
                        </script>
                    </div>
                </div>
            
              <!-- Botão de adicionar, o usuário poderá preencher mais de uma habilitação -->    

                
            
            </section>

            <h3>Experiências e treinamentos</h3>
            <section>
            <div class="row">
            <div class="form-row col-md-3 pull-right">        
                <button type="submit" id="add" class="btn btn-primary  add-more-btn pull-right">Adicionar</i> </button>
                </div>
                </div>
                <div class="row">
                    <div class="form-row col-md-4" id="horas_voadas_ultimo_ano">
                        <label for="">Horas voadas no último ano</label>
                        <input type="text" name="horas_voadas_ultimo_ano" class="form-control" id="horas_voadas_ultimo_ano" placeholder="Ex.: 700,00" required="true">
                    </div>
                    
                    <div class="form-row col-md-4">
                        <label for="">Nome do treinamento</label>
                        <input type="text" name="nome_treinamento" class="form-control" id="nome_treinamento" placeholder="Ex.: IFR-A" required="true">
                    </div>
                    </div>
                    <br>
                    <div class="row">
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
                    
                        <div class="form-row col-md-4">
                            <label for="">Data de conclusão</label>
                            <input type="date" id="data_conclusao_curso" name="data_conclusao_curso" class="form-control" placeholder="DD/MM/AAAA">
                        </div>
                        <!-- adicionar botão de mais, para que possa preencher mais de um curso -->
                        </div>
            </section>

            <h3>Histórico de acidentes</h3>
            <section>
                <div class="row">
                <div class="form-row col-md-6">
                    <label>Sofreu algum acidente/indicente nos últimos 5 anos?</label>
                    <div class="col-md-5">
                    <select id="input_tipo_acidente" class="form-control" required="true">
                            <option selected>Selecione..</option>
                            <option value="sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>
                            </div>
                </div>
                </div>
                <script>
                   $(document).ready(function() {
                    $('#classificacao_situacao').hide();
                    $("#input_tipo_acidente").change(function() {
                        if(this.value == "sim") {
                        $('#classificacao_situacao').show();
                        } else {
                            $('#classificacao_situacao').hide();

                        }
                    });
                   }); 

                   $(document).ready(function() {
                       $('#marca_aeronave').hide();
                    $("#input_tipo_acidente").change(function() {
                        if(this.value == "sim") {
                        $('#marca_aeronave').show();
                        } else {
                            $('#marca_aeronave').hide();
                        }
                    });
                    });
                    $(document).ready(function() {
                     $('#detalhes_ocorridos').hide();
                      $("#input_tipo_acidente").change(function() {
                        if(this.value == "sim") {
                        $('#detalhes_ocorridos').show();
                        } else {
                            $('#detalhes_ocorridos').hide();
                        }
                      });
                    });
                  
                </script>
                <br>
                <!-- Se sim, abrir as opções a seguir -->
                <div class="row">
                    <div class="form-row col-md-4" id="classificacao_situacao">
                        <label for="">Classificação da situação</label>
                        <select id="classificacao_situacao" class="form-control" required="true">
                            <option selected>Selecione..</option>
                            <option>Acidente</option>
                            <option>Incidente</option>
                        </select>
                    </div>
                    <div class="form-row col-md-4" id="marca_aeronave">
                        <label for="">Marca da aeronave</label>
                        <input type="text" name="marca_aeronave" id="marca_aeronave" class="form-control" placeholder="Ex.: PP-PPP" required="true">
                        <!-- Incluir  a API da Embarque Tec -->
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-row col-md-6 " id="detalhes_ocorridos" >
                        <label for="">Descreva em detalhes o ocorrido</label>
                        <textarea cols="60" rows="10" maxlength="41" placeholder="Ex.: Descreva o máximo possível os detalhes do ocorrido" name="detalhes_ocorridos" id="detalhes_ocorridos" class="form_control" required="true"></textarea>
                       <button type="button" id="button" class="btn btn-primary" value="submit"><i class="fa fa-plus"></i></button>
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
                            <option value="outro">Geral/Executiva</option>
                            <option value="outro">Centro de Instrução</option>
                            <option value="outro">Agrícola</option>
                            <option value="outro">Táxi Aéreo</option>
                            <option value="linha_aerea">Linha Aérea</option>
                        </select>
                    </div>
                </div>
                <br>
                <!-- início das opções após selecionar a linha aérea -->
                <script>
                    $(document).ready(function() {
                    $('#nome_operador').hide();
                    $("#tipo_operacao").change(function() {
                        if(this.value == "linha_aerea") {
                        $('#nome_operador').show();
                        } else {
                            $('#nome_operador').hide();
                        }
                    });
                    });
                    $(document).ready(function() {
                        $('#quantidade_aeronaves_operador').hide();
                         $("#tipo_operacao").change(function() {
                        if(this.value == "linha_aerea") {
                        $('#quantidade_aeronaves_operador').show();
                        } else {
                            $('#quantidade_aeronaves_operador').hide();
                        }
                         });
                    });
                    $(document).ready(function() {
                        $('#funcao_bordo').hide();
                    $("#tipo_operacao").change(function() {
                        if(this.value == "linha_aerea") {
                        $('#funcao_bordo').show();
                        } else {
                            $('#funcao_bordo').hide();
                        }
                    });
                    });
                    
               </script>
                <div class="row">
                    <div class="form-row col-md-4" id="nome_operador">
                        <label for="">Operador</label>
                        <input type="text" name="nome_operador" id="nome_operador" class="form-control" placeholder="Ex.: Sete táxi aéreo LTDA" required="true">
                    </div>
                      <div class="form-row col-md-5" id="quantidade_aeronaves_operador">
                        <label for="">Quantas aeronaves esse operador possui?</label>
                        <input type="number" name="quantidade_aeronaves_operador" id="quantidade_aeronaves_operador" class="form-control" placeholder="Ex.: 17" required="true">
                     </div>
                     <div class="form-row col-md-3" id="funcao_bordo">
                        <label for="">Qual a sua função a bordo?</label>
                        <select id="funcao_bordo" class="form-control" required="true">
                            <option>Comandante</option>
                            <option>Primeiro Oficial</option>
                            <option>Engenheiro(a) de voo</option>
                            <option>Mecânico(a)</option>
                            <option>Comissário(a)</option>
                            </select>
                     </div>
                </div>
                <br>
                <!-- fim das opções após selecionar a linha aérea -->
                <!-- início das opções após selecionar qualquer outra opção, menos linha aérea -->
                <script>
                    $(document).ready(function() {
                        $('#marca_a').hide();
                         $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#marca_a').show();
                        } else {
                            $('#marca_a').hide();
                        }
                    });
                    });
                    $(document).ready(function() {
                        $('#operador_a').hide();
                         $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#operador_a').show();
                        } else {
                            $('#operador_a').hide();
                        }
                         });
                    });
                    $(document).ready(function() {
                        $('#fabricante').hide();
                       $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#fabricante').show();
                        } else {
                            $('#fabricante').hide();
                        }
                       });
                    });
                    $(document).ready(function() {
                        $('#modelo').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#modelo').show();
                        } else {
                            $('#modelo').hide();
                        }
                        });
                    });
                    $(document).ready(function(){
                        $('#numero_serie').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#numero_serie').show();
                        } else {
                            $('#numero_serie').hide();
                        }
                    });
                    });
                    $(document).ready(function() {
                        $('#pmd').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                         $('#pmd').show();
                        } else {
                            $('#pmd').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#ano_fabricacao').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#ano_fabricacao').show();
                        } else {
                            $('#ano_fabricacao').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#numero_passageiros').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#numero_passageiros').show();
                        } else {
                            $('#numero_passageiros').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#numero_tripulante').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#numero_tripulante').show();
                        } else {
                            $('#numero_tripulante').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#numero_motores').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#numero_motores').show();
                        } else {
                            $('#numero_motores').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#tipo_habilitacao').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#tipo_habilitacao').show();
                        } else {
                            $('#tipo_habilitacao').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#horas_totais_celula').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#horas_totais_celula').show();
                        } else {
                            $('#horas_totais_celula').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#horas_totais_motor').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#horas_totais_motor').show();
                        } else {
                            $('#horas_totais_motor').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#validade_iam').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#validade_iam').show();
                        } else {
                            $('#validade_iam').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#horas_totais_doze_meses').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#horas_totais_doze_meses').show();
                        } else {
                            $('#horas_totais_doze_meses').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#horas_estimadas_doze_meses').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#horas_estimadas_doze_meses').show();
                        } else {
                            $('#horas_estimadas_doze_meses').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#oficina_revisao_motores').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#oficina_revisao_motores').show();
                        } else {
                            $('#oficina_revisao_motores').hide();
                        }
                        });
                    });
                    $(document).ready(function() {
                        $('#oficina_ultima_iam').hide();
                        $("#tipo_operacao").change(function() {
                        if(this.value == "outro") {
                        $('#oficina_ultima_iam').show();
                        } else {
                            $('#oficina_ultima_iam').hide();
                        }
                        });
                    });
               </script>
                 <div class="row">
                    <div class="form-row col-md-2" id="marca_a">
                        <label for="">Marca</label>
                        <input type="text" name="marca_a" id="marca_a" class="form-control" placeholder="Ex.: PP-PPP" required="true">
                    </div>
                    
                    <div class="form-row col-md-3" id="operador_a">
                        <label for="">Operador</label>
                        <input type="text" name="operador_a" id="operador_a" class="form-control" placeholder="Ex.: Brasil vida táxi aéreo" required="true">
                    </div>
                    <div class="form-row col-md-2" id="fabricante">
                        <label for="">Fabricante</label>
                        <input type="text" name="fabricante" id="fabricante" class="form-control" placeholder="Ex.: Cessna" required="true">
                    </div>
                    <div class="form-row col-md-2" id="modelo">
                        <label for="">Modelo</label>
                        <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Ex.: C172" required="true">
                    </div>
                     <div class="form-row col-md-3" id="numero_serie">
                        <label for="">Número de série</label>
                        <input type="text" name="numero_serie" id="numero_serie" class="form-control" placeholder="Ex.: 86987542" required="true">
                    </div>
                    </div>
                    </br>
                    <div class="row">
                    <div class="form-row col-md-2" id="pmd">
                        <label for="">PMD</label>
                        <input type="text" name="pmd" id="pmd" class="form-control" placeholder="Ex.: 4800 kg" required="true">
                    </div>

                    <div class="form-row col-md-2" id="ano_fabricacao">
                        <label for="">Ano de Fabricação</label>
                        <input type="number" name="ano_fabricacao" id="ano_fabricacao" class="form-control" placeholder="Ex.: 1978" required="true">
                    </div>
                    <div class="form-row col-md-3" id="numero_passageiros">
                        <label for="">Número de passageiros</label>
                        <input type="number" name="numero_passageiros" id="numero_passageiros" class="form-control" placeholder="Ex.: 5" required="true">
                    </div>
                    <div class="form-row col-md-3" id="numero_tripulante">
                        <label for="">Número de tripulantes</label>
                        <input type="number" name="numero_tripulante" id="numero_tripulante" class="form-control" placeholder="Ex.: 2" required="true">
                        </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="form-row col-md-3" id="numero_motores">
                        <label for="">Número de motores</label>
                        <input type="number" name="numero_motores" id="numero_motores" class="form-control" placeholder="Ex.: 2" required="true">
                    </div>
                    <div class="form-row col-md-4" id="tipo_habilitacao">
                        <label for="">Tipo de Habilitação para Pilotos</label>
                        <input type="text" name="tipo_habilitacao" id="tipo_habilitacao" class="form-control" placeholder="Ex.: MNTE" required="true">
                    </div>
                    <div class="form-row col-md-3" id="horas_totais_celula">
                        <label for="">Horas totais de célula</label>
                        <input type="number" name="horas_totais_celula" id="horas_totais_celula" class="form-control" placeholder="Ex.: 5772" required="true">
                    </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="form-row col-md-3" id="horas_totais_motor">
                        <label for="">Horas totais do(s) motor(es)</label>
                        <input type="number" name="horas_totais_motor" id="horas_totais_motor" class="form-control" placeholder="Ex.: 5772" required="true">
                    </div>
                    <div class="form-row col-md-3" id="validade_iam">
                        <label for="">Validade do IAM</label>
                        <input type="date" name="validade_iam" id="validade_iam" class="form-control" placeholder="EX.: DD/MM/AAAA" required="true">
                    </div>
                    <div class="form-row col-md-4" id="horas_totais_doze_meses">
                        <label for="">Horas totais nos últimos 12 meses</label>
                        <input type="number" name="horas_totais_doze_meses" class="form-control" id="horas_totais_doze_meses" placeholder="Ex.: 540" required="true">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="form-row col-md-5" id="horas_estimadas_doze_meses">
                        <label for="">Horas estimadas para os próximos 12 meses</label>
                        <input type="number" name="horas_estimadas_doze_meses" class="form-control" id="horas_estimadas_doze_meses" class="form-crontol" placeholder="Ex.: 780" required="true">
                    </div>
                    <div class="form-row col-md-6" id="oficina_revisao_motores">
                        <label for="">Oficina onde foi realizada a última revisão geral dos motores</label>
                        <input type="text" name="oficina_revisao_motores" class="form-control" id="oficina_revisao_motores" placeholder="AEROBAT Oficina de Manutenção Aeronáutica" required="true">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="form-row col-md-5" id="oficina_ultima_iam"> 
                        <label for="">Oficina onde foi realizada a última IAM</label>
                        <input type="text" name="oficina_ultima_iam" class="form-control" id="oficina_ultima_iam" placeholder="AEROBAT Oficina de Manutenção Aeronáutica" required="true">
                    </div>
                </div>
                <!-- fim das opções após selecionar qualquer outra opção, menos linha aérea -->
            </section>

            <h3>Beneficiários</h3>
            <section>
                <div class="row">
                    <div class="form-row col-md-4">
                        <label for="">Quantos serão os beneficiários?</label>
                        <select id="numero_beneficiarios" class="form-control" required="true">
                            <option>Selecionar</option>
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
                            </select>
                    </div>
                    
                    <div class="form-row col-md-4">
                        <label for="">Data de nascimento</label>
                        <input type="date" name="data_nascimento_beneficiario" id="data_nascimento_benecificario" class="form-control" required="true">
                    </div>
                    <div class="form-row col-md-4">
                        <label for="">Grau de parentesco</label>
                        <select id="grau_parentesco" class="form-control" required="true">
                            <option>Selecionar</option>
                            <option>1° Grau</option>
                            <option>2° Grau</option>
                            <option>3° Grau</option>
                            <option>Familiar distante</option>
                            <option>Amigo</option>
                            <option>Conjuge</option>
                            </select>
                    </div>
                </div>
            </section>

        <h3>Enviar</h3>
        <section>
            <center>
            <div class="jumbotron">

                <p>Em breve você receberá um e-mail com a nossa cotação!</p>

                <p>Obrigado e conte com a SEGOP</p>
                <!-- Adicionar uma âncora para que ao clicar em adicionar outro tripulante volte para a primeira tela do wizard -->
                <button type="button" onclick="window.location='cma';" value="click here" class="btn btn-primary">Adicionar outro tripulante</button>

                <button type="button" onclick="window.location='/';" value="click here" class="btn btn-primary">Pagina Inicial</button>
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


