
<!--
 #####                                     
#     # #####    ##   #    # ###### #      
#       #    #  #  #  ##   # #      #      
#       #    # #    # # #  # #####  #      
#       #####  ###### #  # # #      #      
#     # #      #    # #   ## #      #      
 #####  #      #    # #    # ###### ###### 
-->



<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

  <head>
    <title>M4 Efecto Airsoft</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

  <body>
    
    <?php

      session_start();

      if(!isset($_SESSION["usuario"])){
        header("location:../login");
      }

    ?>
    




    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>

    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>



    <div class="page">
      <!-- Page Header--><a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_02.jpg" alt=""/></a>
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img id="logo_m4" src="images/logom4_png.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>10:00<span></span> — 17:00<span></span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">info@m4efectoairsoft</a></div>
                      </div>
                    </li>
                  </ul><a class="button button-md button-default-outline-2 button-ujarak" href="../php/cerrar_sesion.php">
                  <!-- Obtener presupuesto -->
                  <?php
                  echo $_SESSION["usuario"];
                  ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">Nosotros</a>
                    </li>
                
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contacto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>




      <!-- Swiper
      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/airsoft6.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Disfruta de actividades al aire libre</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>M4</span><span class="font-weight-bold"> Efecto Airsoft</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Reservar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/airsoft7.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Partidas libres y/o entrenamientos</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Airsoft</span><span class="font-weight-bold"> Deporte extremo</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Reservar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/airsoft11.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Implementa tu estrategia y consigue la victoria</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Trabajo en</span><span class="font-weight-bold"> Equipo</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Reservar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      -->
        <!-- Swiper Pagination
        <div class="swiper-pagination"></div>
      </section>
      -->



      <!-- Section Box Categories
      <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="images/book2.jpg" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">M4</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="images/book4.jpg" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">EFECTO</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="images/book3.jpg" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">AIRSOFT</h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          -->
          <!--
          </div><a class="link-classic wow fadeInUp" href="#">Other Tours<span></span></a>
          -->
          <!-- Owl Carousel
        </div>
      
      </section>
      -->



      <!-- Discover New Horizons
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="images/team.jpg" alt="" width="556" height="382"/>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>Descubre M4 Efecto Airsoft</h3>
                -->
                <!-- Bootstrap tabs

                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                -->
                  <!-- Nav tabs
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">Nosotros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Eleginos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Misión</a></li>
                  </ul>
                -->
                  <!-- Tab panes
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-7-1">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget feugiat urna. Ut hendrerit nec arcu ut ultrices. Aenean pulvinar efficitur nisi nec venenatis. Nunc suscipit est erat.</p>
                      <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Obtener presupuesto</a><a class="button button-black-outline button-md" href="about.html">Leer más</a></div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-2">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum neque sem, non tincidunt est ultricies id. Aliquam erat volutpat. Mauris sed libero id lectus accumsan facilisis quis quis justo.</p>
                      <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Obtener presupuesto</a><a class="button button-black-outline button-md" href="about.html">Leer más</a></div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-3">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus rhoncus odio non sodales. Phasellus eu ligula lacus. Aenean ultricies justo non tortor.</p>
                      <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Obtener presupuesto</a><a class="button button-black-outline button-md" href="about.html">Leer más</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      -->



      <!--	Our Services-->
      <section class="section section-sm">
        <div class="container">
          <h3>Panel de control</h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-6">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Partidas personalizadas</a></h5>
                    <p class="box-icon-classic-text">Armamos cada detalle del evento a tu medida.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-6">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fa-street-view"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Eventos móviles</a></h5>
                    <p class="box-icon-classic-text">Armamos las partidas en tu localidad, llevamos el evento a dondo vos te encuentres.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-6">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fa-male"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Equipos e indumentaria</a></h5>
                    <p class="box-icon-classic-text">Venta y/o alquiler de equipo de juego. Venta de idumentaria M4 Efecto Airsoft</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-6">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fa-cutlery"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Comunidad</a></h5>
                    <p class="box-icon-classic-text">Prepareción de la comida para disfrutar de una buena jornada.</p>
                  </div>
                </div>
              </article>
            </div>
          <!--
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Handpicked Hotels</a></h5>
                    <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Best Price Guarantee</a></h5>
                    <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the difference.</p>
                  </div>
                </div>
              </article>
            </div>
          -->
          </div>
        </div>
      </section>







      <!-- Page Footer--><a class="banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_big_02.jpg" alt=""/></a>
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contactanos</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+54 11-0000-0000</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-aemail" href="mailto:#">info@m4efectoairsoft.com</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">Doc. Facundo Manes 4730, CABA, CP 13027</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Noticias</h6>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Evento en Iguazú: Mirá las fotos de nuestra partida en Misiones</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">Noviembre 02, 2019</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Asado post partida: Las mejores fotos del asado en el evento X</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">Octubre 25, 2019</time>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Enlaces rápidos</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="about.html">Nosotros</a></li>
                      <li><a href="#">Nuestro equipo</a></li>
                      <li><a href="#">Galería</a></li>
                      <li><a href="#">Blog</a></li>
                    </ul>
                    <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="#">Obtener presupuesto</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Programmer</span>. All Rights Reserved. Design by <a href="https://www.desarrollokonig.com.ar">desarrollokonig.com.ar</a></p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <!-- <p class="rights"><a href="#">Privacy Policy</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>