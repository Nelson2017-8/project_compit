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
			<a href="<?php echo $aPanel; ?>" class="breadcrumb">Panel de Control</a>
			<a href="" class="breadcrumb">Carrito de Compras</a>
		</div>
	</div>
</nav>

<?php



  	if(isset($_GET['add'])){
  		$servicio = $_GET['add'];
  		?>





<section class="row">
	<div class="section container w-90">

		<div class="col m12">
			<p>Añadir al Carrito de Compra</p>
			<div class="card">
				<div class="card-content">
					<div class="">
						<div class="factura">
							<p>Servcio de <?php echo $servicio; ?></p>
							<form action="#">
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur reiciendis eligendi dolor ducimus, quos harum! Qui veritatis harum asperiores, placeat beatae odio aliquid. Ab error quas fuga nihil, optio debitis!</p> -->
								<div class=""><input type="text" placeholder="Nombre del Proyecto"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>








  		<?php
 	}else{
 ?>
<section class="row">
	<div class="section container w-90">
		<div class="col m4">
		<p>Soporte</p>
			<div class="card">
				<div class="card-content">
					<div class="chat-card">
						<p>Administradores</p>
						<hr>
						<div class="container-img-chat">
							<img src="<?php echo dominio; ?>/img/people/portrait1.jpg" alt="">
							<small>Ana Paula <br><span>Programadora</span></small>
						</div>
						<div class="container-img-chat">
							<img src="<?php echo dominio; ?>/img/people/portrait2.jpg" alt="">
							<small>Angel León<br><span>Diseñador</span></small>
						</div>
						<div class="container-img-chat">
							<img src="<?php echo dominio; ?>/img/people/portrait3.jpg" alt="">
							<small>Carolina Pérez <br><span>SEO</span></small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col m8">
			<p>Datos del Usuario</p>
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
			<p>Factura de compra</p>
			<div class="card">
				<div class="card-content">
					<div class="">
						<!-- <p>No hay ningún servicio contractado. <a href="<?php echo $aServicio; ?>">Seleccione un servicio entre nuestra lista</a> o consulte la <a href="<?php echo $aPrecios; ?>">lista de precios</a></p> -->

						<div class="factura">
							<div class="search-content">
								<div class="search">
							        <div class="search-wrapper">
							            <input id="search" placeholder="Search"><i class="material-icons">search</i>
							            <div class="search-results"></div>
							       </div>
							    </div>
							</div>
							<table>
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre del Producto</th>
										<th>Tipo de Servicio</th>
										<th>Tiempo de Elaboración</th>
										<th>Monto</th>
										<th>Pagar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#1</td>
										<td>Banner</td>
										<td>Diseño Gráfico</td>
										<td>5 días</td>
										<td>$100</td>
										<td><a href="#" class="btn blue waves-effect waves-light">Pagar</a></td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col m12">
			<p>Datos Técnicos</p>
			<div class="card">
				<div class="card-content">
					<div class="">
						<!-- <p>No hay ningún servicio contractado. <a href="<?php echo $aServicio; ?>">Seleccione un servicio entre nuestra lista</a> o consulte la <a href="<?php echo $aPrecios; ?>">lista de precios</a></p> -->
						<div class="search-content">
							<div class="search">
							    <div class="search-wrapper">
							        <input id="search" placeholder="Search"><i class="material-icons">search</i>
							        	<div class="search-results"></div>
							    </div>
							</div>
						</div>
						<table>
							<thead>
								<tr>
									<th>ID del Producto</th>
									<th>Forma de Pago</th>
									<th>Cantidad solicitada</th>
									<th>Estado</th>
									<th>Pagar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>#1</td>
									<td>PayPal</td>
									<td>1</td>
									<td>Pagando</td>
									<td><a href="#" class="btn blue waves-effect waves-light">Pagar</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



	<?php include_once '../_include/section_body_fin.php'; ?>

	<script src="<?php echo dominio; ?>/js/account/actualizarDatos.js"></script>
</body>
</html>

<?php
  	}
 ?>