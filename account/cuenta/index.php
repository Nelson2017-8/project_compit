<?php
    include_once "../../process/dominio.php";
    include_once "../../process/procesos.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../_include/head_materialize.php";?>
</head>
<body>
	<?php include_once '../_include/aside_left.php'; ?>

	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="col m12">
			<div class="cuerpo col s12">
				<h2 class="center" style="margin: 30px 0";>Configuración de la Cuenta</h2>
				<div class="container" style="width: 90%">
					<div class="col s12">
						<p class="grey-text">Datos de la cuenta</p>
					</div>
					<div class="col m6 s12 lh">
						<p class="small grey-text">Nombre:</p>
						<p><?php echo $_SESSION['nombre']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Correo:</p>
						<p><?php echo $_SESSION['correo']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Teléfono:</p>
						<p><?php echo $_SESSION['telefono']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">País:</p>
						<p><?php echo $_SESSION['pais']; ?></p>
					</div>
					<div class="col s12 my-20">
						<a href="#" id="changerData" class="blue-text grey-text">Agregar / Cambiar Datos</a>
					</div>
					<form id="data" class="hid">
						<div class="col s12 m6 lh">
							<p class="small grey-text">Agregar / Cambiar País:</p>
							<p><input type="text" name="add_pais" id="add_pais" placeholder="Agregar / Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Agregar / Cambiar Estado:</p>
							<p><input type="text" name="add_estado" id="add_estado" placeholder="Agregar / Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Agregar / Cambiar Teléfono:</p>
							<p><input type="tel" name="add_telefono" id="add_telefono" placeholder="Agregar / Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Correo:</p>
							<p><input type="email" name="changer_email" id="changer_email" placeholder="Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Contraseña:</p>
							<p><input type="password" name="old_password" id="old_password" placeholder="Contraseña Actual"></p>
							<small class="msj-old_password"></small>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Contraseña:</p>
							<p><input type="password" name="new_password" id="new_password" placeholder="Contraseña Nueva"></p>
							<small class="msj-new_password"></small>
						</div>
						<div class="col s12 mb-40">
							<input type="submit" value="Guardar" class="btn blue">
						</div>
					</form>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
  </section>

	<?php include_once '../_include/section_body_fin.php'; ?>
	<script>
		$("#changerData").click(function() {
			$("#data").fadeToggle(400);
		});
	</script>
	<script src="<?php echo dominio; ?>/js/account/actualizarDatos.js"></script>
</body>
</html>