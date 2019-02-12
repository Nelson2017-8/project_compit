<?php
    include_once "../../../../process/dominio.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php
    require_once "../../../_include/head_materialize.php";
 ?>
	<link rel="stylesheet" href="<?php echo dominio; ?>/lib/drozone/dropzone.css">
</head>
<body>
	<?php include_once '../../../_include/aside_left.php'; ?>
	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="col m12">
			<div class="cuerpo col s12">
				<h2 class="center" style="margin-top: 50px; margin-bottom: 30px";>Contractar Servicio de Desarrollo Web</h2>
				<div class="container" style="width: 95%;">
					<form id="preventDefault" action="<?php echo dominio; ?>/account/_include/auto_save.php">
						<div class="input-field col s12">
							<label>Escriba un nombre para Identificar el proyecto</label>
							<input type="text" name="name_project" id="name_p">
						</div>
						<div class="input-field col s12">
							<label>Escriba la URL del dominio si ya compro uno, sino seleccione incluir dominio</label>
							<input type="url" name="dominio">
						</div>
						<div class="input-field col s12">
							<label>Describa brevemente su proyecto</label>
							<textarea name="description" class="precagar materialize-textarea"></textarea>
						</div>
						<div class="input-field col s12">
							<label>
								<input type="checkbox" class="precagar" name="desing_logo">
								<span>Incluir diseño de Logo (Marca Coporativa)</span>
							</label>
						</div>
						<div class="input-field col s12">
							<label>
								<input type="checkbox" class="precagar" name="incluirDominio">
								<span>Incluir Dominio</span>
							</label>
						</div>
						<div class="input-field col s12">
							<input type="hidden" name="type_servicie" id="servicie" value="DeveloperWeb">
							<p>&nbsp;</p>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="dropzone" class="col s12">
			<form action="<?php echo dominio; ?>/account/_include/subir_archivos.php" class="hid dropzone needsclick dz-clickable" id="demo-upload">
	  			<div class="dz-message needsclick">
	  				<font style="vertical-align: inherit;">
	  					<p style="font-weight: 600"><font style="vertical-align: inherit;">Suelta los archivos aquí o haz clic para cargarlos.</font></p>
	  				</font><br>
	    			<span class="note needsclick">
	    				<font style="vertical-align: inherit;">
	    					<font style="vertical-align: inherit;">Por favor, solo suba los archivos que desee incluir para elaborar el proyecto, no mayor de 2 MB.</font>
	    				</font>
	    			</span>
	  			</div>
			</form>
		</div>
		<div class="col m12">
			<div class="cuerpo col s12">
				<form id="preventDefault" action="<?php echo dominio; ?>/account/_include/auto_save.php">
					<div class="container" style="width: 95%">
						<div class="input-field col s12">
							<input type="button" id="enviar" value="Salir y Guardar" class="btn blue col s12 my-20">
							<input type="hidden" name="end" id="end">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="msj"></div>
	</section>
	<?php include_once '../../../_include/section_body_fin.php'; ?>
	<script src="<?php echo dominio; ?>/js/account/auto_save.js"></script>
	<script src="<?php echo dominio; ?>/lib/drozone/dropzone.js"></script>
</body>
</html>