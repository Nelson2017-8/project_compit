<?php
    include_once "../../../process/dominio.php";
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
		<nav>
			<div class="nav-wrapper blue">
				<div class="col s12 px-6">
					<a href="<?php echo $aCuenta; ?>" class="breadcrumb">Cuenta</a>
					<a href="<?php echo $aPanel; ?>" class="breadcrumb">Panel de Control</a>
					<a href="" class="breadcrumb">Solicitud de Presupuesto</a>
				</div>
			</div>
		</nav>
	<main class="row">
		<div class="container">
			<a href="#modal" class="btn waves-teal waves-effect modal-trigger">Iniciar Modal</a>
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
	</main>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>