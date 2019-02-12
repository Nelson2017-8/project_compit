	<div class="navbar-fixed">
		<nav class="nav-wrapper blue">
			<div class="container w-90">
				<a class="brand-logo logo-text" href="<?php echo dominio; ?>/account">
                  <img src="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" alt="">
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