<?php
	/*
		Description: Este archivo tiene dos funciones, comprobar si el usuario esta logeado
					 Y ademas crear un define llamado 'dominio' el cual es global y depende
					 de tu configuración de localhost, la url por defecto es www.compitweb.com
					 pero a la hora de subir lo al hosting deben agragar el protocolo https
	*/

	session_start();
	define("dominio", "http://www.compitweb.com"); // https://compitweb.com/account/

	// error_reporting(0);

?>