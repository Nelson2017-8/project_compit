<?php  
	/* 
	Requiere de una variable $banner_publicitario poibles valores a tomar
		"desarrolloWeb";
		"desingWeb";
		"desing";
		"mantenimientoWeb";
	y pasar el html a incluir
	*/
?>
<!--  end -->
<?php 
	function printBadge($id)
	{
		$query = "SELECT * FROM adm_notification WHERE user_id = '".$id."' and leido = '0'";
		$conexion = mysqli_query(conectar(), $query);
		if ($row = mysqli_num_rows($conexion)) {
			echo '<span class="np-badge">'.$row.'</span>';
		}else{
			// echo 0;
		}
	}
 ?>
	<section class="col s12 left" id="addClass" style="padding:  0 3em;">
		<header class="header grey darken-4">
			<div class="header-left">
				<p id="menu-sidebar" class="sidenav-trigger" data-target="menu-side"><i class="material-icons">menu</i></p>
				<p><?php echo $_SESSION['nombre-adm']; ?></p>
			</div>
			<ul class="header-right">
				<li><a class="dropdown-main" data-target="notifications" href="#"><i class="material-icons">notifications</i><?php printBadge($_SESSION['id-adm']); ?></a></li>
				<li><a class="dropdown-main" data-target="account" href="#"><i class="material-icons">account_circle</i></a></li>
			</ul>
			<!-- estructura notifications -->
			<ul id="notifications" class="dropdown-content">
				<?php  
					function consulta_notification($id){
						$query = "SELECT * FROM  adm_notification WHERE user_id = '".$id."' and leido = '0' ORDER BY fecha DESC ";
						$conexion = mysqli_query(conectar(), $query);
						if ($row = mysqli_fetch_array($conexion)) {
							do{
								echo '<li><a href="'.$row['link'].'">'.$row['title'].'</a></li>';
							}while($row = mysqli_fetch_array($conexion) );

						}else{
							echo '<li><a href="#">No tienes notificaciones que mostrar</a></li>';
						}
					}
					consulta_notification($_SESSION['id-adm']);
				?>
			</ul>
			<!-- estructura account -->
			<ul id="account" class="dropdown-content">
				<li><a href="https://compitweb.com/account/proyecto/proceso/">Proyectos</a></li>
				<li><a href="https://compitweb.com/account/cuenta/">Cuenta</a></li>
				<li><a href="https://compitweb.com/process/cerrar_session_adm.php">Cerrar Sessión</a></li>
			</ul>
		</header>
		<p>&nbsp;</p>
