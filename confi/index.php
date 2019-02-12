<?php
  require_once "../process/dominio.php";

  if (!empty($_GET['token'])) {
    require_once "../process/procesos.php";
    $sql = new sql();
    $token = $_GET['token'];
    $query = "SELECT * FROM clientes WHERE CodEmail = '".$token."'";
    $variable = $sql->arrayDatos($query);
    // echo $variable[0];
    if ($variable == true) {
?>
<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Compit Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link href="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" rel="icon">

    <link rel="stylesheet" href="<?php echo dominio; ?>/css/confiEmail.css">
</head>
<body>
    <div class="control">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>
    <?php
        $id = $variable[0];
        $updateIf = $sql->general("UPDATE clientes set CodEmail = 'verificado' WHERE Id_clientes = '".$id."' and CodEmail = '".$token."' ");
        if ( $updateIf == true ) {
            $_SESSION['id'] = $id;
            $_SESSION['nombre'] = $variable[1]." ".$variable[2];
            $_SESSION['email'] = $variable[3];
            echo '<script>location.href = "'.dominio.'/account/"</script>';
        }
     ?>
</body>
</html>

<?php
    }else{
        require_once "../error404/index.php";
    }

  }else{
    require_once "../error404/index.php";
}
 ?>