<?php
	class verySession{
		public function logeado(){
			if (!empty($_SESSION)) {
				header("location: ".dominio."/account/");
			}
		}
		public function noLogeado(){
			if (empty($_SESSION)) {
				echo("hola mundo");
				header("location: ".dominio);
			}
		}
	}
	$verySession = new verySession(); // https://compitweb.com/account
	// $verySession->logeado();
	// $verySession->noLogeado();

 ?>