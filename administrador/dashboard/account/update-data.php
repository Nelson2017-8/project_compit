<?php 
    include_once "../../../process/procesos.php";

	session_start();
	$user = $_SESSION['id-adm'];
	function update($user, $campo){
	    $query = "UPDATE roots SET $campo WHERE id = '".$user."' ";
	    $consulta = mysqli_query(conectar(), $query);
	}
	// consulta($campo);
	if (!empty($_POST['add_telefono'])) {
		update($user, "telefono = '".$_POST['add_telefono']."'");
	}
	if (!empty($_POST['add_paypal'])) {
		update($user, "paypal = '".$_POST['add_paypal']."'");
	}
	if (!empty($_POST['add_telefono'])) {
		update($user, "telefono = '".$_POST['add_telefono']."'");
	}
	if (!empty($_POST['changer_email'])) {
		update($user, "correo = '".$_POST['changer_email']."'");
	}
	if (!empty($_POST['changer_direccion'])) {
		update($user, "direccionResidencia = '".$_POST['changer_direccion']."'");
	}

	if ( !empty($_POST['old_password']) && !empty($_POST['new_password']) ) {
		echo $_POST['new_password']."\n".$_POST['old_password'];
		function inputPass($pass_old, $pass_new){
			$query = "SELECT * FROM roots WHERE password = '".md5($pass_old)."'";
	    	$consulta = mysqli_query(conectar(), $query);
	    	if ($row = mysqli_fetch_array($consulta)) {
	    		update($user, "password= '".md5($pass_new)."' ");
	    	}
		}
		inputPass($_POST['old_password'], $_POST['new_password']);
	}else{
		echo 'Error';
	}


// 	add_paypal
// add_telefono
// changer_email
// changer_direccion
// old_password
// new_password
?>

