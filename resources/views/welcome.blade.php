<!DOCTYPE html>
<html class="wide wow-animation desktop landscape html-modal-open translated-ltr rd-navbar-static-linked" lang="es">

<head>
  <title>AuroSoft</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->

  <!-- 
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
-->


  <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.css')  }}">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="{{ asset('assets/web/css/fonts.css')  }}">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="{{ asset('assets/web/css/style.css')  }}">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="{{ asset('assets/web/css/demo.css')  }}">
  <link rel="stylesheet" href="css/demo.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>

  <!-- 
<link rel="stylesheet"
    href="data:text/css;charset=utf-8;base64,Y2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gewogIGRpc3BsYXk6IGJsb2NrOwogIGJhY2tncm91bmQ6ICM0NTQ4NGQ7CiAgY29sb3I6ICNmZmY7CiAgbGluZS1oZWlnaHQ6IDEuNDU7CiAgcG9zaXRpb246IGZpeGVkOwogIHotaW5kZXg6IDkwMDAwMDAwOwogIHRvcDogMDsKICBsZWZ0OiAwOwogIHJpZ2h0OiAwOwogIHBhZGRpbmc6IC41ZW0gMWVtOwogIHRleHQtYWxpZ246IGNlbnRlcjsKICAtd2Via2l0LXVzZXItc2VsZWN0OiBub25lOwogICAgIC1tb3otdXNlci1zZWxlY3Q6IG5vbmU7CiAgICAgIC1tcy11c2VyLXNlbGVjdDogbm9uZTsKICAgICAgICAgIHVzZXItc2VsZWN0OiBub25lOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXVtkYXRhLXZpc2liaWxpdHk9ImhpZGRlbiJdIHsKICBkaXNwbGF5OiBub25lOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXSBjbG91ZGZsYXJlLWFwcC1tZXNzYWdlIHsKICBkaXNwbGF5OiBibG9jazsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gYSB7CiAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7CiAgY29sb3I6ICNlYmViZjQ7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGE6aG92ZXIsCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGE6YWN0aXZlIHsKICBjb2xvcjogI2RiZGJlYjsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gY2xvdWRmbGFyZS1hcHAtY2xvc2UgewogIGRpc3BsYXk6IGJsb2NrOwogIGN1cnNvcjogcG9pbnRlcjsKICBmb250LXNpemU6IDEuNWVtOwogIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICByaWdodDogLjRlbTsKICB0b3A6IC4zNWVtOwogIGhlaWdodDogMWVtOwogIHdpZHRoOiAxZW07CiAgbGluZS1oZWlnaHQ6IDE7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGNsb3VkZmxhcmUtYXBwLWNsb3NlOmFjdGl2ZSB7CiAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZVkoMXB4KTsKICAgICAgICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlWSgxcHgpOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXSBjbG91ZGZsYXJlLWFwcC1jbG9zZTpob3ZlciB7CiAgb3BhY2l0eTogLjllbTsKICBjb2xvcjogI2ZmZjsKfQo=">
  <link type="text/css" rel="stylesheet" charset="UTF-8"
    href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
-->



</head>


