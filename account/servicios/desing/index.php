<?php
    include_once "../../../process/dominio.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php
    require_once "../../_include/head_materialize.php";
 ?>
	<link rel="stylesheet" href="<?php echo dominio; ?>/lib/drozone/dropzone.css">
</head>
<body class="row">
	<?php include_once '../../_include/aside_left.php'; ?>
	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="col m12">
			<div class="cuerpo col s12">
				<h2 class="center" style="margin-top: 50px; margin-bottom: 30px";>Diseño Gráfico</h2>
				<div class="col m4">
					<img src="<?php echo dominio;	 ?>/img/portfolio/7.jpg" alt="Diseño Gráfico-compitWeb" style="border:1px solid #F5F5F5; border-radius: 4px" class="responsive-img">
				</div>
				<div class="col m7">
					<p style="margin-top: 0;">Creamos diseños, maquetas, animaciones y más. Somos creativos, únicos, con experiencia en el área, nos encargamos de realizar un trabajo 100% profesional, con garantía de 1 año.</p>
					<p>Tenemos los mejores profesionales en el área listo para cumplir tus necesidades con garantía incluida.</p>
				</div>
				<div class="col s12 mt-20 mb-40">
					<p>Retocamos imágenes, creación de imágenes, ilustraciones, realizamos maquetas de todo tipo, hacemos montajes, creamos marcas corporativas, logos, iconos, diseños de camisetas, banner, creación de calendarios, anuncios publicitarios y más. Nuestro servicio de Diseño Gráfico, es pagado por hora y valorado en dólares. En la siguiente tabla podrás consultar un lista completa de precios de diseños específicos, donde muestra un promedio estándar del precios, este valor puede variar (aumentar o disminuir) dependiendo de la complejidad del diseño, la hora promedio estándar tiene un valor de 10$.</p>
					<?php
						require_once "../../_include/function.php";
						show_table('precioDesing');
						?>
					<div class="col s12 my-20">
						<a href="<?php echo dominio;?>/account/servicios/desing/contractar" class="btn blue white-text">Contractar servicio</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>