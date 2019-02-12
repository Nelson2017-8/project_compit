<?php require_once "../process/dominio.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Compit Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="author" name="Nelson Portillo">
    <link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">
    <link rel="stylesheet" href="<?php echo dominio; ?>/error404/style.css">
</head>
<body>
    <div class="header">
        <div class="margin">
            <h1>Compit <span>Web</span></h1>
        </div>
    </div>
    <div class="contenedor">
        <div class="imagen">
            <img src="<?php echo dominio; ?>/img/errores/404/error.404.png" alt="error_pagina_caida">
        </div>
        <div class="error">
            <h1>Error 404</h1>
            <p>Lo sentimos pero el enlace que buscas no existe <a href="<?php echo dominio; ?>">Regresar al sitio</a></p>
        </div>
    </div>
</body>
</html>