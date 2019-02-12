<?php  
    	// elimina carpetas vacias
        function delete_contenido($carpeta){
            foreach(glob($carpeta . "/*") as $archivos_carpeta){             
                @rmdir($archivos_carpeta);
            }
        }
	$servicie = $_POST['type_servicie'];
	$name = $_POST['name_project'];
	$description = $_POST['description'];
	$submit = $_POST['end'];
	// echo "Tipo de servicio: ".$servicie."\n name: ".$name." \n description: ".$description. " \n desing_logo: ".$desing_logo;
	#datos_user\project
	require '../../process/dominio.php';
	$ds = DIRECTORY_SEPARATOR;
	$carpeta = "..".$ds."..".$ds."datos_user".$ds."project";
	$roo = $carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie; 
	delete_contenido($roo);

	// echo "Tipo de servicio: ".$servicie."\n name: ".$name." \n description: ".$description;
    if ( isset($name) && isset($description) && !empty($name) && !empty($description) ) {
		// Creo las carpetas donde ubico al usuario
	    if (!file_exists($carpeta.$ds.$_SESSION['id'])) {mkdir($carpeta.$ds.$_SESSION['id']);}
	    if (!file_exists($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'])) {mkdir($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo']);}
	    if (!file_exists($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie)) {mkdir($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie); }
	    if (!file_exists($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie.$ds.$name)) { mkdir($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie.$ds.$name); }
	    $_SESSION['carpeta'] = $carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie.$ds.$name;
		$root = $_SESSION['carpeta']; 
		$recursos = $_SESSION['carpeta'].$ds."recursos";
	    $arrayDatos = array();
	    if ($servicie == "DeveloperWeb" || $servicie == "DesingWeb") {
	    	$desing_logo = @$_POST['desing_logo'];
			$dominio_url = @$_POST['dominio'];
			$incluirDominio = @$_POST['incluirDominio'];
			// creo un archivo json y almacenos los datos
	    	$arrayDatos = [
	    	    "Servicio " => $servicie,
	    	    'Nombre del Proyecto ' => $name,
	    	    'Descripción '  => $description,
	    	    'URL del Dominio ' => $dominio_url,
	    	    "Incluir Diseño de Logo " => $desing_logo,
	    	    'Icluir un Dominio ' => $incluirDominio,
	    	    'Root' => $root,
	    	    'Recursos ' => $recursos
	    	];
	    }
	    if ($servicie == "Desing" && $servicie == "mantenimientoWeb") {
			// creo un archivo json y almacenos los datos
	    	$arrayDatos = [
	    	    "Servicio " => $servicie,
	    	    'Nombre del Proyecto ' => $name,
	    	    'Descripción '  => $description,
	    	    'Root ' => $root,
	    	    'Recursos ' => $recursos
	    	];
	    }
	    if (isset($submit)) {
	    	 //Creamos el JSON
			 $json_string = json_encode($arrayDatos);
			 $file = $root.$ds.$name.$ds.'datos.json';
			 file_put_contents($file, $json_string); 
			require '../../process/procesos.php';
			$id = $_SESSION['id'];
			$key = $_SESSION['key'];
			$estado = 'Evaluando';
			$reRoot = "https://compitweb.com/datos_user/project/".$_SESSION['id']."/".$_SESSION['correo']."/".$servicie."/".$name."/";
			$date = date('Y-m-s');
			// $reRoot = urlencode($url);
			
			// lo inserto en la tabla proyectos
			$tabla = "proyectos";
			$campos = "servicio, nombre, descripcion, fecha_registro, link_folder, estado, id_user, key_user";
			$values = " '".$servicie."', '".$name."', '".$description."', '".$date."', '".$reRoot."', '".$estado."', '".$id."', '".$key."' ";
			SQL::insertar($tabla, $campos, $values);

			// lo inserto en la tabla de notificaciones
			$titulo = "Gracias por su solicitud, acontinuación será contactado con un especialista en el área.";
			$tabla2 = "notificaciones_user";
			$campos2 = "titulo, fecha, user_id, key_user, link";
			$link = "https://compitweb.com/account/proyecto/proceso/";
			$values2 = " '".$titulo."', '".$date."', '".$id."', '".$key."', '".$link."' ";
			SQL::insertar($tabla2, $campos2, $values2);

			
	    	echo '<script>alerta();</script>';
			 // fin
	    	$root = $carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$servicie;
	    	delete::contenido($root);
	    }
    }
?>