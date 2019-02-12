<?php
  include_once "../process/dominio.php";
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Compit Web</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="">
  <meta content="" name="description">
  <!-- faltan las socials tags -->
  <!-- Favicons -->
  <link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">

  <!-- booststrap 3.3.7 css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <link href="<?php echo dominio; ?>/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/css/nivo-slider-theme.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/css/responsive.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
  </div>

  <header>
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <nav class="navbar navbar-default">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                <a class="navbar-brand page-scroll sticky-logo logo-header" href="<?php echo dominio; ?>/">
                  <img src="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" alt="">
                  <p>Compit Web</p>
                </a>

              </div>

              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">

                <ul class="nav navbar-nav">
                  <li><a href="<?php echo dominio; ?>/portafolio/">Portafolio</a></li>
                  <li><a href="<?php echo dominio; ?>/precios/">Precios</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo dominio; ?>/membresia/inicio/">Inicar Sesión</a></li>
                  <li><a href="<?php echo dominio; ?>/membresia/registro/">Registro</a></li>
                  <li class="" style="margin: 15px auto"><a href="<?php echo dominio; ?>/membresia/inicio/" class="np-btn">Iniciar Proyecto</a></li>
                </ul>

              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="portfolio" class="portfolio-area area-padding fix" style="margin-top: 4em">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Portafolio</h2>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li> <a href="#" class="active" data-filter="*">Todo</a> </li>
                <li> <a href="#" data-filter=".development">Desarrollo Web</a> </li>
                <li> <a href="#" data-filter=".design">Diseño Gráfico</a> </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="awesome-project-content">

          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_desing/1.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/desing/1.png">
                      <h4>Flyer</h4>
                      <span>Diseño Gráfico</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_desing/2.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/desing/2.png">
                      <h4>Flyer</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/1.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/1.png">
                      <h4>Plantilla HTML</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/2.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/2.png">
                      <h4>Blog Wordpress</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/3.png" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/3.png">
                      <h4>Web Business</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_desing/3.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/desing/3.png">
                      <h4>Flyer</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/4.png">
                      <h4>Wocommerce</h4>
                      <span>Wordpress</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/5.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/5.png">
                      <h4>Tienda Online</h4>
                      <span>PrestaShop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/6.png">
                      <h4>Plantilla Web</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/7.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/7.png">
                      <h4>Web Business</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/8.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/8.png">
                      <h4>Web Noticias</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/10.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/10.png">
                      <h4>Red Social</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo dominio; ?>/img/portfolio/full/mini_developer/11.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/developer/11.jpg">
                      <h4>Herramienta Web</h4>
                      <span>Desarrollo Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>

              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p> “El equipo con los mejores jugadores gana.” </p>
                    <h6>Jack Welch Jr</h6>
                  </div>
                </div>

                <div class="single-testi">
                  <div class="testi-text">
                    <p> “Es bueno tener una competencia válida. Te empuja a hacerlo mejor.” </p>
                    <h6>Gianni Versace</h6>
                  </div>
                </div>

                <div class="single-testi">
                  <div class="testi-text">
                    <p> “La competencia no es sólo la base de la protección del consumidor, sino que es además el incentivo para el progreso.” </p>
                    <h6>Herbert Clark Hoover</h6>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>El control está en tus manos</h3>
            <a class="sus-btn" href="<?php echo dominio; ?>/membresia/inicio/">Inicia ahora</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">

          <div class="col-sm-12">
            <div class="footer-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content padding-y">
              <div class="footer-head">
                <h4>Información</h4>
                <ul class="ul-info-foo">
                  <li><a href="#">¿Quiénes Somos?</a></li>
                  <li><a href="#">¿Qué Hacemos?</a></li>
                  <li><a href="#">¿Que tenemos?</a></li>
                  <li><a href="#">¿Qué Ofrecemos?</a></li>
                  <li><a href="#">¿Por que Nosotros?</a></li>
                  <li><a href="#">Servicios</a></li>
                  <li><a href="#">Políticas</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content padding-y">
              <div class="footer-head">
                <h4>Proyectos</h4>
                <ul class="ul-info-foo">
                  <li><a href="#">Portafolio</a></li>
                  <li><a href="#">Iniciar Proyecto</a></li>
                  <li><a href="#">Calcar Coste de Proyecto</a></li>
                  <li><a href="#">Consultas</a></li>
                  <li><a href="#">Atensión al Cliente</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Trabajos</h4>
                <ul class="ul-info-foo">
                  <li><a href="#">Búscas Trabajo</a></li>
                  <li><a href="#">Áreas de Trabajos</a></li>
                  <li><a href="#">Habilidades</a></li>
                  <li><a href="#">Equipo</a></li>
                  <li><a href="#">Pruebas</a></li>
                  <li><a href="#">Solicitar una Entrevista</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Corporación <strong>Compit Web <script>document.write(new Date().getFullYear());</script></strong>. Todos los derechos reservados
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- jquery 3.3.1.min -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- bootstrap 3.3.7 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo dominio; ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo dominio; ?>/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo dominio; ?>/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo dominio; ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo dominio; ?>/lib/parallax/parallax.js"></script>
  <script src="<?php echo dominio; ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo dominio; ?>/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo dominio; ?>/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo dominio; ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo dominio; ?>/js/main.js"></script>
</body>
</html>