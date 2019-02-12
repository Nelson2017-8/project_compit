<?php
    require_once "../process/dominio.php";
    require_once "../process/procesos.php";
  	require_once "../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<html>
<head>
<?php require_once "./_include/head_materialize.php";?>
<link rel="stylesheet" href="./prueba-demo.css">
</head>
<body>
	<?php include_once '_include/aside_left.php'; ?>
		<section class="col m12 l9 offset-l3 offset-xl3 s12">
			<div class="container section w-90">
				<blockquote class="">
					<p class="flow-text">Bienvenido <?php echo $_SESSION['nombre']; ?></p>
					<!-- lorem 35-->
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolore doloribus doloremque tempore ad? Itaque ex ad beatae a, magni eos ab necessitatibus hic nobis ipsum adipisci recusandae, deleniti tempore, quam nesciunt, atque assumenda quisquam.
				</blockquote>
				<div class="col s12">
					<h5 class="blue-text center section">Servicios Disponibles</h5>
				</div>
				<?php require_once "_include/services-home.php"; ?>

			</div>
		</section>
	<?php include_once '_include/section_body_fin.php'; ?>
</body>
</html>