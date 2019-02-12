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
<body>
	<?php include_once '../../_include/aside_left.php'; ?>
	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="col m12">
			<div class="cuerpo col s12">
				<h2 class="center" style="margin-top: 50px; margin-bottom: 30px";>Desarrollo Web</h2>
				<div class="col m4">
					<img src="<?php echo dominio; ?>/img/portfolio/1.jpg" alt="Desarrollo Web compitWeb" style="border:1px solid #F5F5F5; border-radius: 4px" class="responsive-img">
				</div>
				<div class="col m7">
					<p style="margin-top: 0;">El servicio de desarrollo web permite la creación y elaboraciones de plataforma o aplicaciones online, ofrecemos los mejores programadores web listo para cumplir con sus necesidades, tenemos especialistas en diversas áreas desde bases de datos SQL y NoSQL hasta múltiples lenguajes de programación como PHP y Javascript</p>
				</div>
				<div class="col s12 mt-20 mb-40">
					<p>Creamos aplicaciones web dinámica, 100% código puro, con interfaz interativa y amigable al usuario. Tenemos garantía desde 1 año en adelante, manejamos múltiples lenguajes de programación, bases de datos, APIs, Framework y Librerías. Tenemos dominio en bases de datos SQL y NoSQL, también creamos y elaboramos APIs, Framework, Script (para usos especificos) de uso propio. Manejamos serivicos en la nube, y servidores a gran escala.</p>
					<p>Si deseas elaborar cualquier plataforma online online, nosotros lo realizamos, creamos Redes Sociales, Bancas en líneas, App de Geolocalicación, Repositorios online, Sitios de consumo Multimedio (como <a href="https:/youtube.com">Youtube</a>), Foros, Tiendas Online y más. Creamos y materializamos cualquier idea que se le ocurra para un proyecto online.</p>
					<div class="col s12 my-20">
						<a href="<?php echo dominio; ?>/account/servicios/desarrollo_web/contractar" class="btn blue white-text">Contractar servicio</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>