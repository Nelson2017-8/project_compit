<?php
    include_once "../../../process/dominio.php";
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php include_once '../../_include/aside_left.php'; ?>
	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="col m12">
			<div class="cuerpo">
				<h2 class="center" style="margin-top: 30px";>Pedir un Presupuesto</h2>
				<div class="container" style="width: 95%">
					<p>Bienvenido <?php echo $_SESSION['nombre'] ; ?> aquí usted podrás consultar un presupuesto, para elaborar cualquier proyecto totalmente gratis, sin costos adicionales.</p>
					<p>&nbsp;</p>
					<p class="grey-text center">Rellene el siguiente formulario para procesar su pedido</p>
					<form action="">
						<div class="input-field">
							<label>Describa su proyecto</label>
							<textarea required class="materialize-textarea"></textarea>
						</div>
						<div class="input-field">
							<label>Describa el alcance de su proyecto</label>
							<textarea required class="materialize-textarea"></textarea>
						</div>
						<div class="input-field">
							<label>Describa un tiempo estimado para su elaboración</label>
							<textarea required class="materialize-textarea"></textarea>
						</div>
						<input type="submit" class="btn blue" value="Consultar Presupuesto">
						<p>&nbsp;</p>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>