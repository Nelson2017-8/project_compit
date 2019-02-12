<?php
	require_once "../process/dominio.php";
	require_once "../process/procesos.php";
	require_once "../process/verificarUsuario.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compit Web</title>
	<link rel="icon" href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
	<link rel="stylesheet" href="<?php echo dominio; ?>/fonts/themify/themify-icons.css">
	<?php require_once "../inc/materialize.php"; ?>
	<link rel="stylesheet" href="<?php echo dominio; ?>/style-account.css">
</head>
<body>
	<div class="navbar-fixed">
		<nav class="nav-wrapper blue">
			<div class="container w-90">
				<a class="brand-logo logo-text" href="<?php echo dominio; ?>/account">
                  <img src="<?php echo dominio; ?>/img/logo/compitweb-logo.png" alt="">
                  Compit Web
                </a>
				<a href="#" class="sidenav-trigger" data-target="mobile"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#" class="dropdown-trigger" data-target="notifications"><i class="nav-icon material-icons">notifications</i></a></li>
					<li><a href="#" class="dropdown-trigger" data-target="account"><i class="nav-icon material-icons">account_circle</i></a></li>
				</ul>
			</div>
		</nav>
	</div>
	<ul id="notifications" class="dropdown-content">
		<li><a href="#">No Tienes notificaciones</a></li>
		<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi exercitationem aliquam repudiandae, accusantium aspernatur qui magnam neque, error earum mollitia aliquid ipsum placeat quos illum voluptatibus corporis veniam vel molestias.</a></li>
	</ul>
	<ul id="account" class="dropdown-content">
		<li tabindex="0"><a href="<?php echo dominio; ?>/account/proyecto/proceso/"><i class="material-icons">work</i>Proyectos</a></li>
		<li tabindex="0"><a href="<?php echo dominio; ?>/account/cuenta/"><i class="material-icons">border_color</i>Editar Cuenta</a></li>
		<li><a href="#"><i class="material-icons">shopping_cart</i>Carrito</a></li>
		<li><a href="#"><i class="material-icons">forum</i>Blog</a></li>
		<li><a href="#"><i class="material-icons">language</i>Lenguaje</a></li>
		<li class="divider"></li>
		<li tabindex="0"><a href="<?php echo dominio; ?>/process/cerrar_session.php"><i class="material-icons">power_settings_new</i>Cerrar Sessión</a></li>
	</ul>
	<ul class="sidenav" id="mobile">
		<li><a href="#">CompitWeb</a></li>
		<li><a href="#"><i class="material-icons">cloud</i>Notificaciones</a></li>
		<li><a href="#"><i class="material-icons">cloud</i>Opciones</a></li>
		<li><a href="#"><i class="material-icons">cloud</i>Salir</a></li>
	</ul>
	<!-- fin del nav respondive -->
	<div class="row">
		<section class="blue darken-4 col l3 xl3 section-left hide-on-med-and-down p-0">	
			<div class="container w-90">
				<div class="p-0">
					<p class="m-0 title center">Panel de Control</p>
				</div>
				<div class="section">
					<ul class="ul-tools">
						<li><a href="http://www.compitweb.com/account/proyecto/iniciar/"><i class="material-icons">cloud</i>Iniciar Proyecto</a></li>

						<li><a href="http://www.compitweb.com/account/proyecto/proceso"><i class="material-icons">cloud</i>Mis Proyectos</a></li>

						<li><a href="http://www.compitweb.com/account/consulta/precios/"><i class="material-icons">cloud</i>Precios</a></li>

						<li><a href="http://www.compitweb.com/account/servicios/"><i class="material-icons">cloud</i>Servicios</a></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="col m12 l9 offset-l3 offset-xl3 s12">
			<div class="container section w-90">
				<blockquote class="white welcome-block">
					<p class="flow-text">Bienvenido <?php echo $_SESSION['nombre']; ?></p>
					<!-- lorem 20-->
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex exercitationem ratione impedit quia labore eveniet fugiat assumenda tempora ipsam sint.</p>
				</blockquote>
				<div class="col s12">
					<h5 class="blue-text center section">Servicios Disponibles</h5>
				</div>
				<div class="col s6 m4">
			      <div class="card hover-card">
			          <div class="card-image">
			            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
			          </div>
			          <div class="card-content">
									<span class="card-title center blue-text">Mantenimiento Web</span>
									<!-- lorem -->
			            <p class="font-11">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
									<br>
									<a href="#" class="right precio"><i>Precio: $50 / mes</i></a>
			          </div>
			          <div class="card-action">
			            <a href="#"><i class="material-icons">add_shopping_cart</i>Contractar</a>
			          </div>
			      </div>
				</div>

				<div class="col s6 m4">
			        <div class="card hover-card">
			          <div class="card-image">
			            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
			          </div>
			          <div class="card-content">
			            <span class="card-title center blue-text">Desarrollo Web</span>
			            <p class="font-11">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
									<br>
									<a href="#" class="right precio"><i>Precio: $50 / mes</i></a>
			          </div>
			          <div class="card-action">
			            <a href="#"><i class="material-icons">add_shopping_cart</i>Contractar</a>
			          </div>
			        </div>
				</div>

				<div class="col s6 m4">
			        <div class="card hover-card">
			          <div class="card-image">
			            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
			          </div>
			          <div class="card-content">
			            <span class="card-title center blue-text">Diseño Gráfico</span>
			            <p class="font-11">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
									<br>
									<a href="#" class="right precio"><i>Precio: $50 / mes</i></a>
			          </div>
			          <div class="card-action">
			            <a href="#"><i class="material-icons">add_shopping_cart</i>Contractar</a>
			          </div>
			        </div>
				</div>

				<div class="col s6 m4">
			        <div class="card hover-card">
			          <div class="card-image">
			            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
			          </div>
			          <div class="card-content">
			            <span class="card-title center blue-text">Marketing Digital</span>
			            <p class="font-11">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
									<br>
									<a href="#" class="right precio"><i>Precio: $50 / mes</i></a>
			          </div>
			          <div class="card-action">
			            <a href="#"><i class="material-icons">add_shopping_cart</i>Contractar</a>
			          </div>
			        </div>
				</div>

				<div class="col s6 m4">
			        <div class="card hover-card">
			          <div class="card-image">
			            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
			          </div>
			          <div class="card-content">
			            <span class="card-title center blue-text">Dearrollo Móvil.</span>
			            <p class="font-11">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
									<br>
									<a href="#" class="right precio"><i>Precio: $50 / mes</i></a>
			          </div>
			          <div class="card-action">
			            <a href="#"><i class="material-icons">add_shopping_cart</i>Contractar</a>
			          </div>
			        </div>
				</div>

				<div class="col s6 m4">
			        <div class="card hover-card">
			          <div class="card-image">
			            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
			          </div>
			          <div class="card-content">
			            <span class="card-title center blue-text">SEO</span>
			            <p class="font-11">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
									<br>
									<a href="#" class="right precio"><i>Precio: $50 / mes</i></a>
			          </div>
			          <div class="card-action">
			            <a href="#"><i class="material-icons">add_shopping_cart</i>Contractar</a>
			          </div>
			        </div>
				</div>
			</div>
		</section>
	</div>
	<script src="<?php echo dominio; ?>/main-account.js"></script>
</body>
</html>