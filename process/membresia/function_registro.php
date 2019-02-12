<?php
	require_once "../procesos.php";
	require_once "../dominio.php";
	$sql = new sql();
	$emailClass = new email();
	$token = new token();

	$pass_1 = $_POST['password_1'];
	$pass_2 = $_POST['password_2'];

    function very_pass($pass_1, $pass_2){

        if ($pass_1 != $pass_2) {
        	echo "Error password no coinciden";
        	return false;
        }
        return true;

    }

    if (empty($_POST)) {

    	echo "errorPOST";

    }

    else if ($pass_1 != "" && $pass_2 != "" && very_pass($pass_1, $pass_2) === true) {

    	$email = $_POST['email'];

    	// verifico que el email no este regitrado
		$resultado = $sql->buscar("SELECT * FROM clientes WHERE Correo = '".$email."'");

		if ($resultado === true) {

			echo 'NoDisponible'; // El usuario ya existe
			return false;

		}else {

			// $comentario = $_POST['comentario'];
			$codeEmail = $token->token_obtenToken(30);
	        $telefono = $_POST['phone'];
	        $pais = $_POST['pais'];
	        $descruento = $_POST['descuento'];
	        $password = md5($pass_1);
	        $fecha = date("Y-m-d H:i:s");

	    	$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$full_name = "$nombre $apellido";
	        $campos = "Nombre, Apellido, Correo, Pass, CodEmail, fechaRegistro, Telefono, Pais";
	        $values = "'".$nombre."', '".$apellido."',  '".$email."', '".$password."', '".$codeEmail."', '".$fecha."', '".$telefono."', '".$pais."'";


	        // --------------- comienzo el registro ------------------------------ //
	        $tabla = "clientes";
	        $insertar = $sql->insertar($tabla, $campos, $values); // insertamos datos en el formulario
	        if ($insertar === true) {
			    // logeo el usuario
			    $inser = $sql->login($email, $password);

		        $href = dominio.'/active_account/?token="'.$codeEmail.'"';
	        	require_once "../email/bienvenidad.php";
	        	// echo $asunto." ". $mensaje;
				if ($emailClass->enviar($email, $asunto, $mensaje) == true) {
			    	// Ha enviado el email
					echo 'Success';
			    }else{
			    	$id = $_SESSION['id'];
					$sql->general("INSERT INTO notificaciones_user (titulo, fecha, user_id) VALUES ('ERROR no se pudo verificar su Email.', '".$fecha."', '".$id."')");
			    	// echo "emailNoEnviado";
					echo 'SuccessNoEmail';
			    }
	        }
		}
    }
?>