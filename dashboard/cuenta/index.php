<?php
    include_once "../../process/dominio.php";
	require_once "../../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../_include/head_materialize.php";?>
</head>
<body  class="has-fixed-sidenav grey lighten-4">
	<?php include_once '../_include/header.php';
		require_once "../_include/function.php";
		dataUser();
	?>
<nav>
	<div class="nav-wrapper blue">
		<div class="col s12 px-6">
			<a href="<?php echo $aCuenta; ?>" class="breadcrumb">Cuenta</a>
		</div>
	</div>
</nav>
<section class="row">
	<div class="section container w-90">
		<p>Cuenta de Usuario</p>
		<div class="col m4">
			<div class="card">
				<div class="card-content">
					<div class="chat-card">
						<p>Administradores</p>
						<hr>
						<div class="container-img-chat">
							<img src="../../img/people/portrait1.jpg" alt="">
							<small>Ana Paula <br><span>Programadora</span></small>
						</div>
						<div class="container-img-chat">
							<img src="../../img/people/portrait2.jpg" alt="">
							<small>Angel León<br><span>Diseñador</span></small>
						</div>
						<div class="container-img-chat">
							<img src="../../img/people/portrait3.jpg" alt="">
							<small>Carolina Pérez <br><span>SEO</span></small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col m8">
			<div class="card">
				<div class="card-content">
					<div class="">
						<p>Datos del Usuario</p>
						<hr>
						<div class="services-card">
							<table class="striped highlight responsive-table">
								<tbody>
									<tr>
										<th>Nombre:</th>
										<td><?php echo $_SESSION['nombre']; ?></td>
									</tr>
									<tr>
										<th>Correo:</th>
										<td><?php echo $_SESSION['email']; ?></td>
									</tr>
									<tr>
										<th>País:</th>
										<td><?php echo $_SESSION['pais']; ?></td>
									</tr>
									<tr>
										<th>Telefono:</th>
										<td><?php echo $_SESSION['telefono']; ?></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="col m12">
			<div class="card">
				<div class="card-content">
					<div class="">
						<p>Servicios Contractados</p>
						<hr>
						<p>No hay ningún servicio contractado. <a href="<?php echo $aServicio; ?>">Seleccione un servicio entre nuestra lista</a> o consulte la <a href="<?php echo $aPrecios; ?>">lista de precios</a></p>
					</div>
				</div>
			</div>
		</div>
	<a class="" href="#"> <i class="material-icons" style="position: relative;top: 3px; font-size: 16px">arrow_drop_down</i>Opciones Avanzadas</a>
	<!-- <a class="btn-floating pulse"><i class="material-icons">menu</i></a> -->
	</div>
</section>

<section class="container">
	<div class="row section">
		<div class="col s12">
			<!-- <div class="card"> -->
				<!-- <div class="card-content"> -->


				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
  </section>

	<?php include_once '../_include/section_body_fin.php'; ?>

	<script src="<?php echo dominio; ?>/js/account/actualizarDatos.js"></script>
</body>
</html>