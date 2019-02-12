<?php
	session_start();
	require_once "../procesos.php";
	$sql = new sql();
    $email = $_POST['email'];
	$password = md5($_POST['password']);
	if (isset($_POST['remember'])) {
		$remember = $_POST['remember'];
	}
	if ($sql->login($email, $password) === true) {
		echo 'Success';
	}else{
		echo 'Error';
	}
?>