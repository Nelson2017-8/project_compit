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
					<a href="" class="breadcrumb">Lista de Precios</a>
				</div>
			</div>
		</nav>
	<div class="row">
		<div class="container w-90">
				<p class="flow-text"><b>Precios de servicios</b></p>
				<hr>
				<div class="justify">
					<!-- lorem 80 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos assumenda dicta officiis rerum impedit rem temporibus molestiae labore facere tempore, suscipit laborum? Magnam nobis, omnis ex ducimus, facilis pariatur saepe vitae numquam velit minus ea sapiente, eveniet corporis reiciendis necessitatibus tenetur sed ab esse quam ipsum. Suscipit corporis at in repudiandae magni dolore dolorem similique ab tempore voluptate, aut eveniet enim earum aliquid unde ex esse porro, provident animi, tenetur saepe repellendus nostrum adipisci. Dolor, aut iste? Id repudiandae, praesentium.</p>
				</div>
				<?php require_once "../../_include/function.php"; show_table("precioTable"); ?>
				<br>
		</div>
	</div>

	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>