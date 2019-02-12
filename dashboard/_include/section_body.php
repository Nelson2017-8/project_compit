<?php
	/*
	Requiere de una variable $banner_publicitario poibles valores a tomar
		"desarrolloWeb";
		"desingWeb";
		"desing";
		"mantenimientoWeb";
	y pasar el html a incluir
	*/
?>
<!--  end -->
<?php
	function printBadge($id)
	{
		$query = "SELECT * FROM notificaciones_user WHERE user_id = '".$id."' and leido = '0' ";
		$conexion = mysqli_query(BaseDatos::conectar(), $query);
		if ($row = mysqli_num_rows($conexion)) {
			echo '<span class="np-badge">'.$row.'</span>';
		}else{
			// echo 0;
		}
	}
 ?>
	<section class="col s12 left" id="addClass" style="padding:  0 3em;">
		<header class="header grey darken-4">
			<div class="header-left">
				<p id="menu-sidebar" class="sidenav-trigger" data-target="menu-side"><i class="material-icons">menu</i></p>
				<p><?php echo $_SESSION['nombre']; ?></p>
			</div>
			<ul class="header-right">
				<li><a class="dropdown-main" data-target="notifications" href="#"><i class="material-icons">notifications</i><?php printBadge($_SESSION['id']); ?></a></li>
				<li><a class="dropdown-main" data-target="account" href="#"><i class="material-icons">account_circle</i></a></li>
			</ul>
			<!-- estructura notifications -->
			<ul id="notifications" class="dropdown-content">
				<?php
					function consulta_notification($id){
						$query = "SELECT * FROM notificaciones_user WHERE user_id = '".$id."' and leido = '0' ORDER BY fecha DESC ";
						$conexion = mysqli_query(BaseDatos::conectar(), $query);
						if ($row = mysqli_fetch_array($conexion)) {
							do{
								echo '<li><a href="'.$row['link'].'">'.$row['titulo'].'</a></li>';
							}while($row = mysqli_fetch_array($conexion) );

						}else{
							echo '<li><a href="#">No tienes notificaciones que mostrar</a></li>';
						}
					}
					consulta_notification($_SESSION['id']);
				?>
			</ul>
			<!-- estructura account -->
			<ul id="account" class="dropdown-content">
				<li><a href="<?php echo dominio; ?>/account/proyecto/proceso/">Proyectos</a></li>
				<li><a href="<?php echo dominio; ?>/account/cuenta/">Cuenta</a></li>
				<li><a href="<?php echo dominio; ?>/process/cerrar_session.php">Cerrar Sessión</a></li>
			</ul>
		</header>
		<p>&nbsp;</p>
		<?php if ($banner_publicitario === "desarrolloWeb"): ?>
		<!-- banner publicitario -->
		<div class="mt-banner col s12">
		    <div class="card horizontal">
		        <a href="<?php echo dominio; ?>/account/servicios/desarrollo_web/" class="card-image">
		            <img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="portafolio">
		        </a>
		        <a href="<?php echo dominio; ?>/account/servicios/desarrollo_web/" class="card-content black-text">
		           	<p class="t-b">Servicio de Desarrollo web</p>
		           	<br>
		           	<!-- lorem de 30 -->
		           	<p>El servicio de desarrollo web permite la creación y elaboraciones de plataforma o aplicaciones online, ofrecemos los mejores programadores web listo para cumplir con sus necesidades, tenemos especialistas en diversas áreas desde bases de datos SQL y NoSQL hasta múltiples lenguajes de programación...</p>
		         </a>
		    </div>
		</div>
		<?php endif ?>
		<?php if ($banner_publicitario === "desingWeb"): ?>
		<!-- banner publicitario -->
		<div class="mt-banner col s12">
		    <div class="card horizontal">
		        <a href="<?php echo dominio; ?>/account/servicios/desing_web/" class="card-image">
		            <img src="<?php echo dominio; ?>/img/portfolio/4.jpg" alt="portafolio">
		        </a>
		        <a href="<?php echo dominio; ?>/account/servicios/desing_web/" class="card-content black-text">
		           	<p class="t-b">Servicio de Diseño web</p>
		           	<br>
		           	<!-- lorem de 30 -->
		           	<p>El servicio de Diseño web permite la creación y elaboraciones de páginas web, creamos páginas web con interfaces interactivas, 100% optimizadas para la web 2.0 y con el mejor rendimiento en los navegadores web modernos. Somos profesionales en el área y contamos con garantía de 1 año...</p>
		         </a>
		    </div>
		</div>
		<?php endif ?>
		<?php if ($banner_publicitario === "desing"): ?>
		<!-- banner publicitario -->
		<div class="mt-banner col s12">
		    <div class="card horizontal">
		        <a href="<?php echo dominio; ?>/account/servicios/desing/" class="card-image">
		            <img src="<?php echo dominio; ?>/img/portfolio/7.jpg" alt="portafolio">
		        </a>
		        <a href="<?php echo dominio; ?>/account/servicios/desing/" class="card-content black-text">
		           	<p class="t-b">Servicio de Diseño Gráfico</p>
		           	<br>
		           	<!-- lorem de 30 -->
		           	<p> Creamos diseños, maquetas, animaciones y más. Somos creativos, únicos, con experiencia en el área, nos encargamos de realizar un trabajo 100% profesional, con garantía de 1 año. Tenemos los mejores profesionales en el área listo para cumplir tus necesidades con garantía incluida. </p>
		         </a>
		    </div>
		</div>
		<?php endif ?>
		<?php if ($banner_publicitario === "mantenimientoWeb"): ?>
		<!-- banner publicitario -->
		<div class="mt-banner col s12">
		    <div class="card horizontal">
		        <a href="<?php echo dominio; ?>/account/servicios/web/" class="card-image">
		            <img src="<?php echo dominio; ?>/img/portfolio/6.jpg" alt="portafolio">
		        </a>
		        <a href="<?php echo dominio; ?>/account/servicios/web/" class="card-content black-text">
		           	<p class="t-b">Servicio de Mantenimiento web</p>
		           	<br>
		           	<!-- lorem de 30 -->
		           	<p>El servicio de mantenimiento web es para aquellas clientes que ya tenga una sitio web ya creado y deseen algunas modificaciones, resolución de problemas y más. Este servicio ofrece asesoramiento, actualizaciones a la web, limpiezas, depuraciones, eliminación de virus del servidor...</p>
		         </a>
		    </div>
		</div>
		<?php endif ?>