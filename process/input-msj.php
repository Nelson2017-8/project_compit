<?php  
	session_start();
	include_once "procesos.php";
	$data = trim($_POST['input-data-msj']);
	if (isset($data) == true && $data != '') {
		$id = $_SESSION['id'];
		$fecha = date("Y-m-d H:i:s");
		SQL::general("INSERT mensajes (usuario_id, fecha, data) VALUES ('".$id."', '".$fecha."', '".$data."'); ");
	}else{
		echo "Ha ocurrido un error en el mensaje";
	}

?>