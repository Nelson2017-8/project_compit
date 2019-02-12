<?php  
	/*
		version: 0.1
		function: captura datos del formulario y los almacena en bd para evaluar luego
	*/
		$phone = @$_POST['phone'];
		$counter = @$_POST['counter'];
		$name = @$_POST['nombre_proyecto'];
		$description = @$_POST['description'];
		$pre_min = @$_POST['pre_min'];
		$pre_max = @$_POST['pre_max'];

		$areas = "";
		foreach ($_POST['areas_profesionales_incluir'] as $area){
			$areas .= $area." - ";
		}
		
		$analisis_estadistico = "";
		$incluir_analisis_estadistico = @$_POST['incluir_analisis_estadistico'];
		if ($incluir_analisis_estadistico == true) {
			$analisis_estadistico = @$_POST['analisis_estadistico'];
		}
		if ($pre_min > $pre_max) {
			echo 'Error el precio min es mayor que el precio max';
		}if ($pre_min < $pre_max){
			// comienzo a crear los datos para almacenar
			$project = "folder_project";
		
			$ds = DIRECTORY_SEPARATOR;
			$carpeta = "..".$ds."..".$ds."..".$ds."datos_user".$ds."project";

			// Creo las carpetas donde ubico los datos
	    	if (!file_exists($carpeta.$ds.$_SESSION['id'])) {mkdir($carpeta.$ds.$_SESSION['id']);}
	    	if (!file_exists($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'])) {mkdir($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo']);}
	    	if (!file_exists($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$project)) {mkdir($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$project); }
	    	if (!file_exists($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$project.$ds.$name)) {mkdir($carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$project.$ds.$name); }

			$root = $carpeta.$ds.$_SESSION['id'].$ds.$_SESSION['correo'].$ds.$project.$ds.$name;

	    	// creo el array
	    	$arrayDatos = array();
	    	$arrayDatos = [
	    	    "Servicios " => $areas,
	    	    'Nombre del Proyecto ' => $name,
	    	    'Descripción '  => $description,
	    	    'Root ' => $root,
	    	    'Incluir Analisis Estadistico ' => $incluir_analisis_estadistico,
	    	    'Tipo de Analisis Estadistico ' => $analisis_estadistico,
	    	    'presupuesto min ' => $pre_min,
	    	    'presupuesto max ' => $pre_max
	    	];
			$json_string = json_encode($arrayDatos);
			$file = $root.$ds.'datos.json';
			file_put_contents($file, $json_string); 

			require '../../../process/procesos.php';
			$id = $_SESSION['id'];
			$key = $_SESSION['key'];
			$estado = 'Evaluando';
			$url = "https://compitweb.com/datos_user/project/".$_SESSION['id']."/".$_SESSION['correo']."/".$project."/".$name."/";
			$reRoot = $url;
			$date = date('Y-m-s');

	        function consulta($user){
	            $query = "SELECT * FROM clientes WHERE Id_clientes = '".$user."'";
	            $consulta = mysqli_query(conectar(), $query);
	            if ($row = mysqli_fetch_array($consulta)) {
	                $_SESSION['Telefono'] = $row['Telefono'];
	                $_SESSION['Pais'] = $row['Pais'];
	            }
	        }
	        consulta($_SESSION['id']);
	        if ($_SESSION['Telefono'] == 'No has registrado uno' && $_SESSION['Pais'] == 'No has agregado una localidad' ) {
				// actualizo los datos del usuario
				$tabla1 = "clientes";
				$campos1 = "Telefono = '".$phone."', Pais = '".$counter."'";
				$condicion = "Id_clientes = '".$id."' ";
				SQL_update($tabla1, $campos1, $condicion);
	        }

			// lo inserto en la tabla proyectos
			$tabla = "proyectos";
			$campos = "servicio, nombre, descripcion, fecha_registro, link_folder, estado, id_user, key_user, presupuesto_min, presupuesto_max";
			$values = " '".$areas."', '".$name."', '".$description."', '".$date."', '".$reRoot."', '".$estado."', '".$id."', '".$key."', '".$pre_min."', '".$pre_max."' ";
			SQL_insertar($tabla, $campos, $values);

			// lo inserto en la tabla de notificaciones
			$titulo = "Gracias por su solicitud, acontinuación será contactado con un especialista en el área.";
			$tabla2 = "notificaciones_user";
			$campos2 = "titulo, fecha, user_id, key_user, link";
			$link = "https://compitweb.com/account/proyecto/proceso/";
			$values2 = " '".$titulo."', '".$date."', '".$id."', '".$key."', '".$link."' ";
			SQL_insertar($tabla2, $campos2, $values2);

			//redimensiono
			echo '<script>alerta(); redimension();</script>';
		}
?>