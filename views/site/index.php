<?php

/* @var $this yii\web\View */

$this->title = 'SEGOP';
?>
    <section id="segv">
        <div class="row full-width-search">
            <div class="container clear-padding">
                <div class="col-md-8 search-section" style="margin-top: 125px;">
                    <div role="tabpanel">
                        <!-- BEGIN: CATEGORY TAB -->
                        <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
                            <li role="presentation" class="active text-center">
                                <a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
                                    <i class="fa fa-plane"></i>
                                    <span>SEGURO VIAGEM</SPAN>
                                </a>
                            </li>
                        </ul>
                        <!-- END: CATEGORY TAB -->

                        <!-- BEGIN: TAB PANELS -->
                        <div class="tab-content">
                            <!-- BEGIN: FLIGHT SEARCH -->
                            <div role="tabpanel" class="tab-pane active" id="flight">
                                <form>
                                    <div class="col-md-12 product-search-title">Faça seu seguro de viagem com a gente!
                                    </div>
                                    <div class="col-md-12 search-col-padding">
                                        <label class="radio-inline">
                                            <input type="radio" id="inlineRadio1" value="1" name="seguro_viagem"> Seguro
                                            viagem
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="assistencia_viajante" id="inlineRadio2"
                                                   value="Round Trip"> Assistência ao viajante
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Origem</label>
                                        <div class="input-group">
                                            <input type="text" name="origem" class="form-control" required
                                                   placeholder="Ex. Goiânia">
                                            <span class="input-group-addon"><i
                                                        class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Destino</label>
                                        <div class="input-group">
                                            <input type="text" name="destino" class="form-control" required
                                                   placeholder="Ex. Porto Alegre">
                                            <span class="input-group-addon"><i
                                                        class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Ida</label>
                                        <div class="input-group">
                                            <input type="text" id="departure_date" name="ida" class="form-control"
                                                   placeholder="DD/MM/AAAA">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Volta</label>
                                        <div class="input-group">
                                            <input type="text" id="volta" class="form-control" name="return_date"
                                                   placeholder="DD/MM/AAAA">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Adultos</label><br>
                                        <input id="adult_count" name="adultos" value="1"
                                               class="form-control quantity-padding">
                                    </div>
                                    <div class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Crianças</label><br>
                                        <input type="text" id="child_count" name="criancas" value="1"
                                               class="form-control quantity-padding">
                                    </div>
                                    <div class="col-md-12 col-sm-12 search-col-padding">
                                        <label>Nome</label>
                                        <input type="email" id="nome" class="form-control" name="nome"
                                               placeholder="Ex. Fulano">
                                    </div>
                                    <div class="col-md-6 col-sm-12 search-col-padding">
                                        <label>Telefone</label>
                                        <input type="text" id="telefone" class="form-control" name="telefone"
                                               placeholder="Ex. Fulano">
                                    </div>
                                    <div class="col-md-6 col-sm-12 search-col-padding">
                                        <label>E-mail</label>
                                        <input type="email" id="email" class="form-control" name="email"
                                               placeholder="Ex. Fulano">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="col-md-12 search-col-padding">
                                        <button type="submit" class="search-button btn transition-effect">Buscar
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-slider">
                    <div class="owl-carousel col-md-4 text-right" id="offer1">
                        <div class="item">
                            <h3>Facilidade em voar seguro</h3>
                            <p>Sua corretora de seguros para aviação</p>
                        </div>
                        <div class="item">
                            <h3>Decole Seguro</h3>
                            <p>Coberturas para você, sua aeronave e seu negócio</p>
                        </div>
                        <div class="item">
                            <h3>Seus passageiros cobertos pela
                                maior seguradora da América Latina</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
