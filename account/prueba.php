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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?php echo dominio; ?>/fonts/themify/themify-icons.css">
	<?php require_once "../inc/materialize.php"; ?>
	<link rel="stylesheet" href="<?php echo dominio; ?>/style-account.css">

</head>
<body>
	<div class="navbar-fixed">
		<nav class="nav-wrapper grey darken-4">
			<div class="container">
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
		<li><a href="#"><i class="material-icons">add_shopping_cart</i>Carrito</a></li>
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

	<section class="row">

		<section class="col m9 s12 section">
			<div class="col s12">
				<div class="container" style="margin-top: 5em">
					<h2>Contenido</h2>
				</div>
			</div>
			<div class="col s12">
				<article class="section">
					<div class="container" style="width: 90%">
						<h4 id="paso1" class="scrollspy blue-text"><i class="material-icons pr-3">school</i>Titulo 1</h4>

						<p align="justify" class="grey-text text-darken-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni. Animi error, velit excepturi, nam ullam libero minus eum, voluptate minima, commodi blanditiis dolor assumenda in adipisci ipsa officia explicabo amet dignissimos! Fuga at sequi eligendi voluptas laboriosam error magni, similique consectetur eius omnis ipsam, porro molestias quos excepturi nulla esse voluptate a qui commodi unde, magnam, deserunt! Dolor voluptas doloremque aspernatur eum laborum ab dignissimos iste laboriosam dolores doloribus inventore ratione sequi nisi magnam aliquam officia, ipsum consequatur dolorum blanditiis magni voluptatem aliquid quos quis incidunt! Mollitia nemo doloremque eveniet temporibus molestiae blanditiis inventore consectetur ab autem ipsum non, sit distinctio. Reiciendis cum repudiandae esse quam earum a autem libero modi similique voluptate. Laborum eveniet totam rerum amet!</p>
					</div>
				</article>
				<article class="section">
					<div class="container" style="width: 90%">
						<h4 id="paso2" class="scrollspy blue-text"><i class="material-icons pr-3">school</i>Titulo 2</h4>

						<p align="justify" class="grey-text text-darken-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni. Animi error, velit excepturi, nam ullam libero minus eum, voluptate minima, commodi blanditiis dolor assumenda in adipisci ipsa officia explicabo amet dignissimos! Fuga at sequi eligendi voluptas laboriosam error magni, similique consectetur eius omnis ipsam, porro molestias quos excepturi nulla esse voluptate a qui commodi unde, magnam, deserunt! Dolor voluptas doloremque aspernatur eum laborum ab dignissimos iste laboriosam dolores doloribus inventore ratione sequi nisi magnam aliquam officia, ipsum consequatur dolorum blanditiis magni voluptatem aliquid quos quis incidunt! Mollitia nemo doloremque eveniet temporibus molestiae blanditiis inventore consectetur ab autem ipsum non, sit distinctio. Reiciendis cum repudiandae esse quam earum a autem libero modi similique voluptate. Laborum eveniet totam rerum amet!</p>
					</div>
				</article>
				<article class="section">
					<div class="container" style="width: 90%">
						<h4 id="paso3" class="scrollspy blue-text"><i class="material-icons pr-3">school</i>Titulo 3</h4>

						<p align="justify" class="grey-text text-darken-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni. Animi error, velit excepturi, nam ullam libero minus eum, voluptate minima, commodi blanditiis dolor assumenda in adipisci ipsa officia explicabo amet dignissimos! Fuga at sequi eligendi voluptas laboriosam error magni, similique consectetur eius omnis ipsam, porro molestias quos excepturi nulla esse voluptate a qui commodi unde, magnam, deserunt! Dolor voluptas doloremque aspernatur eum laborum ab dignissimos iste laboriosam dolores doloribus inventore ratione sequi nisi magnam aliquam officia, ipsum consequatur dolorum blanditiis magni voluptatem aliquid quos quis incidunt! Mollitia nemo doloremque eveniet temporibus molestiae blanditiis inventore consectetur ab autem ipsum non, sit distinctio. Reiciendis cum repudiandae esse quam earum a autem libero modi similique voluptate. Laborum eveniet totam rerum amet!</p>

					</div>
				</article>
			</div>
		</section>

		<aside class="col m3 p-0">
			<div class="pinned hide-on-med-and-down">
				<div class="section w-90" style="margin: 0 auto">
					<h4 class="flow-text">Contenido</h4>
					<div class="">
						<ul class="tags table-of-contents">
							<li><a href="#paso1">Paso1</a></li>
							<li><a href="#paso2">Paso2</a></li>
							<li><a href="#paso3">Paso3</a></li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
	</section>


	<script src="<?php echo dominio; ?>/main-account.js"></script>
</body>
</html>