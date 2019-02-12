<?php
    require_once "../../process/dominio.php";
  	require_once "../../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<html>
<head>
<?php require_once "../_include/head_materialize.php";?>
</head>
<body class="has-fixed-sidenav white">
	<?php include_once '../_include/header.php'; ?>

		<nav>
			<div class="nav-wrapper blue">
				<div class="col s12 px-6">
					<a href="<?php echo $aCuenta; ?>" class="breadcrumb">Cuenta</a>
					<a href="<?php echo $aPanel; ?>" class="breadcrumb">Panel de Control</a>
					<a href="<?php echo $aServicio; ?>" class="breadcrumb">Servicios</a>
				</div>
			</div>
		</nav>
	<div class="row">
		<div class="col s12">
			<div class="section container">
				<blockquote>Nuestros Mejores Servicios, ya estan disponibles aquí. Tenemos <a href="<?php echo $aPrecios; ?>">los mejores Precios</a> del mercado.</blockquote>
				<p class="flow-text"><small class="blue-text">Promociones Disponibles</small></p>
					<div class="col s12 m6 l6 xl4">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
								<a href="<?php echo $aCarritoDeveloperWeb; ?>" class="btn-floating halfway-fab waves-effect waves-light blue"> <i class="material-icons font-18">shopping_cart</i> </a>
							</div>
							<div class="card-content">
								<span class="font-10-responive text-uppercase center blue-text">Desarrollo Web</span>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l6 xl4">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
								<a href="<?php echo $aCarritoDesing; ?>" class="btn-floating halfway-fab waves-effect waves-light blue"> <i class="material-icons font-18">shopping_cart</i> </a>
							</div>
							<div class="card-content">
								<span class="font-10-responive text-uppercase center blue-text">Diseño Gráfico</span>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l6 xl4">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
								<a href="<?php echo $aCarritoMantenimiento; ?>" class="btn-floating halfway-fab waves-effect waves-light blue"> <i class="material-icons font-18">shopping_cart</i> </a>
							</div>
							<div class="card-content">
								<span class="font-10-responive text-uppercase center blue-text">Manteniento</span>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l6 xl4">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
								<a href="<?php echo $aCarritoDeveloperMobile; ?>" class="btn-floating halfway-fab waves-effect waves-light blue"> <i class="material-icons font-18">shopping_cart</i> </a>
							</div>
							<div class="card-content">
								<span class="font-10-responive text-uppercase center blue-text">Desarrollo Móvil</span>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l6 xl4">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
								<a href="<?php echo $aCarritoMarketing; ?>" class="btn-floating halfway-fab waves-effect waves-light blue"> <i class="material-icons font-18">shopping_cart</i> </a>
							</div>
							<div class="card-content">
								<span class="font-10-responive text-uppercase center blue-text">Marketing Digital</span>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l6 xl4">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="">
								<a href="<?php echo $aCarritoSeo; ?>" class="btn-floating halfway-fab waves-effect waves-light blue"> <i class="material-icons font-18">shopping_cart</i> </a>
							</div>
							<div class="card-content">
								<span class="font-10-responive text-uppercase center blue-text">SEO</span>
							</div>
						</div>
					</div>
					<div class="center section">
						<a href="#modal" class="modal-trigger btn waves-effect waves-light blue">Consultar Presupuesto</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal white" id="modal">
		<div class="modal-content">
			<p class="flow-text center">Pedir un Presupuesto</p>
			<form action="" class="container w-90">
				<div class="input-field">
					<label>Describa su proyecto</label>
					<textarea required class="materialize-textarea"></textarea>
				</div>
				<div class="input-field">
					<label>Describa un tiempo estimado para su elaboración</label>
					<textarea required class="materialize-textarea"></textarea>
				</div>
				<button type="submit" class="btn blue white-text waves-effect waves-light">Enviar</button>
			</form>
			<p>&nbsp;</p>
		</div>
	</div>
	<?php include_once '../_include/section_body_fin.php'; ?>
</body>
</html>