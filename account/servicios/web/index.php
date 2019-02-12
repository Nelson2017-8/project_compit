<?php
	require_once "../../../process/dominio.php";
	require_once "../../../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../../_include/head_materialize.php"; ?>
</head>
<body>
	<?php include_once '../../_include/aside_left.php'; ?>
	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="col m12">
			<div class="cuerpo col s12">
				<h2 class="center" style="margin-top: 50px; margin-bottom: 30px";>Mantenimiento Web</h2>
				<div class="col m4">
					<img src="<?php echo dominio ?>/img/portfolio/6.jpg" alt="Mantenimiento Web-compitWeb" style="border:1px solid #F5F5F5; border-radius: 4px" class="responsive-img">
				</div>
				<div class="col m7">
					<p style="margin-top: 0;">El servicio de mantenimiento web es para aquellas clientes que ya tenga una sitio web ya creado y deseen algunas modificaciones, resolución de problemas y más. Este servicio ofrece asesoramiento, actualizaciones a la web, limpiezas, depuraciones, eliminación de virus del servidor, migraciones, gestión de web, administración del sitio y más. </p>
				</div>
				<div class="col s12 mt-20 mb-40">
					<p>Si tienes cualquier sitio web, plataforma online o aplicación en la nube, y tienes que realizar cualquier actualización o cambio, entonces, este servicio es para ti, nos adaptamos a las necesidades del público, ofrecemos garantía por 1 año en todos nuestros servicios, puedes consultar más a detalles las áreas que abarca este servicio. </p>
						<?php
							require_once "../../_include/function.php";
							show_table('precioMantenimineto');
						?>
					<div class="col s12 my-20">
						<a href="<?php echo dominio ?>/account/servicios/web/contractar" class="btn blue white-text">Contractar servicio</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php include_once '../../_include/section_body_fin.php'; ?>
	<script>
		$("#changerData").click(function() {
			$("#data").fadeToggle(400);
		});
	</script>
</body>
</html>