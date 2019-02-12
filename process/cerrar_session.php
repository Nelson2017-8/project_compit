<?php
	require_once "procesos.php";
	require_once "dominio.php";
	session_start();
	$sql = new sql();
	$sql->update("clientes", "Activo = 0", "Id_clientes = '".$_SESSION['id']."'");
	session_destroy();
	session_unset();
	header("location:".dominio);

?>