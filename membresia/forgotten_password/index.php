<?php
  include_once "../../process/dominio.php";
    require_once "../../process/verificarUsuario.php";
  $verySession->logeado();
 ?>
<!doctype html>
<html class="no-js" lang="es">
<head>
    <?php include_once "../../inc/head.php"; ?>
    <link rel="stylesheet" href="https://compitweb.com/css/form-membresia.css">
</head>
<body class="bg-dark">
    <?php include_once "../../inc/nav.php" ?>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h1 class="text-white np-xlarge pt-5">Recuperar Contraseña</h1>
                </div>
                <div class="login-form" style="position: relative;">
                    <form class="">
                        <div class="form-group">
                            <label>Correo Electrónico</label>
                            <div class="input-group">
                                <div class="input-group-addon np-blue"><i class="fa fa-user"></i></div>
                                <input type="email" class="form-control border-left-0" name="email" placeholder="Introduzca un correo" pattern="[AZ-az]{0-9}" minlength="3" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Codigo de Email</label>
                            <div class="input-group">
                                <div class="input-group-addon np-blue"><i class="fa fa-lock"></i></div>
                                <input type="password" class="form-control border-left-0" name="password" placeholder="AFC-768 398" pattern="[AZ-az]{0-9}" minlength="5" required>
                            </div>
                        </div>
                        <button type="submit" class="btn np-blue btn-flat my-2" style="padding: 12px 0px"><i class="fa fa-paper-plane mr-2"></i>Enviar</button>

                    </form>
                    <hr style="position: absolute; width: 100%; margin: 20px -30px;">
                    <div class="register-link my-4 text-center">
                        <p  class="pt-3">
                            <a href="https://compitweb.com/membresia/registro/"  class="mr-2"> Registrarte</a> <a href="https://compitweb.com/membresia/inicio/">Iniciar Sesión</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384- JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>
    <script src="https://compitweb.com/lib/jquery_validate/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://compitweb.com/js/form_user.js"></script>
</body>
</html>