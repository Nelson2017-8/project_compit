<?php
  include_once "process/dominio.php";
  require_once "process/procesos.php";
  require_once "../../process/verificarUsuario.php";
  $verySession->logeado();
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Compit Web</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- faltan las socials tags -->
  <!-- Favicons -->
  <link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <!-- Libraries CSS Files -->
  <link href="<?php echo dominio; ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo dominio; ?>/lib/animate/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="<?php echo dominio; ?>/css/style.css" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="<?php echo dominio; ?>/css/responsive.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">




  <!-- / End Footer bottom Area -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script src="<?php echo dominio; ?>/js/main.js"></script>
</body>
</html>