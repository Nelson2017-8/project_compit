<?php
	require_once "../procesos.php";
	if (!empty($_POST['email'])) {
		$correo = $_POST['email'];
		$sql = new sql();
		$resultado = $sql->buscar("SELECT * FROM clientes WHERE Correo = '".$correo."'");
		if ($resultado === true) {
			echo 'ocupado';
		}else{
			echo 'disponible';
		}
			// BaseDatos::desconectar();
	}
?>