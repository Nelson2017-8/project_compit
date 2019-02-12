<?php  
		include_once "../../../../process/dominio.php";
	if (!empty($_GET['doc'])) {
		$doc = $_GET['doc'];
		// echo $doc;
		// function html()
		// {
			
		?>

			<!DOCTYPE html>
			<html>
			<head>
				<title>Compit Web</title>
				<link rel="icon" href="https://compitweb.com/img/logo/compitweb-logo-min.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
				<link rel="stylesheet" href="https://compitweb.com/css/account/compitweb.css">
				<link rel="stylesheet" href="https://compitweb.com/lib/materialize/fonts/titillium.css">
			</head>
			<body class="row" style="margin-bottom: 0">
				<div class="header">
					<div class="container">
						<div class="col m6">
							<p style="margin-top: 20px"><b>Currículo Adjuntado</b></p>
						</div>
						<div class="col m6">
							<a href="#" onclick="top.close();" class="btn blue" style="margin-top: 12px; float: right;">Salir</a>
						</div>
					</div>
				</div>
				<div class="col s12 grey darken-4">
					<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
					<div class="container">
						<div class="col s12 white">
							<div class="p-5">
								<p>Su curriculo se encuentra almacenado en nuestra bases de datos puedes descargar una copia <a href="<?php echo $doc; ?>">Aquí</a></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi voluptas soluta inventore quo laborum explicabo voluptate, repellat hic amet eligendi iure exercitationem numquam, eveniet qui alias omnis enim excepturi?</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi voluptas soluta inventore quo laborum explicabo voluptate, repellat hic amet eligendi iure exercitationem numquam, eveniet qui alias omnis enim excepturi?</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi voluptas soluta inventore quo laborum explicabo voluptate, repellat hic amet eligendi iure exercitationem numquam, eveniet qui alias omnis enim excepturi?</p>
								
							</div>
						</div>
						<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
					</div>
				</div>
			</body>
			</html>
		<?php
		// }
	}else{
		include_once "../../../../error404/index.php";
	}
?>