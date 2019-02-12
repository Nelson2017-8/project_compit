<?php
    require_once "../process/dominio.php";
  	require_once "../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<html>
<head>
<?php require_once "./_include/head_materialize.php";?>
</head>
<body class="has-fixed-sidenav">
	<?php include_once '_include/header.php'; ?>
	<div class="row">
		<nav>
			<div class="nav-wrapper blue">
				<div class="col s12">
					<a href="<?php echo $aCuenta; ?>" class="breadcrumb">Cuenta</a>
					<a href="<?php echo $aPanel; ?>" class="breadcrumb">Panel de Control</a>
				</div>
			</div>
		</nav>
		<section class="col s12">
			<div class="container">
				<blockquote class="white">
					<p class="flow-text">Bienvenido <?php echo $_SESSION['nombre']; ?></p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolore doloribus doloremque tempore ad? Itaque ex ad beatae a, magni eos ab necessitatibus hic nobis ipsum adipisci recusandae, deleniti tempore, quam nesciunt, atque assumenda quisquam.
				</blockquote>
				<div class="col s12">
					<h5 class="blue-text center section">Servicios Disponibles</h5>
				</div>
				<?php require_once "_include/services-home.php"; ?>
			</div>
		</section>
	</div>
	<?php include_once '_include/section_body_fin.php'; ?>
</body>
</html>