// Resultado de planos na API
?>

    <section id="recent-blog">
        <div class="row top-offer">
            <div class="container">
                <div class="section-title text-center">
                    <h2>SEGURO VIAGEM</h2>
                </div>
                <div class="owl-carousel" id="post-list">
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>NOME DO PRÊMIO </h5>
                                <p> Subtítulo</p>
                            </div>
                            <div class="post-desc">
                                <p>
                                    Nome da Cobertura <br>
                                    Aceitar termos e condições <br>
                                    Viaje Seguro em um clique <br>
                                    Valor $00.000,00 <br>
                                    <br><br>
                                    <a href="#" class="">Veja todas as coberturas</a>

                                </p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-12 col-sm-12 col-xs-12 clear-padding post-alt">
                                    <h5>R$ 100,00</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 clear-padding">
                                    <a href="#" class="text-center">Viaje Seguro em um clique</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="how-it-work">
        <div class="row work-row">
            <div class="container">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2> Voe com SEGOP</h2>
                        <h4 class=" ">Seus passageiros cobertos pela
                            maior seguradora da América Latina</h4>
                        <div class="space"></div>
                        <p>
                            - Ofereça novos produtos; <br>
                            - Capture novos consumidores para aviação
                            executiva;<br>
                            - Desenvolva novos canais e estratégia de
                            venda; <br>
                            - Mapei a eslasticidade de demanda com um
                            novo preço de final para o produto; <br>
                            - Aumente os resultados da sua empresa!
                        </p>
                    </div>
                <div></div>
                <div class="text-center">
                    <button href="https://www.embarquetec.com.br/sistema-integrado-de-seguros-aeronauticos/">Saiba mais</button>
                    <button href="https://apihomologacao.travelace.com.br/index.html#/">Para desenvolvedores</button>
                </div>
                </div>
                <div class="col-md-6">
                    <img src="/images/safe.jpg" alt="" 2w>
                </div>

            </div>
        </div>
    </section>

    <section id="ms">
        <div class="row choose-us-row">
            <div class="container clear-padding">
                <div class="light-section-title text-center">
                    <br></br>
                    <br></br>
                    <h2>Decole Seguro </h2>
                    <h4>Coberturas para você, sua aeronave e negócio em aviação</h4>
                    <div class="space"></div>

                </div>
                    <br></br>
                <div class="col-md-3 col-sm-3">
                    <div class="choose-us-item text-center">
                        <h4>RETA</h4>
                        <p>Garante proteção para passageiros, tripulantes e suas bagagens, bem como danos causados pela aeronave segurada a pessoas e bens de terceiros no solo.</p>
                        <a href="/site/reta">ORÇAMENTO</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="choose-us-item text-center">
                        <h4>CASCO</h4>
                        <p>Proteção para a fuselagem de sua aeronave, garantindo cobertura para dados causados por incidentes e acidentes.</p>
                        <a href="/site/casco">ORÇAMENTO</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="choose-us-item text-center">
                        <h4>RC Hangar</h4>
                        <p>Cobre a responsabilidade civil para a hangaragem e serviços aeroportuários durante acidentes, incidentes e fatores meteorológicos.</p>
                        <a href="/site/rc">ORÇAMENTO</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="choose-us-item text-center">
                        <h4>Perda de CMA</h4>
                        <p>Sem preocupações com o final de sua carreira como tripulante, por questões de saúde crônica ou por acidentes de trabalhos.</p>
                        <a href="/site/cma">ORÇAMENTO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="about">
        <div class="row work-row">
            <div class="container">
                <div class="col-md-6">
                    <div class="section-title">
                        <br></br>
                        <br></br>
                        <h2> Sobre</h2>
                        <h4 class=" ">Seus passageiros cobertos pela
                            maior seguradora da América Latina</h4>
                        <div class="space"></div>
                        <p>
                            - Ofereça novos produtos; <br>
                            - Capture novos consumidores para aviação
                            executiva;<br>
                            - Desenvolva novos canais e estratégia de
                            venda; <br>
                            - Mapei a eslasticidade de demanda com um
                            novo preço de final para o produto; <br>
                            - Aumente os resultados da sua empresa!
                        </p>
                        <div class="clearfix"></div>
                            <div class="col-md-12 text-center we-accept">
                                <h4>SEGURADORAS PARCEIRAS</h4>
                                <ul>
                                    <li><img src="/images/mastercard.png" alt="cruise"></li>
                                    <li><img src="/images/visa.png" alt="cruise"></li>
                                    <li><img src="/images/american-express.png" alt="cruise"></li>
                                    <li><img src="/images/mastercard.png" alt="cruise"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/executivo.jpg" alt="" 2w>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contato" style="background-color: #444444">
        <div class="row">
            <div class="container clear-padding">
                <div class="col-md-12 col-sm-12 contact-form">
                    <div class="section-title">
                        <br></br>
                        <br></br>
                        <h2 style="color: #fff">ENVIE SUA MENSAGEM</h2>
                        <form>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" name="name" required class="form-control" placeholder="Nome">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" name="email" required class="form-control" placeholder="E-mail">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <input type="text" name="message-title" required class="form-control"
                                       placeholder="Título">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default submit-review">ENVIAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php


$this->registerJs("
    jQuery(function($){
        \"use strict\";
        $.supersized({

            //Functionality
            slideshow               :   1,		//Slideshow on/off
            autoplay				:	1,		//Slideshow starts playing automatically
            start_slide             :   1,		//Start slide (0 is random)
            random					: 	0,		//Randomize slide order (Ignores start slide)
            slide_interval          :   10000,	//Length between transitions
            transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	500,	//Speed of transition
            new_window				:	1,		//Image links open in new window/tab
            pause_hover             :   0,		//Pause slideshow on hover
            keyboard_nav            :   0,		//Keyboard navigation on/off
            performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect			:	1,		//Disables image dragging and right click with Javascript

            //Size & Position
            min_width		        :   0,		//Min width allowed (in pixels)
            min_height		        :   0,		//Min height allowed (in pixels)
            vertical_center         :   1,		//Vertically center background
            horizontal_center       :   1,		//Horizontally center background
            fit_portrait         	:   1,		//Portrait images will not exceed browser height
            fit_landscape			:   0,		//Landscape images will not exceed browser width

            //Components
            navigation              :   1,		//Slideshow controls on/off
            thumbnail_navigation    :   1,		//Thumbnail navigation
            slide_counter           :   1,		//Display slide numbers
            slide_captions          :   1,		//Slide caption (Pull from \"title\" in slides array)
            slides 					:  	[		//Slideshow Images
                {image : '/images/1.jpg', title : 'Slide 1'},
                {image : '/images/2.jpg', title : 'Slide 2'},
                {image : '/images/3.jpg', title : 'Slide 3'},
            ]

        });
    });
");
?>