<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="load-full-screen">
<?php $this->beginBody() ?>
<section class="navbar-fixed-top">
    <div class="row transparent-menu-top">
        <div class="container clear-padding">
            <div class="navbar-contact">
                <div class="col-md-7 col-sm-6 clear-padding">
                    <a href="https://www.facebook.com/Segop-Corretora-de-Seguros-da-Avia%C3%A7%C3%A3o-107455724279944" class="transition-effect"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/segopseguros/" class="transition-effect"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/segopseguros" class="transition-effect"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="col-md-5 col-sm-6 clear-padding ">
                    <div class="col-md-12 col-xs-7 clear-padding pull-right">
                        <div class="pull-right">
                            <a href="#" class="transition-effect"><i class="fa fa-phone"></i> +55 62 3317-4712</a>
                            <a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i> comercial@segop.com.br</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row transparent-menu">
        <div class="container clear-padding">
            <!-- BEGIN: HEADER -->
            <div class="navbar-wrapper">
                <div class="navbar navbar-default" role="navigation">
                    <!-- BEGIN: NAV-CONTAINER -->
                    <div class="nav-container">
                        <div class="navbar-header">
                            <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- BEGIN: LOGO -->
                            <a class="navbar-brand logo" href="/">SEGOP</a>
                        </div>

                        <!-- BEGIN: NAVIGATION -->
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="/">INÍCIO</a>
                                </li>
                                <li>
                                    <a href="/#segv">SEGURO VIAGEM</a>
                                </li>
                                <li>
                                    <a href="/#ms">MAIS SEGUROS</a>
                                </li>
                                <li>
                                    <a href="https://www.embarquetec.com.br/">SERVIÇOS AERONÁUTICOS</a>
                                </li>
                                <li>
                                    <a href="/#about">SOBRE</a>
                                </li>
                                <li>
                                    <a href="/#contato">CONTATO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $content ?>
<section id="footer">
    <footer>
        <div class="row main-footer-sub">
            <div class="container clear-padding">
                <div class="col-md-7 col-sm-7">
                    <form >
                        <label>INSCREVA-SE EM NOSSA NEWSLETTER</label>
                        <div class="clearfix"></div>
                        <div class="col-md-9 col-sm-8 col-xs-6 clear-padding">
                            <input class="form-control" type="email" required placeholder="Digite o seu Email" name="email">
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 clear-padding">
                            <button type="submit"><i class="fa fa-paper-plane"></i>INSCREVA-SE</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="social-media pull-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer row">
            <div class="container clear-padding">
                <div class="col-md-3 col-sm-6 about-box">
                    <h3>SEGOP</h3>
                    <p>Corretora de seguros, desenvolvidas por especialistas em aviação, pensando em comodidade, agilidade e inovação no processo de obtenção de apólices.</p>
                    <a href="/#about">SAIBA MAIS</a>
                </div>
                <div class="col-md-3 col-sm-6 links">
                    <h4>Seguradoras parceiras</h4>
                    <ul>
                        <li><a href="#">Travel ACE</a></li>
                        <li><a href="#">Sul América</a></li>
                        <li><a href="#">Awesome Amsterdam</a></li>
                        <li><a href="#">Wild Africa</a></li>
                        <li><a href="#">Beach Goa</a></li>
                        <li><a href="#">Casino Los Vages</a></li>
                        <li><a href="#">Romantic France</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 links">
                    <h4>Nossos serviços</h4>
                    <ul>
                        <li><a href="/#segv">Seguro viagem</a></li>
                        <li><a href="/site/reta">Seguro RETA</a></li>
                        <li><a href="/site/casco">Seguro CASCO</a></li>
                        <li><a href="/site/rc">Seguro RC Hangar</a></li>
                        <li><a href="/site/cma">Seguro do CMA</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 contact-box">
                    <h4>Contact Us</h4>
                    <p><i class="fa fa-home"></i> Street #156 Burbank, Studio City Hollywood, California USA</p>
                    <p><i class="fa fa-phone"></i> +91 1234567890</p>
                    <p><i class="fa fa-envelope-o"></i> support@domain.com</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 text-center we-accept">
                    <h4>ACEITAMOS</h4>
                    <ul>
                        <li><img src="/images/mastercard.png" alt="cruise"></li>
                        <li><img src="/images/visa.png" alt="cruise"></li>
                        <li><img src="/images/american-express.png" alt="cruise"></li>
                        <li><img src="/images/mastercard.png" alt="cruise"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-footer-nav row">
            <div class="container clear-padding">
                <div class="col-md-12 col-sm-12">
                    <p>Segop Corretora de Seguros Aeronáuticos (c) 2020. Todos os direitos reservados. Desenvolvido por Embarque Tec Sistemas e serviços para aviação.</p>
                </div>
                <div class="go-up">
                    <a href="#"><i class="fa fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164319672-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-164319672-1');
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
