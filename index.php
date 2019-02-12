<?php
  require_once "process/dominio.php";
  require_once "process/verificarUsuario.php";
  $verySession->logeado();
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Compit Web</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- faltan las socials tags -->
  <!-- Favicons -->
  <link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">

  <!-- CND bootstrap 3.3.7 css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <?php require_once "inc/localhost.php"; // solo lo cargo cuando estoy en local ?>

  <link href="<?php echo dominio; ?>/lib/animate/animate.min.css">
  <link href="<?php echo dominio; ?>/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/animate/animate.min.css" rel="stylesheet">
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

  <?php require_once 'inc/header.php'; ?>

  <section id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo dominio; ?>/img/slider_/slider_3.jpg" alt="" title="#slider-direction-1" style="height: 930px" />
        <img src="<?php echo dominio; ?>/img/slider_/slider_1.jpg" alt="" title="#slider-direction-2" style="height: 930px" />
        <img src="<?php echo dominio; ?>/img/slider_/slider_2.jpg" alt="" title="#slider-direction-3" style="height: 930px" />
      </div>
      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Las mejores competencia las ganas tú</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Compit Web</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn" href="<?php echo dominio; ?>/membresia/registro/">Registro</a>
                  <a class="ready-btn" href="#">Crear un Proyecto</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Creamos aplicaciones 100% seguras</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Desarrollo Web</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn" href="#">Crear un proyecto</a>
                  <a class="ready-btn" href="<?php echo dominio; ?>/membresia/registro/">Registro</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Diseño único y creativo </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Trabajamos con Diseño Gráfico</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn" href="#">Crear un Diseño</a>
                  <a class="ready-btn" href="<?php echo dominio; ?>/membresia/registro/">Registro</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Información</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="<?php echo dominio; ?>/img/services/web-corporativa.jpg" alt="Diseño Compit Web" title="Diseño Compit Web">
                </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well text-justify small">
              <a href="<?php echo dominio; ?>/"><h4 class="sec-head">Compit Web</h4></a>
              <!-- lorem 50 -->
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, fugit, neque. Autem ab cum minima laudantium reiciendis cumque perspiciatis quibusdam labore. Id quos beatae eaque consectetur pariatur consequatur porro atque tempora molestias nam laudantium animi non vitae reprehenderit cumque voluptatibus, alias sit magnam ipsam ratione dignissimos obcaecati. Commodi, vitae, quod!</p>
              <!-- lorem 40 -->
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus molestias illo cupiditate voluptate id hic fugiat aut. Ex illo eveniet incidunt veniam unde iure reprehenderit, sed illum. Repellat voluptas aspernatur laborum porro quas illum! Quibusdam voluptatum, enim eius cumque reiciendis.</p>
              <a href="#" class="btn btn-primary">Prueba Ahora</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Servicios</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#"> <i class="fa fa-code"></i> </a>
                  <h4>Lorem ipsum dolor.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa aut voluptate, consequuntur, ad minus rerum?</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#"> <i class="fa fa-camera-retro"></i> </a>
                  <h4>Lorem ipsum dolor sit.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem laborum impedit et adipisci, ea optio!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#"> <i class="fa fa-wordpress"></i> </a>
                  <h4>Lorem ipsum dolor sit.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, architecto iste distinctio sunt nostrum at!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#"> <i class="fa fa-ticket"></i> </a>
                  <h4>Lorem ipsum dolor sit.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nulla natus recusandae alias debitis nisi!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#"> <i class="fa fa-html5"></i> </a>
                  <h4>Lorem ipsum.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, voluptatum molestiae incidunt repellat ad expedita.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#"> <i class="fa fa-money"></i> </a>
                  <h4>Lorem ipsum dolor.</h4>
                  <!-- lorem 15 -->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, asperiores? Facere qui laborum tenetur est.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="wellcom-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Prueba Nuestros Servicios</h2>
                <p>No más, ahora !Tú eres el Líder!</p>
                <div class="np-center">
                  <div class="np-bar">
                    <a class="ready-btn right-btn page-scroll" href="<?php echo dominio; ?>/membresia/inicio/">Inicia Sesión</a>
                    <a class="ready-btn page-scroll" href="<?php echo dominio; ?>/membresia/registro/">Registrate</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio-area area-padding fix">
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
                    <a class="venobox" data-gall="myGallery" href="<?php echo dominio; ?>/img/portfolio/full/deing/3.png">
                      <h4>Flyer</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12">
            <div class="center-flex">
              <a href="<?php echo dominio; ?>/portafolio/" class="compit-btn-blue infinite animated pulse">Descubrir más...</a>
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

  <?php require_once 'inc/footer.php'; ?>

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