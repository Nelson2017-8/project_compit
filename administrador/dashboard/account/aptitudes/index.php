<?php  
	include_once "../../../../process/dominio.php";
	$linkJson = $_GET['linkJson'];
	// var_dump($_GET);
	if (empty($linkJson)){
		include_once "../../../../error404/index.php"; 
	}else{
		// echo $linkJson;
		$realUrl = "../../../../".substr($linkJson, 18);
		// echo "Url: ".$realUrl;
		$json = file_get_contents($realUrl);
		$json_decode = json_decode($json);
		$a = $json_decode->FrameworksDesing;
		$b = $json_decode->ToolsDesarrollo;
		$c = $json_decode->ToolsDesing;
		$d = $json_decode->ToolsDigitalMarketing;
		?>
			<!DOCTYPE html>
			<html>
			<head>
				<title>Compit Web</title>
				<link rel="icon" href="https://compitweb.com/img/logo/compitweb-logo-min.png">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
				<link rel="stylesheet" href="https://compitweb.com/css/account/compitweb.css">
				<link rel="stylesheet" href="https://compitweb.com/fonts/themify/themify-icons.css">
			</head>
			<body class="row">

	<?php //include_once '../../_include/section_body.php'; ?>
	<style>
		td{font-size: 12px}
	</style>
	<div class="header darken">
		<div class="container">
			<div class="col m6">
				<p style="margin-top: 20px"><b>Aptitudes Principales</b></p>
			</div>
			<div class="col m6">
				<a href="#" onclick="top.close();" class="btn blue" style="margin-top: 12px; float: right;">Salir</a>
			</div>
		</div>
	</div>
		<div class="ml-5 pl-5">
				<div class="container" style="width: 100%">
					<div class="col s12">
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<h5 class="blue-text center">Aptitudes (<?php echo $_SESSION['nombre-adm']; ?>)</h5>
						<p>&nbsp;</p>
						
					
		<?php
			echo '

			<table class="responsive-table striped">
				<tbody>
				<tr>
					<th>Framewords</th>
					'.$a.'
				</tr>
				<tr>
					<th>Aptitudes de Desarrollo</th>
					'.$b.'
				</tr>
				<tr>
					<th>Aptitudes en Diseño Gráfico</th>
					'.$c.'
				</tr>
				<tr>
					<th>Aptitudes en Marketing Digital</th>
					'.$d.'
				</tr>
			';
			echo '
			</tbody>
			</table>';

		?>
					</div>
				</div>
				</div>
			</body>
			</html>
		<?php
		// echo $json_decode->FrameworksDesing;
		// echo "<br><br>".$json_decode->ToolsDesarrollo;
		// echo "<br><br>".$json_decode->ToolsDesing;
		// echo "<br><br>".$json_decode->ToolsDigitalMarketing;

		// echo $json_decode['Frameworks of Desin'];
	}


?>