<?php  
	include_once "procesos.php";
	session_start();
	SQL_update("roots", "stacteLogin = 0", "id = '".$_SESSION['id']."'");
	session_destroy();
	session_unset();
	header("location: http://www.compitweb.com/");

	// PHP Class

	// include_once "procesos_classs.php";
	// session_start();
	// $close = new SQL;
	// $close->update("clientes", "Activo = 0", "Id_clientes = '".$_SESSION['id']."'");
	// session_destroy();
	// session_unset();
	// header("location: http://www.compitweb.com/");
?>