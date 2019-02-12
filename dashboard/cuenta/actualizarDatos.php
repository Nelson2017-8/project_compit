<?php 
    include_once "../../process/dominio.php";
    include_once "../../process/procesos.php";

	function consulta($user, $campo){
	    $query = "UPDATE clientes SET $campo WHERE Id_clientes = '".$user."'";
	    $consulta = mysqli_query(conectar(), $query);
	}
	// consulta($_SESSION['id'], $campo);
	if (isset($_POST['add_pais'])) {
		consulta($_SESSION['id'], "Pais = '".$_POST['add_pais']."'");
	}
	if (isset($_POST['add_estado'])) {
		consulta($_SESSION['id'], "Estado = '".$_POST['add_estado']."'");
	}
	if (isset($_POST['add_telefono'])) {
		consulta($_SESSION['id'], "Telefono = '".$_POST['add_telefono']."'");
	}
	if (isset($_POST['changer_email'])) {
		consulta($_SESSION['id'], "Correo = '".$_POST['changer_email']."'");
	}
?>

