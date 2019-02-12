<?php
    // datos del server (No modificar)
    // define("server", "localhost");
    // define("user", "compitweb_nelsonroot");
    // define("pass", "NP&compitweb");
    // define("bd", "compitweb_bd_mysql");

    define("server", "localhost");
    define("user", "root");
    define("pass", "");
    define("bd", "compit_web");

class BaseDatos
{

    public function conectar()
    {
        $conexion = mysqli_connect(server, user, pass)or DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysqli_error());
        $db = mysqli_select_db($conexion, bd)or DIE("Lo sentimos, no se ha podido conectar con la base datos: " . bd);

        return $conexion;

    }
    public function desconectar()
    {
        $resul = mysqli_close(BaseDatos::conectar());
        if ($resul) {
            echo "hola mundo desconectado";
        }

    }

}
class sql
{
    public function buscar($query){
        $consulta = mysqli_query(BaseDatos::conectar(), $query);
        if (mysqli_fetch_array($consulta)) {
            return true; // si existe
        }else{
            return false; // no existe
        }
        return true;
    }
    public function arrayDatos($query){
        $consulta = mysqli_query(BaseDatos::conectar(), $query);
        if ($rows = mysqli_fetch_object($consulta)) {
            $var = array();
            foreach ($rows as $row) {
                $var[] = $row;
            }
            return $var; // si existe
        }else{
            return false; // no existe
        }
        return true;
    }
    public function general($query){
        if (!mysqli_query(BaseDatos::conectar(), $query)) die (mysqli_error("Error al procesar los datos"));
        return true;
    }
    function delete($tabla, $att, $codigo){
        if (!mysqli_query(BaseDatos::conectar(), "DELETE FROM $tabla WHERE $att ='".$codigo."' LIMIT 1")) die (mysqli_error("Error al eliminar el campo"));
        return true;
    }
    public function insertar($tabla, $campos, $values){
        if (!mysqli_query(BaseDatos::conectar(), "INSERT INTO $tabla ($campos) VALUES ($values)")) die (mysqli_error("Error al insertar el campo"));
        return true;
    }
    public function update($tabla, $campos, $condicion){
        if (!mysqli_query(BaseDatos::conectar(), "UPDATE $tabla set $campos WHERE $condicion")) die (mysqli_error("Error al actualizar los datos"));
        return true;
    }
    public function login($correo, $password){
        $consulta = mysqli_query(BaseDatos::conectar(), "SELECT * FROM clientes WHERE Correo = '".$correo."' AND Pass = '".$password."'");
        sql::update("clientes", "Activo = 1", "Correo = '".$correo."' AND Pass = '".$password."'");

        if ($resul = mysqli_fetch_array($consulta)) {
            $_SESSION['id'] = $resul['Id_clientes'];
            $_SESSION['nombre'] = $resul['Nombre']." ".$resul['Apellido'];
            $_SESSION['email'] = $resul['Correo'];
            return true;
        }else{
            return false;
        }
    }

    // esta funcion estra los datos del usuario
    public function dataUser()
    {
        $consulta = mysqli_query(BaseDatos::conectar(), "SELECT * FROM clientes WHERE Correo = '".$correo."' AND Pass = '".$password."'");
        sql::update("clientes", "Activo = 1", "Correo = '".$correo."' AND Pass = '".$password."'");
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


    /**
     * Clase para enviar un email al usuario
     */
    class email
    {
        public function enviar($destinatario, $asunto, $mensaje){
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $cabeceras .= 'From: '.$destinatario;

            if (mail($destinatario, $asunto, $mensaje, $cabeceras)){
                return true;
             }else{
                return false;
            }
        }

    }
    class token
    {

        public function token_codeEmail(){
            $aleatorio = uniqid(40);
            $rand = rand(4444, 5555);
            $num = strtoupper(substr($aleatorio, 13,14));
            return $num."-".$rand;
        }
        protected function token_obtenCaracterAleatorio($arreglo) {
            $clave_aleatoria = array_rand($arreglo, 1); //obten clave aleatoria
            return $arreglo[ $clave_aleatoria ];    //devolver item aleatorio
        }
        protected function token_obtenCaracterMd5($car) {
            $md5Car = md5($car.Time()); //Codificar el caracter y el tiempo POSIX (timestamp) en md5
            $arrCar = str_split(strtoupper($md5Car));   //Convertir a array el md5
            $carToken = token::token_obtenCaracterAleatorio($arrCar);    //obten un item aleatoriamente
            return $carToken;
        }
        public function token_obtenToken($longitud) {
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
                $miCar = token::token_obtenCaracterAleatorio($arregloTotal);
                $newToken .= token::token_obtenCaracterMd5($miCar);
            }
            return $newToken;
        }

    }







    /**
     * Redimensionar segun el pais del visitante
     */
        function redimension_pais(){
            //Ip del visitante
            if ($_SERVER['REMOTE_ADDR']=='_1') $ipuser= ''; else $ipuser= $_SERVER['REMOTE_ADDR'];
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
