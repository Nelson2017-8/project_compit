<?php 
    /**
     * conexion con la base de datos, alogajada en el servidor
     */
    define("server", "localhost");
    define("user", "compitweb_nelsonroot");
    define("pass", "NP&compitweb");
    define("bd", "compitweb_bd_mysql");

    class conectar{
        public static function con(){
            $conexion=mysqli_connect(server, user, pass)or die(mysqli_error());
            mysqli_select_db($conexion, bd);
            return $conexion;
        }
    }
    class SQL{
        public function buscar($query){
            $consulta = mysqli_query(conectar::con(), $query);
            if (mysqli_fetch_array($consulta)) {
                define("resultado", true); // si existe
            }else{
                define("resultado", false); // no existe
            }
            return resultado;
        }
        public function general($query){
            if (!mysqli_query(conectar::con(), $query)) die (@mysqli_error("Error al procesar los datos"));
            return true;
        }
        public function delete($tabla, $att, $codigo){
            if (!mysqli_query(conectar::con(), "DELETE FROM $tabla WHERE $att ='".$codigo."' LIMIT 1")) die (@mysqli_error("Error al eliminar el campo"));
            return true;
        }
        public function insertar($tabla, $campos, $values){
            if (!mysqli_query(conectar::con(), "INSERT INTO $tabla ($campos) VALUES ($values)")) die (@mysqli_error("Error al insertar el campo"));
            return true;
        }
        public function update($tabla, $campos, $condicion){
            if (!mysqli_query(conectar::con(), "UPDATE $tabla set $campos WHERE $condicion")) die (@mysqli_error("Error al actualizar los datos"));
            return true;
        }
        public function img($query, $dato){
            $consulta = mysqli_query(conectar::con(), $query);
            while ($row = mysqli_fetch_array($consulta)) {
                $if = $row["$dato"]; 
                define("resultado", $if);
            }
            return true;
        }
    }
    class login{
        public function cliente($correo, $password){
            $consulta = mysqli_query(conectar::con(), "SELECT * FROM clientes WHERE Correo = '".$correo."' AND Pass = '".$password."'");
            SQL::udpate("clientes", "Activo = 1", "Correo = '".$correo."' AND Pass = '".$password."'");
            // $dato_id = (mysqli_fetch_array($consulta)) ? SQL::datos($dato_id['Id_clientes']) : "Fallo la consulta";
            if ($resul = mysqli_fetch_array($consulta)) {
                $_SESSION['id'] = $resul['Id_clientes']; // id
                $_SESSION['usuario'] = $resul['Tipo_Usuario'];
                $_SESSION['nombre'] = $resul['Nombre']." ".$resul['Apellido']; // nombre del usuario
                $_SESSION['correo']= $resul['Correo']; // correo de usuario
                $_SESSION['key']= $resul['llave']; // llave de seguridad 
                $_SESSION['ImgPerfil'] = $resul["PhotoProfile"];
                $_SESSION['Pais'] = $resul["Pais"];
                $_SESSION['Estado'] = $resul["Estado"];
                $_SESSION['Telefono'] = $resul["Telefono"];
                switch ($resul['Idioma']) {
                    case "es":
                        $_SESSION['Lenguaje'] = 'Español';
                        break;
                    case "in":
                        $_SESSION['Lenguaje'] = 'Engles';
                        break;
                    default:
                        $_SESSION['Lenguaje'] = 'Español';
                        break;
                }
            }else{return false;}
            return true;
        }
    }
    class mail{
        public static function enviar($destinatario, $asunto, $mensaje){
            // Le  Envio  un correo electronico  de bienvenida
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $cabeceras .= 'From: '.$destinatario;
            $aleatorio = uniqid(); //Genera un id único para identificar la cuenta a traves del correo, no usado
            // mail($destino, $asunto, $mensaje, $cabeceras);
            // validad el email
            // Aqui una nueva forma para validar el email, usando la funcion "strpos":
            if (!strpos($destinatario,"@hotmail.") && !strpos($destinatario,"@gmail.") && !strpos($destinatario,"@yahoo.") && !strpos($destinatario,"live.com.")){ 
                define("i_EmailEnviado","false");
            } else{
                // envia el email
                if (mail($destinatario, $asunto, $mensaje, $cabeceras)){
                    // envio correcto
                    define("i_EmailEnviado", "true");
                    return true;
                 }else{
                    // fallo en el envio
                    define("i_EmailEnviado","false");
                    return false;
                } 
            }
            // return true;
        }
    }
    class token{
        // codigo del email
        public static function codeEmail(){
            $aleatorio = uniqid(40);
            $rand = rand(4444, 5555);
            $num = strtoupper(substr($aleatorio, 13,14));
            return $num."-".$rand;
        }
        /* ------------------------------------------------------ */
        public function obtenCaracterAleatorio($arreglo) {
            $clave_aleatoria = array_rand($arreglo, 1); //obten clave aleatoria
            return $arreglo[ $clave_aleatoria ];    //devolver item aleatorio
        }
        public function obtenCaracterMd5($car) {
            $md5Car = md5($car.Time()); //Codificar el caracter y el tiempo POSIX (timestamp) en md5
            $arrCar = str_split(strtoupper($md5Car));   //Convertir a array el md5
            $carToken = token::obtenCaracterAleatorio($arrCar);    //obten un item aleatoriamente
            return $carToken;
        }
        public function obtenToken($longitud) {
            //crear alfabeto
            $mayus = "ABCDEFGHIJKMNPQRSTUVWXYZ";
            $mayusculas = str_split($mayus);    //Convertir a array
            //crear array de numeros 0-9
            $numeros = range(0,9);
            //revolver arrays
            shuffle($mayusculas);
            shuffle($numeros);
            //Unir arrays
            $arregloTotal = array_merge($mayusculas,$numeros);
            $newToken = "";
            for($i=0;$i<=$longitud;$i++) {
                $miCar = token::obtenCaracterAleatorio($arregloTotal);
                $newToken .= token::obtenCaracterMd5($miCar);
            }
            return $newToken;
        }
    }
    class delete{
        public function contenido($carpeta){
            foreach(glob($carpeta . "/*") as $archivos_carpeta){             
                if (is_dir($archivos_carpeta)){
                    rmDir_rf($archivos_carpeta);
                } else {
                    unlink($archivos_carpeta);
                }
            }
        }
        public function dir_contenido($carpeta){
            foreach(glob($carpeta . "/*") as $archivos_carpeta){             
                if (is_dir($archivos_carpeta)){
                    rmDir_rf($archivos_carpeta);
                } else {
                    unlink($archivos_carpeta);
                }
            }
                rmdir($carpeta);
        }
    }
    class subir{
        public function img_parametro($file, $carpeta, $resolucion, $tipo_imagen){
            if (isset($_FILES["$file"])) {
                $file = $_FILES["$file"];
                $nombre = $file['name'];
                $type = $file['type'];
                $size = $file['size'];
                $tmp = $file['tmp_name'];
                $dimensiones = getimagesize("$tmp");
                $width = $dimensiones[0];
                $height = $dimensiones[1];
                $dir = $carpeta."/".$_SESSION['id']."/".$_SESSION['correo']."/".$nombre;
                // Creo las carpetas unicas donde ubico al usuario
                    if (!file_exists($carpeta)) {mkdir($carpeta);}
                    if (!file_exists($carpeta."/".$_SESSION['id'])) {mkdir($carpeta."/".$_SESSION['id']);}
                    if (!file_exists($carpeta."/".$_SESSION['id']."/".$_SESSION['correo'])) {mkdir($carpeta."/".$_SESSION['id']."/".$_SESSION['correo']);}
                
                if ( ($type != "image/gif") && ($type != "image/jpeg") && ($type != "image/jpg") && ($type != "image/png")) {
                    // Valido que sea una imagen
                    echo '<div class="alert alert-danger" role="alert"> <strong>Error:</strong> El tipo de archivo no es una imagen válida. </div>';
                    // echo "<script>alert('El tipo de archivo no es una imagen válida.');</script>";
                }else if($size > 1024*1024){
                    // valido que no sea mayor que 1MB
                    echo '<div class="alert alert-danger" role="alert"> <strong>Error:</strong> La Imagen seleccionada es muy pesada</div>';
                    // echo "<script>alert('La Imagen seleccionada es muy pesada');</script>";
                }else if($width > $resolucion || $height > $resolucion){
                    // valido las dimensiones de la imagen
                    echo '<div class="alert alert-danger" role="alert"> <strong>Error:</strong> La Imagen seleccionada usa una resolucion muy alta. </div>';
                    // echo "<script>alert('La Imagen seleccionada usa una resolucion muy alta');</script>";
                }else if($width < 120 || $height < 120){
                    // valido que la imagen no sea muy pequeña
                    // echo "<script>alert('La Imagen seleccionada es muy pequeña');</script>";
                    echo '<div class="alert alert-danger" role="alert"> <strong>Error:</strong> La Imagen seleccionada es muy pequeña. </div>';
                }else{
                    // vacio la carpeta si esta creada
                    delete::contenido($carpeta."/".$_SESSION['id']."/".$_SESSION['correo']);
                    move_uploaded_file($tmp, $dir);
                    $img = substr($dir, 3);
                    $Ubicacion = "http://www.compitweb.com/$img";
                    $key = $_SESSION['id'];
                    $k = mysqli_query(conectar::con(), "SELECT * FROM imagen WHERE user_id = '".$key."' AND tipo_imagen = '".$tipo_imagen."' ");
                    if ($rImg = mysqli_fetch_array($k)) {
                        // actualizamos los datos
                        $campos = "Nombre = '".$nombre."', Ubicacion =  '".$Ubicacion."'";
                        SQL::udpate('imagen', $campos, "user_id = '".$key."'");
                    }else{
                        // insertamos los datos
                        SQL::general("INSERT INTO imagen (Nombre, Ubicacion, user_id, tipo_imagen) VALUES 
                            ('".$nombre."', '".$Ubicacion."', '".$key."', '".$tipo_imagen."') ");
                    }
                    // echo "<img class='np-circle' src='$Ubicacion' alt='$nombre' style='width:250px; height:250px;'>"
                    // ."<p class='np-xlarge text-secondary'>".$_SESSION['nombre']."</p>";
                    echo "<script>location.href = '';</script>";
                }
            }
        }
        public function img($file_img, $carpeta){
                $nombre = strtolower($file_img['name']);
                $tipo = $file_img['type'];
                $tamano = $file_img['size'];
                $name_temporal = $file_img['tmp_name'];
                $dir = $carpeta."/".$_SESSION['id']."/".$_SESSION['correo']."/".$nombre;
            if (!file_exists($carpeta)) {
                    mkdir($carpeta);
            }
            if (!file_exists($carpeta."/".$_SESSION['id'])) {
                mkdir($carpeta."/".$_SESSION['id']);
            }
            if (!file_exists($carpeta."/".$_SESSION['id']."/".$_SESSION['correo'])) {
                mkdir($carpeta."/".$_SESSION['id']."/".$_SESSION['correo']);
            }
            //Si existe imagen y tiene un tamaño correcto
            if (($nombre == !NULL) && ($tamano <= 8000)) {
                // indicamos los formatos que permitimos subir a nuestro servidor
                if (($tipo == "image/gif") || ($tipo == "image/jpeg") || ($tipo == "image/jpg") || ($tipo == "image/png")) {
                    // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                    move_uploaded_file($name_temporal, $dir);
                    // echo '<img src="'.$_SESSION["logo"].'" alt=""> ';
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
    }
    class verificar{
        public function usuario_logeado($redimensionar){
            if (isset($_SESSION['id'])) {
                header("location: $redimensionar");
            }
        }
    }
    class very_email{
        /* verificar email */
        // Devuelven true si es correcto y false en caso de error
        public function code_1($email){
          $result = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
          if ($result){
            list($user, $domain) = split('@', $email);
            $result = checkdnsrr($domain, 'MX');
          }
          return $result;
        }
        public function code_2($email){
          return (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
        }
        public function code_3($email){
          $matches = null;
          return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email, $matches));
        }
        public function code_4($email){
          return (false !== emailpos($email, "@") && false !== emailpos($email, "."));
        }
    }
    /**
     * Redimensionar segun el pais del visitante
     */
    class redimension{
        public function pais(){
            //Ip del visitante
            if ($_SERVER['REMOTE_ADDR']=='::1') $ipuser= ''; else $ipuser= $_SERVER['REMOTE_ADDR'];
            $geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipuser) );
            //Si el pais es España redireccionamos al directorio /es
            if ($geoPlugin_array['geoplugin_continentCode']=='ES'){
                header('http://dominio.com/es');
            }
            else //Si el pais es Mexico redireccionamos al directorio /mx
            if ($geoPlugin_array['geoplugin_continentCode']=='MX'){
                header('http://dominio.com/mx');
            }
            else //Si el pais es Colombia redireccionamos al directorio /co
            if ($geoPlugin_array['geoplugin_continentCode']=='CO'){
                header('http://dominio.com/co');
            }
        }
    }

// muestra y verifica datos de una tabla 
    class resul{
        public function mostrar($user, $key){
            $user = $_SESSION['id'];
            $key = $_SESSION['key'];
            $query = "SELECT * FROM proyectos WHERE id_user = '".$user."' AND key_user = '".$key."' ORDER BY fecha_ini DESC";
            $consulta = mysqli_query(conectar::con(), $query);
            if ($row = mysqli_fetch_array($consulta)) {
                echo "<table border = '1'> \n"; 
                echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n"; 
                do { 
                    echo "<tr><td>".$row["nombre"]."</td><td>".$row["servicio"]."</td></tr> \n"; 
                } while ($row = mysqli_fetch_array($consulta)); 
                    echo "</table> \n"; 
            } else { 
                echo "¡ No se ha encontrado ningún registro !"; 
            } 
        }
    }
?>