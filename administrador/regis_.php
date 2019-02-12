<?php  
	require_once "../process/procesos.php";
	function sql($query){
        $consulta = mysqli_query(conectar(), $query);
    	if ($row = mysqli_fetch_array($consulta)) {
    		return true;
    	}else{
    		return false;
    	}
    }
    
	if (!empty($_POST)) {
		$correo = $_POST['email'];
		$very_user = sql("SELECT * FROM roots WHERE correo = '".$correo."' ");
		if($very_user === true){
			echo "El usuario ya existe";
		}else{
			// El usuario no esta registrado, capturar sus datos
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$dateNatalidad  = $_POST['dateNatalidad'];
			$profesionalidad = $_POST['profesionalidad'];
			$cargo = $_POST['cargo'];
			$sueldo = $_POST['sueldo'];
			$file = $_FILES['curriculo'];
			$carpeta = "../adm";
			$nameAll = strtolower($nombre).ucwords($apellido);
			$pass = token_obtenToken(12);
			$password = md5($pass);
			$departamento = $_POST['departamento'];
			$dateReg = date('Y-m-d H:i:s');
			$tipoEmpleo = $_POST['tipoEmpleo'];
			$modalidad = $_POST['modalidad'];

			$cedula = $_POST['ci'];
			$residencia = $_POST['residencia'];
			$estado = $_POST['estado'];
			$pais = $_POST['counter'];
			$telefono = $_POST['phone'];

			// pasos las habilidades a un array
			$array = array();
			$frameworksDesing = "";
			foreach ($_POST['frameworksDesing'] as $desing) {
				$frameworksDesing .= "<td>".$desing."</td>";
			}
			$habilidadesDeveloper = "";
			foreach ($_POST['habilidadesDeveloper'] as $desing) {
				$habilidadesDeveloper .= "<td>".$desing."</td>";
			}
			$toolsDesing = "";
			foreach ($_POST['toolsDesing'] as $desing) {
				$toolsDesing .= "<td>".$desing."</td>";
			}
			$estategias = "";
			foreach ($_POST['estategias'] as $desing) {
				$estategias .= "<td>".$desing."</td>";
			}
			// creo los espacios de trabajo
			if (!file_exists($carpeta)) {
                mkdir($carpeta);
            }
            if (!file_exists($carpeta."/".$correo)) {
                mkdir($carpeta."/".$correo);
            }
            if (!file_exists($carpeta."/".$correo."/".$nameAll)) {
                mkdir($carpeta."/".$correo."/".$nameAll);
            }
			$array= ['FrameworksDesing' => $frameworksDesing, 
					'ToolsDesarrollo' => $habilidadesDeveloper,
					'ToolsDesing' => $toolsDesing,
					'ToolsDigitalMarketing' => $estategias];
			// creo un json donde almaceno las habilidades del empleado
			$json_string = json_encode($array);
			$jsonSkill = $carpeta."/".$correo."/".$nameAll.'/skill.json';
			file_put_contents($jsonSkill, $json_string); 
			$habilidades =  "www.compitweb.com/".substr($jsonSkill, 3);
		/* 
			Habilidades Diseño Web > frameworksDesing[] 
			Habilidades de Programación > habilidadesDeveloper[]
			Habilidades de Diseño Gráfico > toolsDesing[]
			Habilidades de Marketing > estategias[]
		*/
		// echo $nameAll."\n".$pass;
		function subir_curriculum($file, $carpeta, $nameAll, $correo){
				$nombre = urlencode(strtolower($file['name']));
                $tipo = $file['type'];
                $tamano = $file['size'];
                $name_temporal = $file['tmp_name'];
                $dir = $carpeta."/".$correo."/".$nameAll."/".$nombre;
            
            //Si existe imagen y tiene un tamaño correcto
            if (($nombre == !NULL) && ($tamano <= 6000000)) {
                // indicamos los formatos que permitimos subir a nuestro servidor

                /* 
					type file 
					.docx : (application/vnd.openxmlformats-officedocument.wordprocessingml.document)
					.doc : (application/msword)
					.ppt : (application/vnd.ms-powerpoint)
					.pdf : (application/pdf)
					.png : (image/png)
					.jpg : (image/jpeg)
					.xls : (application/vnd.ms-excel)
					.xlsx : (application/vnd.openxmlformats-officedocument.spreadsheetml.sheet)
                */
                if (($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || $tipo == "application/msword" || $tipo = "application/vnd.ms-powerpoint" || $tipo = "application/pdf" || ($tipo == "application/msword") || ($tipo == "image/jpg") || ($tipo == "image/png")) {
                    // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                    $r = "http://www.compitweb.com/".substr($dir, 3);
                    move_uploaded_file($name_temporal, $dir);
                    return $r;
                } else {
                    // si no cumple con el formato
                    echo 'El archivo no cumple con el formato deseado';
                }
            } if(($nombre == NULL) ){
                echo "El archivo no se a podido subir";
            }if($tamano >= 8000) {
                // si existe la variable pero se pasa del tamaño permitido
                echo 'El archivo es muy grande intente con una imagen más pequeña';
            } 
        }
        $curriculo = subir_curriculum($file, $carpeta, $nameAll, $correo);
        $query = "INSERT INTO roots (nombre, apellido, correo, password, telefono, cedulaPasaporte, pais, estado, direccionResidencia, dateNatalidad, dateReg, curriculo, departamento, cargo, profesionalidad, tipoEmpleo, modalidad, sueldo, idName, typeAsc, habilidades) VALUES ('".$nombre."', '".$apellido."', '".$correo."', '".$password."', '".$telefono."', '".$cedula."', '".$pais."', '".$estado."', '".$residencia."', '".$dateNatalidad."', '".$dateReg."', '".$curriculo."', '".$departamento."', '".$cargo."', '".$profesionalidad."', '".$tipoEmpleo."', '".$modalidad."', '".$sueldo."', '".$nameAll."', 3, '".$habilidades."')";
        // echo $curriculo;
        $regis = SQL_general($query);
        	if ($regis ==  true) {
				echo "UsuarioRegistrado\n\n";
			}
			$asunto = "Compit Web Adm";
			$mensaje = "Felicitaciones \n\n Usted a sido registrado como empleado de la empresa Compit Web, por favor verifique su presencia como empleado en las próximas 48 horas o su usuario será borrado por seguridad. \n\n\n Acceda a su panel de control aquí. <a href=\"www.compitweb.com/administrador/?id='$nameAll'&mail='$correo'\">Panel de Control</a> \n Contraseña: ".$pass."\n\n Confirme su usuario en las proximas horas o será eleminado por el sistema.  ";
			$submitEmail = mail_enviar($correo, $asunto, $mensaje);
			if($submitEmail == false){
				echo "El mensaje no se envio";
			}else{
				echo "El mensaje se envio";
			}
			echo $mensaje;
		}
	}

?>