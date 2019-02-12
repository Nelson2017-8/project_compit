<?php
	require_once "../../../process/dominio.php";
	require_once "../../../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../../_include/head_materialize.php";?>
</head>
<body class="has-fixed-sidenav">
	<?php include_once '../../_include/header.php'; ?>
	<div class="row">
		<nav>
			<div class="nav-wrapper blue">
				<div class="col s12">
					<a href="<?php echo $aCuenta; ?>" class="breadcrumb">Cuenta</a>
					<a href="<?php echo $aPanel; ?>" class="breadcrumb">Panel de Control</a>
					<a href="" class="breadcrumb">Tus proyectos</a>
				</div>
			</div>
		</nav>
		<div class="container w-90">
			<div class="section">
				<p class="flow-text"><b>Tus Proyectos</b></p>
				<hr>

			<?php require_once "../../_include/function.php"; show_table('proyectoProgress');?>
			</div>
		</div>

	</div>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>