<?php
  require_once "../../process/dominio.php";
  require_once "../../process/verificarUsuario.php";
  $verySession->logeado();

 ?>
<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Compit Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="author" name="Nelson Portillo">
    <!-- Favicons -->
    <link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <?php require_once '../../inc/localhost.php'; ?>

    <link rel="stylesheet" href="<?php echo dominio; ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo dominio; ?>/css/style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="<?php echo dominio; ?>/lib/animate/animate.min.css">
</head>
<body>
    <?php require_once '../../inc/header.php'; ?>

    <section class="form-container animated fadeIn row">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <span>Formulario de Registro</span>
                </div>
                <article class="login-form">
                    <form class="registrar">
                        <div class="form-group col-md-12">
                            <label>Nombre <span class="red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-addon icon-btn"><i class="fa fa-user"></i></div>
                                <input type="text" class="form-control border-left-0" name="nombre" placeholder="Introducaz su respuesta" minlength="3" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Apellido <span class="red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-addon icon-btn"><i class="fa fa-user"></i></div>
                                <input type="text" name="apellido" class="form-control border-left-0" placeholder="Introducaz su respuesta" minlength="3" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Correo Electrónico <span class="red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-addon icon-btn"><i class="fa fa-envelope"></i></div>
                                    <input type="text" class="form-control border-left-0" name="email" id="email" placeholder="Introducaz un Correo" minlength="5" required>
                                </div>
                                <div class="msj_email"></div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Contraseña <span class="red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-addon icon-btn"><i class="fa fa-lock"></i></div>
                                <input type="password" class="form-control border-left-0" maxlength="24" name="password_1" id="password_1" placeholder="Introducaz su respuesta" minlength="6" required>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Repita la Contraseña <span class="red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-addon icon-btn"><i class="fa fa-lock"></i></div>
                                <input type="password" class="form-control border-left-0" maxlength="24" name="password_2" placeholder="Introducaz su respuesta" minlength="6" required>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>País <span class="red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-addon icon-btn"><i class="fa fa-lock"></i></div>
                                <select name="pais" required="" class="form-control border-left-0">
                                    <option value="Argentina">Argentina</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Chile">Chile</option>
                                    <option value="España">España</option>
                                    <option value="Mexico">México</option>
                                    <option value="Peru">Perú</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Teléfono <span class="red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-addon icon-btn"><i class="fa fa-lock"></i></div>
                                <input type="text" class="form-control border-left-0" name="phone" placeholder="Introducaz su respuesta" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cupo de Descuento</label>
                                <div class="input-group">
                                    <div class="input-group-addon icon-btn"><i class="fa fa-ticket"></i></div>
                                    <input type="password" class="form-control border-left-0" name="descuento" placeholder="Introducaz su respuesta">
                                </div>
                            </div>
                        </div>
                        <div id="info" class="col-md-12"></div>
                        <button type="submit" class="btn btn-primary text-capitalize" style="margin-top: 3em;"><i class="fa fa-paper-plane"></i>Registrar Usuario</button>
                        <div class="text-center">
                            <p>¿Ya estás registrado? <a href="<?php echo dominio; ?>/membresia/inicio/"> Inicia Sección</a></p>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </section>
    <?php require_once '../../inc/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php echo "<script> var dominio = '". dominio."' </script>"; ?>
    <script src="<?php echo dominio; ?>/lib/jquery_validate/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo dominio; ?>/js/form_user.js"></script>
</body>
</html>