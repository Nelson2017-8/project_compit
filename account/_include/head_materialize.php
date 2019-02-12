<title>Compit Web</title>
<link rel="icon" href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php

	$v = "";
	$url =  explode("/",$_SERVER["REQUEST_URI"]);

	$count = count($url) - 2;
	for ($i = 0; $i < $count; $i++) {
		$v .= "../";
	}
	require_once $v."inc/materialize.php";

?>
<link rel="stylesheet" href="<?php echo dominio; ?>/style-account.css">