<body class="" style="">
  <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img
        src="{{ asset('assets/web/images/ie8-panel/warning_bar_0000_us.jpg')  }}" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader loaded">
    <div class="preloader-body">
      <div class="cssload-container"><span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>


  <div class="page animated" style="animation-duration: 500ms;">
    <div id="home">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" style="height: 106px;">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-original rd-navbar-static rd-navbar--is-stuck"
            data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
            data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle toggle-original"
                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html">
                    <img src="{{ asset('assets/web/images/logo-default-223x50.png')  }}" alt="" width="223" height="50">
                </a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <!-- RD Navbar Share-->

                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Hogar</font>
                          </font>
                        </a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#services">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Servicios</font>
                          </font>
                        </a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#projects">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Proyectos</font>
                          </font>
                        </a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#news">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Noticias</font>
                          </font>
                        </a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Contactos</font>
                          </font>
                        </a></li>
                    </ul>



                  </div>
                </div>

                <div class=" ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-classic swiper-container-vertical"
        data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
        <div class="swiper-wrapper text-center"
          style="transform: translate3d(0px, -2968px, 0px); transition-duration: 0ms;">
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
            data-slide-bg="images/slider-1-slide-6-1770x742.jpg" data-swiper-slide-index="2"
            style="background-image: url(&quot;images/slider-1-slide-6-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Auro Software
                    </font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Las soluciones de software desarrolladas por nuestra empresa
                      han sido recomendadas en numerosas ocasiones por su facilidad de uso y características
                      innovadoras.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>


          <div class="swiper-slide swiper-slide-duplicate-active" data-slide-bg="images/slider-1-slide-2-1770x742.jpg"
            data-swiper-slide-index="0"
            style="background-image: url(&quot;images/slider-1-slide-2-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Desarrollo de aplicaciones móviles
                    </font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      Desde nuestro establecimiento, hemos estado entregando soluciones de software sostenibles y de
                      alta calidad para propósitos corporativos de negocios en todo el mundo.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-4-1770x742.jpg" data-swiper-slide-index="1"
            style="background-image: url(&quot;images/slider-1-slide-4-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">equipo experimentado</font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Somos un equipo de desarrolladores de software calificados,
                      cuyo objetivo es crear herramientas únicas y poderosas para su negocio y la vida cotidiana.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
            data-slide-bg="images/slider-1-slide-6-1770x742.jpg" data-swiper-slide-index="2"
            style="background-image: url(&quot;images/slider-1-slide-6-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Auro Soft
                    </font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">está comprometida con cumplir o superar las expectativas
                      del cliente a través del análisis, diseño, implementación y realización de pruebas del software.
                    </font>
                  </font>
                </p>
              </div>
            </div>
          </div>


          <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
            data-slide-bg="images/slider-1-slide-2-1770x742.jpg" data-swiper-slide-index="0"
            style="background-image: url(&quot;images/slider-1-slide-2-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="fadeInLeft animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Desarrollo de aplicaciones móviles
                    </font>
                  </font>
                </h1>
                <p class="text-width-large fadeInRight animated" data-caption-animate="fadeInRight"
                  data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      Desde nuestro establecimiento, hemos estado entregando soluciones de software sostenibles y de
                      alta calidad para propósitos corporativos de negocios en todo el mundo.</font>
                  </font>
                </p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination__module">
          <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">01</span><span
              class="swiper-pagination__fraction-divider">/</span><span
              class="swiper-pagination__fraction-count">03</span></div>
          <div class="swiper-pagination__divider"></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
              class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
              class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        </div>
      </section>

    </div>






    <!-- See all services-->
    <section class="section section-sm section-first bg-default text-center" id="services">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp"
            style="visibility: visible; animation-name: fadeInUp;"><img src="{{ asset('assets/web/images/index-1-415x592.png')  }}" alt=""
              width="415" height="592">
          </div>
          <div class="col-lg-7 col-xl-6">
            <div class="row row-30">
              <div class="col-sm-6 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <article class="box-icon-modern box-icon-modern-custom">
                  <div>
                    <h3 class="box-icon-modern-big-title">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Lo que ofrecemos</font>
                      </font>
                    </h3>
                    <div class="box-icon-modern-decor"></div><a class="button button-primary button-ujarak" href="#">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Ver todos los servicios</font>
                      </font>
                    </a>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 wow fadeInRight" data-wow-delay=".1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                <article class="box-icon-modern box-icon-modern-2">
                  <div class="box-icon-modern-icon linearicons-phone-in-out"></div>
                  <h5 class="box-icon-modern-title"><a href="#">
                      <font style="vertical-align: inherit;"></font><br>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">SOLUCIONES </font>
                        <font style="vertical-align: inherit;">CORPORATIVAS</font>
                      </font>
                    </a></h5>
                  <div class="box-icon-modern-decor"></div>
                  <p class="box-icon-modern-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">¿Necesitas un software específico para tu empresa? </font>
                      <font style="vertical-align: inherit;">¡Estamos listos para desarrollarlo!
                      </font>
                    </font>
                  </p>
                </article>
              </div>
              <div class="col-sm-6 wow fadeInRight" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <article class="box-icon-modern box-icon-modern-2">
                  <div class="box-icon-modern-icon linearicons-headset"></div>
                  <h5 class="box-icon-modern-title"><a href="#">CALL CENTER<br>SOLUTIONS</a></h5>
                  <div class="box-icon-modern-decor"></div>
                  <p class="box-icon-modern-text">Nuestros expertos proporcionan productos personalizados de
                    cualquier complejidad para los centros de atención telefónica.</p>
                </article>
              </div>
              <div class="col-sm-6 wow fadeInRight" data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                <article class="box-icon-modern box-icon-modern-2">
                  <div class="box-icon-modern-icon linearicons-outbox"></div>
                  <h5 class="box-icon-modern-title"><a href="#">CLOUD<br>DEVELOPMENT</a></h5>
                  <div class="box-icon-modern-decor"></div>
                  <p class="box-icon-modern-text">También podemos ofrecerle soluciones confiables de desarrollo en la
                    nube.</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Cta-->
    <section class="section section-fluid bg-default">
      <div class="parallax-container" data-parallax-img="{{ asset('assets/web/images/parallax-1.jpg')  }}">
        <div class="material-parallax parallax"><img src="{{ asset('assets/web/images/parallax-1.jpg')  }}" alt=""
            style="display: block; transform: translate3d(-50%, 19px, 0px);"></div>
        <div class="material-parallax parallax"><img src="{{ asset('assets/web/images/parallax-1.jpg')  }}" alt=""
            style="display: block; transform: translate3d(-50%, 0px, 0px);"></div>
        <div class="material-parallax parallax"><img src="{{ asset('assets/web/images/parallax-1.jpg')  }}" alt=""
            style="display: block; transform: translate3d(-50%, 39px, 0px);"></div>
        <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay">
          <div class="container">
            <div class="row row-30 justify-content-end text-right">
              <div class="col-sm-7">
                <h3 class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">¡Desarrollemos su
                  próxima gran aplicación!</h3>
                <p>¿Necesita una solución de software única para su empresa? ¡Sabemos cómo ayudarte!</p>
                <div class="group-sm group-middle group justify-content-end"><a
                    class="button button-white-outline button-ujarak" href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Projects-->
    <section class="section section-sm section-fluid bg-default text-center" id="projects">
      <div class="container-fluid">
        <h2 class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Últimos proyectos</h2>
        <p class="quote-jean wow fadeInRight" data-wow-delay=".1s"
          style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">En nuestro portafolio, usted
          puede
          navegar por los últimos productos desarrollados para nuestros clientes para diferentes fines corporativos.
          Nuestro calificado equipo de
          diseñadores de interfaces y desarrolladores de software siempre está listo para crear algo único para usted.
        </p>
        <div class="isotope-filters isotope-filters-horizontal">
          <button
            class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha"
            data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true"
            data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
          <ul class="isotope-filters-list" id="isotope-3">
            <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">Todo</a></li>
            <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">APLICACIONES MÓVILES</a></li>
            <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">SOFTWARE PERSONALIZADO</a></li>
            <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">QA &amp; Testing</a></li>
            <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">UX Y DISEÑ<Obj></Obj></a></li>
          </ul>
        </div>
        <div class="row row-30 isotope isotope--loaded isotope--loaded isotope--loaded" data-isotope-layout="fitRows"
          data-isotope-group="gallery" data-lightgallery="group" style="position: relative; height: 879.636px;">
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4"
            style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInRight;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-1-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-1-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">FinStep</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1"
            data-wow-delay=".1s"
            style="position: absolute; left: 345px; top: 0px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-2-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-2-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">Mobile Finance</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2"
            data-wow-delay=".2s"
            style="position: absolute; left: 691px; top: 0px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-3-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-3-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">Q-Manage</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3"
            data-wow-delay=".3s"
            style="position: absolute; left: 0px; top: 293px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-4-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-4-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">WeatherCast</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3"
            style="position: absolute; left: 345px; top: 293px; visibility: visible; animation-name: fadeInLeft;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-5-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-5-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">Home Calendar</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".1s"
            style="position: absolute; left: 691px; top: 293px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-6-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-6-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">MPlanner</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".2s"
            style="position: absolute; left: 0px; top: 586px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-7-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-7-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">Alice Messenger</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s"
            style="position: absolute; left: 345px; top: 586px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-classic thumbnail-md">
              <div class="thumbnail-classic-figure"><img src="{{ asset('assets/web/images/fullwidth-gallery-8-420x350.jpg')  }}" alt="" width="420"
                  height="350">
              </div>
              <div class="thumbnail-classic-caption">
                <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60"
                    href="images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img
                      src="{{ asset('assets/web/images/fullwidth-gallery-8-420x350.jpg')  }}" alt="" width="420" height="350"></a>
                  <h5 class="thumbnail-classic-title"><a href="#">WiseMoney</a></h5>
                </div>
                <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI
                  that you won’t find anywhere else.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Years of experience-->
    <section class="section section-sm bg-default">
      <div class="container">
        <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
          <div class="col-md-6 col-lg-5 col-xl-4 text-center"><a class="text-img" href="#">
              <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"
                  width="450" height="450"></canvas></div><span class="counter animated">3</span>
            </a></div>
          <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp"
              style="visibility: visible; animation-name: fadeInUp;">
              <h3 class="title-decoration-lines-left">Años De Experiencia</h3>
              <p class="text-gray-500">AuroSoft es un equipo de diseñadores y desarrolladores de
                aplicaciones altamente experimentados que crean un software único para usted.</p>
            </div>
          </div>
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
            <div class="row justify-content-center border-2-column offset-top-xl-26">
              <div class="col-9 col-sm-6">
                <div class="counter-amy">
                  <div class="counter-amy-number"><span class="counter animated">8</span><span class="symbol"></span>
                  </div>
                  <h6 class="counter-amy-title">APLICACIONES DESARROLLADAS</h6>
                </div>
              </div>
              <div class="col-9 col-sm-6">
                <div class="counter-amy">
                  <div class="counter-amy-number"><span class="counter animated">2</span>
                  </div>
                  <h6 class="counter-amy-title">Consultores</h6>
                </div>
              </div>
              <div class="col-9 col-sm-6">
                <div class="counter-amy">
                  <div class="counter-amy-number"><span class="counter animated">12</span>
                  </div>
                  <h6 class="counter-amy-title">PREMIOS GANADOS</h6>
                </div>
              </div>
              <div class="col-9 col-sm-6">
                <div class="counter-amy">
                  <div class="counter-amy-number"><span class="counter animated">10</span>
                  </div>
                  <h6 class="counter-amy-title">
                    EMPLEADOS</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Latest blog posts-->
    <section class="section section-sm bg-default" id="news">
      <div class="container">
        <h2>Últimas Entradas De Blog</h2>
        <div class="row row-45">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <!-- Post Modern-->
            <article class="post post-modern"><a class="post-modern-figure" href="#"><img
                  src="{{ asset('assets/web/images/post-10-370x307.jpg')  }}" alt="" width="370" height="307">
                <div class="post-modern-time">
                  <time datetime="2019-07-04"><span class="post-modern-time-month">07</span><span
                      class="post-modern-time-number">04</span></time>
                </div>
              </a>
              <h4 class="post-modern-title"><a href="#">Benefits of Async/Await</a></h4>
              <p class="post-modern-text">Asynchronous functions are a good and bad thing in JavaScript. The good side
                is that asynchronous functions are non-blocking and...</p>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
            <!-- Post Modern-->
            <article class="post post-modern"><a class="post-modern-figure" href="#"><img
                  src="{{ asset('assets/web/images/post-11-370x307.jpg')  }}" alt="" width="370" height="307">
                <div class="post-modern-time">
                  <time datetime="2019-07-17"><span class="post-modern-time-month">07</span><span
                      class="post-modern-time-number">17</span></time>
                </div>
              </a>
              <h4 class="post-modern-title"><a href="#">Key Considerations of iPaaS</a></h4>
              <p class="post-modern-text">Digital transformation requires cloud appropriate adoption, legacy IT systems
                modernization, and Agile-based methodologies for faster...</p>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
            <!-- Post Modern-->
            <article class="post post-modern"><a class="post-modern-figure" href="#"><img
                  src="{{ asset('assets/web/images/post-12-370x307.jpg')  }}" alt="" width="370" height="307">
                <div class="post-modern-time">
                  <time datetime="2019-07-22"><span class="post-modern-time-month">07</span><span
                      class="post-modern-time-number">22</span></time>
                </div>
              </a>
              <h4 class="post-modern-title"><a href="#">Never Stop Optimizing Your Code</a></h4>
              <p class="post-modern-text">In this tutorial, we will discuss the Hibernate Query Language. HQL is an
                object-oriented query language. Hibernate Query...</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact information-->
    <section class="section section-sm bg-default">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="tel:#">+591 75069277</a></p>
                <p class="box-contacts-link"><a href="tel:#">+59167979637</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="#">8vo. anillo Avenida antiguo el palmar curva del mercado
                    fortaleza</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="mailto:#">auroSoft@gmail.com</a></p>
                <p class="box-contacts-link"><a href="mailto:#">info@aurosoft.org</a></p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form-->
    <section class="section section-sm section-last bg-default text-left" id="contacts">
      <div class="container">
        <article class="title-classic">
          <div class="title-classic-title">
            <h3>Ponerse En Contacto</h3>
          </div>
          <div class="title-classic-text">
            <p>Si tiene alguna pregunta, solo complete el formulario de contacto y le responderemos a la brevedad.</p>
          </div>
        </article>

        {!! Form::open(array('route'=>'contact.store', 'method'=>'POST', 'class'=>'rd-form rd-form-variant-2 rd-mailform', 
            'data-form-output'=>'form-output-global', 'data-form-type'=>'contact', 'novalidate'=>'novalidate')) !!}
            <div class="row row-14 gutters-14">
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input form-control-has-validation" id="contact-your-name-2" type="text" name="nombre"
                required>
                  <span class="form-validation"></span><span
                  class="form-validation"></span><span class="form-validation"></span>
                <label class="form-label rd-input-label" for="contact-your-name-2">su nombre</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input form-control-has-validation" id="contact-email-2" type="email" name="email"
                required>
                  <span class="form-validation"></span><span
                  class="form-validation"></span><span class="form-validation"></span>
                <label class="form-label rd-input-label" for="contact-email-2">Coreo electronico</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input form-control-has-validation" id="contact-phone-2" type="text" name="telefono"
                  data-constraints="@Numeric">
                  <span class="form-validation"></span><span
                  class="form-validation"></span><span class="form-validation"></span>
                <label class="form-label rd-input-label" for="contact-phone-2">Telefono</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="contact-message-2">Enviar Mensaje</label>
                <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child"
                  id="contact-message-2" name="mensaje" required>
                </textarea><span
                  class="form-validation"></span><span class="form-validation"></span><span
                  class="form-validation"></span>
              </div>
            </div>
          </div>
          <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
        {!! Form::close() !!}

      </div>
    </section>


    <!-- Page Footer-->
    <footer class="section section-fluid footer-minimal context-dark">
      <div class="bg-gray-15">
        <div class="container-fluid">
          <div class="footer-minimal-inset oh">
            <ul class="footer-list-category-2">
              <li><a href="#">UI Design</a></li>
              <li><a href="#">Windows/Mac OS Apps</a></li>
              <li><a href="#">Android/iOS Apps</a></li>
              <li><a href="#">Cloud Solutions</a></li>
              <li><a href="#">Customer Support</a></li>
            </ul>
          </div>
          <div class="footer-minimal-bottom-panel text-sm-left">
            <div class="row row-10 align-items-md-center">
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
                <p class="rights"><span>©&nbsp;</span><span class="copyright-year">2023</span> <span>RatherApp</span>
                </p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right"><span>All rights reserved.</span>
                <span>Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Contact Us</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">

          {!! Form::open(array('route'=>'contact.store', 'method'=>'POST', 'class'=>'rd-form rd-form-variant-2 rd-mailform', 
            'data-form-output'=>'form-output-global', 'data-form-type'=>'contact-modal', 'novalidate'=>'novalidate')) !!}
            <div class="row row-14 gutters-14">
                <div class="col-12">
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-modal-name" type="text"
                      name="name" required><span class="form-validation"></span><span
                      class="form-validation"></span><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-modal-name">Your Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-modal-email" type="email"
                      name="email" required><span class="form-validation"></span><span
                      class="form-validation"></span><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-modal-email">E-mail</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-modal-phone" type="text"
                      name="phone" data-constraints="@Numeric"><span class="form-validation"></span><span
                      class="form-validation"></span><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-modal-phone">Phone</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label rd-input-label" for="contact-modal-message">Message</label>
                    <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child"
                      id="contact-modal-message" name="message" required></textarea><span
                      class="form-validation"></span><span class="form-validation"></span><span
                      class="form-validation"></span>
                  </div>
                </div>
              </div>
              <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
        {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Javascript-->



  <!--

  <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-P9FT69"></script>

  <script type="text/javascript" async="" src="https://www.google-analytics.com/ga.js"></script>
-->

  <script src = "{{ asset('assets/web/js/core.min.js')  }}"></script>
  <script src = "{{ asset('assets/web/js/script.js')  }}"></script>

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>


  <!-- coded by Himic-->

  <!--LIVEDEMO_00 -->

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>

  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0"
      width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script>
  <!-- End Google Tag Manager -->
  <a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up active"></a>
  <script type="text/javascript" id="">(function () {
      var b = document.location.search.split("aff\x3d")[1]; if (b) { var d = document.querySelectorAll("a"), c; for (c = 0; c < d.length; c++) { var a = d[c]; 0 == a.href.indexOf("https://www.templatemonster.com") && (0 < a.href.indexOf("?") ? a.href = a.href + "\x26aff\x3d" + b : a.href = a.href + "?aff\x3d" + b) } } b = document.location.search.split("i\x3d")[1]; var e = document.location.search.split("pr_code\x3d")[1]; if (b && e) for (b = b.split("\x26")[0], d = document.querySelectorAll("a"), c = 0; c < d.length; c++)a = d[c], 0 == a.href.indexOf("https://www.templatemonster.com") &&
        (a.href = "https://www.templatehelp.com/preset/cart.php?act\x3dadd\x26templ\x3d" + b + "\x26pr_code\x3d" + e)
    })();</script>

  <a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a>

  <!-- Código de instalación Cliengo para https://jakelinecs.github.io/plantillaWeb/ -->
  <script
    type="text/javascript">(function () { 
      var ldk = document.createElement('script'); 
      ldk.type = 'text/javascript'; 
      ldk.async = true; 
      ldk.src = 'https://s.cliengo.com/weboptimizer/647d2c87f26f3b003225fe85/648105378bb8e9003207f3a9.js?platform=onboarding_modular'; 
      var s = document.getElementsByTagName('script')[0]; 
      s.parentNode.insertBefore(ldk, s); 
      })();
      
      </script>
</body>

</html>

