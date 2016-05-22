<?php
require 'admin/connections/db.php';

// Información de contacto
include_once("admin/models/ContactModel.php");
$modelContact = new ContactModel();
$empresa = $modelContact->getDataEmpresa();

include_once("admin/models/TradingModel.php");
include_once("admin/models/CategoryModel.php");
include_once("admin/models/PermisosModel.php");

$modelT = new TradingModel();
$tradings = $modelT->getTradingList('home');

$modelC = new CategoryModel();

$modelP = new PermisosModel();

include('include/up-header.php');
?>

<body>

    <?php include('include/loader.php'); ?>

	<div id="wrapper">

        <?php include('include/topbar.php'); ?>

        <?php include('include/header.php'); ?>

        <section class="white section nopaddingbottom" style="margin: 0px 0px 10px 0px; padding:0px">
            <img src="images/cintillo.jpg" width="100%">
        </section>

        <section class="slider-section">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="images/fx-logos-slide-1.jpg"  data-saveperformance="off"  data-title="Slide">
                            <img src="images/fx-logos-slide-1.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme trans-html"
                                 key="bienvenidosAfxLogos"
                                 data-x="center"
                                 data-y="center"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><strong>BIENVENIDOS</strong> a FX Logos
                            </div>
                            <div class="tp-caption slider_layer_01_c text-center lft tp-resizeme trans-html"
                                 key="siLaGranMayoria"
                                 data-x="540"
                                 data-y="30"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family: 'Atlantic Cruise', sans-serif; color:white; text-align: left; ">si la gran mayoría... HABLA DE MERCADO<br>en FORMAS, INDICADORES y sus IDEAS DERIVADAS
                            </div>
                            <div class="tp-caption slider_layer_01_c text-center lft tp-resizeme"
                                 data-x="540"
                                 data-y="250"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family: 'Atlantic Cruise', sans-serif; color:white; text-align: left; ">ESTÁ REALMENTE HACIENDO<br>ALGO DIFERENTE?
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="images/fx-logos-slide-2.jpg"  data-saveperformance="off"  data-title="Slide">
                            <img src="images/fx-logos-slide-2.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_01_b text-center lft tp-resizeme"
                                 data-x="140"
                                 data-y="center"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family: 'Atlantic Cruise', sans-serif; color:white; text-align: left; ">
                                <p>Psicología del</p>
                                <p><strong>TRADING</strong></p>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="images/fx-logos-slide-3.jpg"  data-saveperformance="off"  data-title="Slide">
                            <img src="images/fx-logos-slide-3.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_01_b text-center lft tp-resizeme"
                                 data-x="500"
                                 data-y="center"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family: 'Atlantic Cruise', sans-serif; color:white; text-align: right;">ENTRENAMIENTO<br><strong>AVANZADO</strong>
                            </div>
                        </li>

                        <!--<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="5000">

                            <img src="images/dummy.png"  alt="video_business"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                 data-x="0"
                                 data-y="0"
                                 data-speed="1000"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="1500"
                                 data-endeasing="Power4.easeIn"
                                 data-autoplay="true"
                                 data-autoplayonlyfirsttime="false"
                                 data-nextslideatend="true"
                                 data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on"
                                 style="z-index: 2"><video id="revvideo" class="video-js vjs-default-skin" preload="none"
                                                           poster='images/dummy.png' data-setup="{}">
                                    <source src='upload/video.mp4' type='video/mp4' />
                                    <source src='upload/video.webm' type='video/webm' />
                                    <source src='upload/video.ogv' type='video/ogg' />
                                </video>
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                 data-x="center"
                                 data-y="220"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-html5"></i> SUPPORTED <strong>HTML5 VIDEO</strong> SLIDER
                            </div>
                            <div class="tp-caption slider_layer_02 lightcolor text-center lft tp-resizeme"
                                 data-x="center"
                                 data-y="320"
                                 data-speed="1000"
                                 data-start="800"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">The LearnPLUS Compatible With Revolution Slider<br> You Can Use Your Own Video Slider..
                            </div>
                            <div class="tp-caption text-center lft tp-resizeme"
                                 data-x="center"
                                 data-y="390"
                                 data-speed="1000"
                                 data-start="800"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-default">Start Learning</a> <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
        </section>


        <!--<section class="grey section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Acerca de Nosotros</h4>
                            <div class="col-md-12">
                                <p>FX es por FOREX y LOGOS es porque el término logos es uno de las más importantes en la actitud racional ante el mundo. Puede traducirse como pensamiento, razón, habla, discurso, concepto, palabra, conocimiento; pero el término castellano más fiel es tal vez el término RAZÓN. Así la biología es el explicar o dar razón de los seres vivos, la teología el explicar o dar razón de Dios, la antropología el explicar o dar razón del hombre.</p>
                                <p>Hay una breve frase que muchas historias de la filosofía utilizan para resumir las implicaciones de la aparición de la filosofía: la filosofía es el paso del mito al logos. Con esta frase se quiere indicar que los primeros filósofos aceptaron estos dos principios:</p>
                                    <p>el mundo es racional, en el mundo hay un logos;</p>
                                    <p>nosotros disponemos de un logos o razón, logos que debemos emplear para el conocimiento de la realidad y la dirección de nuestra conducta.</p>
                                <h3 >Por eso nosotros hablamos de la LOGICA del Trading</h3>
                                <p>Hay una razón por la que usted pierde, hay una razón por la que usted esta domesticado, hay una razón por la que el análisis técnico, backtestings e indicadores no funcionan consistentemente, hay una razón por la cual debe de dejar ir todas las ideas populares la LOGICA le ayudara a darse cuenta poco a poco si nos sigue que lo que piensa que es TRADING es solo una ilusión en consenso y que para hacer las cosas diferentes y para tener resultados diferentes no puede estar aprendiendo ni aplicando lo que todos están haciendo.</p>
                                <p>FXLOGOS NO es un sitio para enseñarle términos técnicos, teorías, indicadores e ideas con respecto a lo que "pensamos de los Mercados financieros sino todo lo contrario para desintoxicarle de todos estos conceptos que popularmente se discuten en todos lados y los cuales solo ha aceptado sin cuestionar solo porque todos hablan de lo mismo asumiendo que esa debe ser la forma de hacer trading y no entiende que simplemente esta siendo DOMESTICADO. En FXLOGOS que sabemos que el problema del Trading es IDEOLOGICO y PSICOLOGICO y no técnico, usted esta aquí por que está buscando una forma de ser consistente y de tener rentabilidad en este negocio ya que si ya la tuviera no estaría buscando mas. Nosotros le ayudamos a desintoxicarse de todos los paradigmas, dogmas, y prejuicios que se crean porque solo escucha y aprende opiniones y no hechos. Nosotros le ayudamos a volverse un Trader rentable no porque va a saber muchas cosas (sabrá lo suficiente para hacerlo simple) sino porque entenderá que NADIE sabe nada  pero hablan y actúan como si supieran, y ahí mi amigo esta la gran diferencia y el por qué usted y muchos otros no salen del mismo agujero por que actúa y se comporta como si supiera algo cuando en realidad no lo sabe. Por lo tanto el problema es MENTAL y es ahí donde simplificando enseñándole los principios incondicionales del precio y el Modelo de Negocio de los dueños de los Mercados Financieros usted siempre vera el mismo proceso INCONDICIONAL y por lo tanto desarrollara HABILIDADES psicológicas y de administración de riesgo para siempre seguir al que no es subjetivo , el que está en el lado derecho del grafico que es EL PRECIO y no las ideas predicciones y optimizaciones del lado izquierdo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="white section nopaddingbottom" style="padding-top: 10px;">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list" style="line-height: 1.5">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h1><strong id="whyFxLogos">POR QUÉ FX LOGOS</strong></h1>
                            <p align="justify">FX es por FOREX y LOGOS es porque el término logos es uno de las más importantes en la actitud racional ante el mundo. Puede traducirse como pensamiento, razón, habla, discurso, concepto, palabra, conocimiento; pero el término más fiel es tal vez el término RAZÓN. Así la biología es el explicar o dar razón de los seres vivos, la teología el explicar o dar razón de Dios, la antropología el explicar o dar razón del hombre.</p>
                            <p align="justify">Hay una breve frase que muchas historias de la filosofía utilizan para resumir las implicaciones de la aparición de la filosofía: la filosofía es el paso del mito al logos. Con esta frase se quiere indicar que los primeros filósofos aceptaron estos dos principios:</p>
                            <ul>
                                <li><p>El mundo es racional, en el mundo hay un logos;</p></li>
                                <li><p>Nosotros disponemos de un logos o razón, logos que debemos emplear para el conocimiento de la realidad y la dirección de nuestra conducta.</p></li>
                                <center><img src="images/logos.png" style="width: 100%; margin-top: 20px;"></center>
                            </ul>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list" style="line-height: 1.5">
                            <i class="fa fa-lightbulb-o alignleft"></i>
                            <h1><strong>LÓGICA DEL TRADING</strong></h1>
                            <p align="justify">Hay una razón por la que usted pierde, hay una razón por la que usted esta domesticado, hay una razón por la que el análisis técnico, backtestings e indicadores no funcionan consistentemente, hay una razón por los que la manipulación en los mercados existe y es mecesaria, hay una razón por la que cree que adquiere conocimiento, pero lo que obtiene son las opiniones de las personas, hay una razón por la cual debe de dejar ir todas las ideas populares, la LOGICA le ayudará a darse cuenta poco a poco si nos sigue que lo que piensa que es TRADING es solo una ilusión en consenso y que para hacer las cosas diferentes y para tener resultados diferentes no puede estar aprendiendo ni aplicando lo que todos están haciendo.</p>
                            <p align="justify">FXLOGOS NO es un sitio para enseñarle términos técnicos, teorías, indicadores e ideas con respecto a lo que "pensamos de los Mercados financieros sino todo lo contrario para desintoxicarle de todos estos conceptos que popularmente se discuten en todos lados y los cuales solo ha aceptado Sin cuestionar solo porque todos hablan de lo mismo asumiendo que esa debe ser la forma de hacer trading y no entiende que simplemente esta siendo DOMESTICADO</p>
                            <p align="center" style="font-size: 18px; color:black;margin-top:30px;">Esto NO es price action, Price action es solo otra manera de darle formas y símbolos a lo que no lo tiene.</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list" style="line-height: 1.5">
                            <i class="fa fa-exclamation-triangle alignleft"></i>
                            <h1><strong>PROBLEMA DEL TRADING</strong></h1>
                            <p align="justify"> En FXLOGOS sabemos que el problema del Trading es IDEOLOGICO y PSICOLOGICO y no técnico, usted esta aquí por que está buscando una forma de ser consistente y de tener rentabilidad en este negocio ya que si ya la tuviera no estaría buscando mas. Nosotros le ayudamos a desintoxicarse de todos los paradigmas, dogmas, y prejuicios que se crean porque solo escucha y aprende opiniones y no hechos. Nosotros le ayudamos a volverse un Trader rentable no porque va a saber muchas cosas (sabrá lo suficiente para hacerlo simple) sino porque entenderá que NADIE sabe nada  pero hablan y actúan como si supieran, y ahí mi amigo esta la gran diferencia y el por qué usted y muchos otros no salen del mismo agujero por que actúa y se comporta como si supiera algo cuando en realidad no lo sabe. Usted no sabe que pasó ni por que pasó, ni está pasando o por que está pasando, mucho menos, que va a pasar y por que, solo le da una representación creando una creencia y un apego a esta. Por lo tanto, el problema es MENTAL y es ahí donde simplificando enseñándole los principios incondicionales del precio y el Modelo de Negocio de los dueños de los Mercados Financieros usted siempre vera el mismo proceso INCONDICIONAL y por lo tanto desarrollara HABILIDADES psicológicas y de administración de riesgo para siempre seguir al que no es subjetivo , el que está en el lado derecho del grafico que es EL PRECIO y no las ideas predicciones y optimizaciones del lado izquierdo.</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

            </div><!-- end container -->
        </section>

        <section class="white section" style="padding: 40px 0;">
            <div class="container">

                <div class="callout row">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <h4 align="right" style="font-family: 'Atlantic Cruise'; color:#428992; font-size: 40px; border:0;">Únase</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 align="left" style="font-family: 'Atlantic Cruise'; color:#428992; font-size: 23px;">a la comunidad que NO</h4>
                            <h4 align="left" style="font-family: 'Atlantic Cruise'; color:#428992; font-size: 23px;">tiene la mente condicionada</h4>
                        </div>
                    </div>
                    <!--<div class="col-md-3">
                        <a href="http://www.fxlogos.com/register.php" class="btn btn-primary btn-block">Registrarse ahora</a>
                    </div>-->
                    <div class="col-md-3">
                        <a href="http://www.fxlogos.com/chat.php" class="btn btn-primary btn-block"><i class="fa fa-slack" aria-hidden="true"></i> Chat Online</a>
                    </div>
                    <div class="col-md-3">
                        <center><a href="skype:csfxlogos?call" class="btn btn-primary btn-block"><i class="fa fa-phone" aria-hidden="true"></i> Contáctanos <i class="fa fa-skype"></i></a></center>
                    </div>
                    <!--<div class="col-md-3">
                        <center><a href="skype:csfxlogos?call" class="btn btn-primary btn-block" style="padding: 10px;"><i class="fa fa-phone" aria-hidden="true"></i> Contáctanos <i class="fa fa-skype"></i></a></center>
                    </div>-->
                </div><!-- end callout -->

            </div>
        </section>

        <section class="white section" style="padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-md-8 col-sm-8 col-xs-12">

                        <?php foreach($tradings as $trading):
                            $visualizacion = $modelP->getPermiso($trading['ID_PERMISO']); //echo $visualizacion['NOMBRE_PERMISO'];
                            if($logueada)
                            {
                                if($visualizacion['NOMBRE_PERMISO'] == 'Pagado' && $_SESSION['perfil'] < 3 && $_SESSION['perfil'] =! -1) {
                                    continue;
                                }
                            } else if($visualizacion['NOMBRE_PERMISO'] == 'Privado' || $visualizacion['NOMBRE_PERMISO'] == 'Pagado' && $_SESSION['perfil'] =! -1) {
                                continue;
                            }
                            $categoria = $modelC->getCategory($trading['ID_CATEGORIA']);
                            $fecha = $trading['FECHA_ENTRADA'];
                            $myDateTime = new DateTime($fecha);
                            $day = date_format($myDateTime, 'd');
                            $month = date_format($myDateTime, 'F');
                            $month = substr($month,0,3);
                            ?>
                            <div class="blog-wrapper">
                                <div class="blog-title">
                                    <a class="category_title" href="#" title=""><?php echo $categoria['NOMBRE_CATEGORIA'] ?></a>
                                    <h2><?php echo $trading['TITULO_ENTRADA'] ?></h2>
                                    <?php if($trading['TIPO_MEDIA'] == 'youtube') { ?>
                                        <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="hidden" data-onytevent="onYtEvent" style="float: right;"></div>
                                    <?php } ?>
                                </div><!-- end blog-title -->
                                <div class="blog-image">
                                    <?php if($trading['TIPO_MEDIA'] == 'imagen') { ?>
                                        <center><img src="<?php echo $trading['URL_MEDIA'] ?>" width="100%"></center>
                                    <?php } else if($trading['TIPO_MEDIA'] == 'youtube') { ?>
                                        <iframe id="fitvid0" src="<?php echo $trading['URL_MEDIA'] ?>" width="500" height="281"  frameborder="0" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen=""></iframe>
                                    <?php } else if($trading['TIPO_MEDIA'] == 'vimeo') { ?>
                                        <iframe id="fitvid0" src="<?php echo $trading['URL_MEDIA'] ?>" width="500" height="281"  frameborder="0" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen=""></iframe>
                                    <?php } else if($trading['TIPO_MEDIA'] == 'video/mp4') { ?>
                                        <center>
                                            <video width="100%" height="230px" controls>
                                                <source src="<?php echo $trading['URL_MEDIA'] ?>" type="video/mp4">
                                                Your browser does not support HTML5 video.
                                            </video>
                                        </center>
                                    <?php } ?>
                                    <!--<iframe src="https://player.vimeo.com/video/135968670?color=ffffff&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                    <!--<iframe src="https://www.youtube.com/embed/Tjr3W1uubkE" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                </div><!-- end image -->
                                <div class="blog-desc">
                                    <div class="post-date">
                                        <span class="day"><?php echo $day ?></span>
                                        <span class="month"><?php echo $month ?></span>
                                    </div>
                                    <p align="justify"><?php echo utf8_encode($trading['TEXTO_ENTRADA']) ?></p>
                                    <!--<a href="#" class="readmore">Read More</a>-->
                                </div><!-- end desc -->
                            </div><!-- end blog-wrapper -->
                        <?php endforeach; ?>

                    </div><!-- end content -->

                    <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">

                        <?php include "include/widget-facebook.php"; ?>

                        <?php include "include/widget-twitter.php"; ?>

                        <?php include "include/widget-instagram.php"; ?>

                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <?php include('include/footer.php'); ?>
        <?php include('include/copyright.php'); ?>

    </div><!-- end wrapper -->

    <?php include('include/script-down.php'); ?>
    <!-- CUSTOM PLUGINS -->
	<script src="js/custom.js"></script>
    <!-- SLIDER REV -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:420,
            hideThumbs:200,     
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,  
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview3",  
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,          
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",           
            keyboardNavigation:"off",   
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,  
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",  
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",  
            autoHeight:"off",           
            forceFullWidth:"off",                         
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,            
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""  
            }); 
        });
    </script>

    <script src="js/bxslider.js"></script>
    <script type="text/javascript">
    /* ==============================================
        Vertical Carousel
    =============================================== */
    (function($) {
    "use strict";
        $('.bxslider').bxSlider({
            mode: 'vertical',
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,
            pager: false,
            nextText:  '<i class="fa fa-arrow-down"></i>',
            prevText:  '<i class="fa fa-arrow-up"></i>',
            speed: 1000,
            auto: true
        });
    })(jQuery);
    </script>

    <!-- CUSTOM PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script>
        $(document).ready(function(){
            // Target your .container, .wrapper, .post, etc.
            $(".blog-image").fitVids();
        });
    </script>

    <!-- YOUTUBE -->
    <script src="https://apis.google.com/js/platform.js"></script>

    <script>
        function onYtEvent(payload) {
            if (payload.eventType == 'subscribe') {
                // Add code to handle subscribe event.
            } else if (payload.eventType == 'unsubscribe') {
                // Add code to handle unsubscribe event.
            }
            if (window.console) { // for debugging only
                window.console.log('YT event: ', payload);
            }
        }
    </script>

</body>
</html>