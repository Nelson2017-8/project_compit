<?php  
	if (!empty($_POST)) {
		require_once "../process/procesos.php";
		$correo = $_POST['email'];
		$pass= md5($_POST['password']);
	    $loginTrue = login_adm($correo, $pass);
	    if ($loginTrue == true) {
	    	echo 'Login';
	    }else{
	    	echo 'ErrorLogin';
	    }
	}else{
		echo "Los campos no estan llenos";
	}
?>