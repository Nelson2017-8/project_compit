<?php
  include_once "../../process/dominio.php";
    require_once "../../process/verificarUsuario.php";
  $verySession->logeado();
 ?>
<!doctype html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>Compit Web</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="author" name="Nelson Portillo">
	<!-- Favicons -->
	<link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

	<!-- version local host  -->
		<link rel="stylesheet" href="<?php echo dominio; ?>/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo dominio; ?>/lib/font-awesome/css/font-awesome.min.css">
	<!-- / version local host  -->

	<link rel="stylesheet" href="<?php echo dominio; ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo dominio; ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo dominio; ?>/membresia/style.css">
	<link rel="stylesheet" href="<?php echo dominio; ?>/lib/animate/animate.min.css">
</head>
<body>
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

					<a class="navbar-brand page-scroll sticky-logo logo-header" href="./">
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
					  <li><a href="../inicio/">Inicar Sesión</a></li>
					  <li><a href="../registro/">Registro</a></li>
					  <li class="" style="margin: 15px auto"><a href="./membresia/inicio/" class="np-btn">Iniciar Proyecto</a></li>
					</ul>

				  </div>
				</nav>
			  </div>
			</div>
		  </div>
		</div>
	</header>

	<section class="form-container animated fadeIn">
		<div class="container">
			<div class="login-content">
				<div class="login-logo">
					<span>Inicia Sesión</span>
				</div>
				<div class="login-form">
					<form class="validate sing_in">
						<div class="form-group">
							<label>Correo Electrónico</label>
							<div class ="input-group">
								<div class="input-group-addon icon-btn"><i class="fa fa-user"></i></div>
								<input type="email" class="form-control border-left-0" name="email" placeholder="Introduzca un correo" minlength="3" required>
							</div>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<div class="input-group">
								<div class="input-group-addon icon-btn"><i class="fa fa-lock"></i></div>
								<input type="password" class="form-control border-left-0" name="password" placeholder="Introduza la contraseña" minlength="5" required>
							</div>
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox"> Recordar me
							</label>
							<label class="pull-right">
								<a href="<?php echo dominio; ?>/membresia/forgotten_password/">¿Olvide mi Contraseña?</a>
							</label>
						</div>
						<div id="info" class="col-12"></div>
						<button type="submit" class="btn btn-primary text-capitalize"><i class="fa fa-paper-plane"></i>Iniciar Sesión</button>
						<div class="register-link text-center">
							<p>¿No tienes una cuenta? <a href="<?php echo dominio; ?>/membresia/registro/"> Registrate</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

	<!-- version localhost -->
		<script src="<?php echo dominio; ?>/lib/jquery/jquery.min.js"></script>
		<script src="<?php echo dominio; ?>/lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- / version localhost -->
    <?php echo "<script> var dominio = '". dominio."' </script>"; ?>
	<script src="<?php echo dominio; ?>/lib/jquery_validate/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo dominio; ?>/js/form_user.js"></script>
</body>
</html>