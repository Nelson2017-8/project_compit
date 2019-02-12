<?php 
    include_once "../../../process/procesos.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compit Web</title>
	<link rel="icon" href="https://compitweb.com/img/logo/compitweb-logo-min.png">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://compitweb.com/css/account/compitweb.css">
	<link rel="stylesheet" href="https://compitweb.com/fonts/themify/themify-icons.css">
</head>
<body class="row">
	<?php include_once '../_include/aside_left.php'; ?>
	<?php include_once '../_include/section_body.php'; ?>
		<?php
			$user = $_SESSION['id-adm'];
	        function consulta($user){
	            $query = "SELECT * FROM roots WHERE id = '".$user."'";
	            $consulta = mysqli_query(conectar(), $query);
	            if ($row = mysqli_fetch_array($consulta)) {
	                $_SESSION['telefono-adm'] = $row['telefono'];
	                $_SESSION['estado-adm'] = $row['estado'];
	                $_SESSION['pais-adm'] = $row['pais'];
	                $_SESSION['correo-adm'] = $row['correo'];
	                $_SESSION['direccion-adm'] = $row['direccionResidencia'];
	                $_SESSION['natalidad-adm'] = $row['dateNatalidad'];
	                $_SESSION['sexo-adm'] = $row['sexo'];
	                $_SESSION['ci-adm'] = $row['cedulaPasaporte'];
	                $_SESSION['curriculo-adm'] = $row['curriculo'];
	                $_SESSION['sueldo-adm'] = $row['sueldo'];
	                $_SESSION['profesion-adm'] = $row['profesionalidad'];

	                $_SESSION['tipoEmpleo-adm'] = $row['tipoEmpleo'];
	                $_SESSION['modalidad-adm'] = $row['modalidad'];
	                $_SESSION['cargo-adm'] = $row['cargo'];
	                $_SESSION['departamento-adm'] = $row['departamento'];
	                $_SESSION['habilidades-adm'] = $row['habilidades'];
	                $_SESSION['paypal-adm'] = $row['paypal'];

	            } else { 
	                echo "No hay consulta"; 
	            } 
	        }
	        consulta($user);
		  ?>
		<div class="col m12">
			<div class="cuerpo col s12">
				<h2 class="center" style="margin: 30px 0";>Configuración de la Cuenta</h2>
				<div class="container" style="width: 90%">
					<div class="col s12">
						<p class="grey-text">Datos de la cuenta</p>
					</div>
					<div class="col m6 s12 lh">
						<p class="small grey-text">Nombre:</p>
						<p><?php echo $_SESSION['nombre-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Correo:</p>
						<p><?php echo $_SESSION['correo-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Fecha de Nacimiento:</p>
						<p><?php echo $_SESSION['natalidad-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Teléfono:</p>
						<p><?php echo $_SESSION['telefono-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Cédula o Pasaporte:</p>
						<p><?php echo $_SESSION['ci-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Sexo:</p>
						<p><?php echo $_SESSION['sexo-adm']; ?></p>
					</div>

					<div class="col s12 m6 lh">
						<p class="small grey-text">País:</p>
						<p><?php echo $_SESSION['pais-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Estado:</p>
						<p><?php echo $_SESSION['estado-adm']; ?></p>
					</div>
					<div class="col s12 m12 lh">
						<p class="small grey-text">Dirección:</p>
						<p><?php echo $_SESSION['direccion-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Aptitudes:</p>
						<p><a class="openId" href="./aptitudes/?linkJson=<?php echo $_SESSION['habilidades-adm']; ?>">Ver Habilidades</a></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Curriculo:</p>
						<p><a class="openId" href="./curriculo/?doc=<?php echo $_SESSION['curriculo-adm']; ?>">Ver Curriculo</a></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Sueldo:</p>
						<p><?php echo "$".$_SESSION['sueldo-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Profesión:</p>
						<p><?php echo $_SESSION['profesion-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Tipo Empleo:</p>
						<p><?php echo $_SESSION['tipoEmpleo-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Modalidad:</p>
						<p><?php echo $_SESSION['modalidad-adm']; ?></p>
					</div>
					<div class="col s12 m6 lh">
						<p class="small grey-text">Paypal:</p>
						<p><?php if ($_SESSION['paypal-adm'] == "") {$paypal = "No has registrado ninguna"; }else{$paypal = $_SESSION['paypal-adm']; } echo $paypal; ?></p>
					</div>
					
					
					<div class="col s12" style="margin-bottom: 40px">
						<a href="#" id="changerData" class="blue-text grey-text">Agregar / Cambiar Datos</a>
					</div>
					<form id="data" class="hid">
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cuenta de Paypal:</p>
							<p><input type="email" name="add_paypal" id="add_paypal" placeholder="Agregar / Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text"> Cambiar Teléfono:</p>
							<p><input type="tel" name="add_telefono" id="add_telefono" placeholder="Cambiar Teléfono"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Correo:</p>
							<p><input type="email" name="changer_email" id="changer_email" placeholder="Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Dirección:</p>
							<p><input type="text" name="changer_direccion" id="changer_direccion" placeholder="Cambiar"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Contraseña:</p>
							<p><input type="password" name="old_password" id="old_password" placeholder="Contraseña Actual"></p>
						</div>
						<div class="col s12 m6 lh">
							<p class="small grey-text">Cambiar Contraseña:</p>
							<p><input type="password" name="new_password" id="new_password" placeholder="Contraseña Nueva"></p>
						</div>
						<div class="col s12 mb-40">
							<input type="submit" value="Guardar" class="btn blue">
						</div>
					</form>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	<?php include_once '../_include/section_body_fin.php'; ?>	
	<script>
		$("#changerData").click(function() {
			$("#data").fadeToggle(400);
		});
		$(".openId").click(function(event) {
			event.preventDefault();
			var link = $(this).attr('href');
			window.open(link);
		});
	</script>
	<script src="https://compitweb.com/js/adm/update-data.js"></script>
</body>
</html>