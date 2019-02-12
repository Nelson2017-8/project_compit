<?php

    require_once "../../process/procesos.php";

    function pathRequire($path){
    	$p = "";
		$url =  explode("/",$_SERVER["REQUEST_URI"]);
		$count = count($url) - 2;
		for ($i = 0; $i < $count; $i++) {
			$p .= "../";
		}
		$require = $p.$path;
		require_once $require;
		// return $require;
    }
	function dataUser(){
        $id = $_SESSION['id'];
		$query = "SELECT * FROM clientes WHERE Id_clientes = '".$id."' ";
        $sql = new sql();
        $resul = $sql->arrayDatos($query);
        $_SESSION['nombre'] = $resul[1]." ".$resul[2];
        $_SESSION['correo'] = $resul[3];
        $_SESSION['codEmail'] = $resul[7];
        $_SESSION['pais'] = $resul[5];
        $_SESSION['telefono'] = $resul[6];
        $_SESSION['fechaReg'] = $resul[8];
	}

	function show_table($table){
        $id = $_SESSION['id'];
		$query = "SELECT * FROM proyectos WHERE id_user = '".$id."' ORDER BY fecha_ini DESC ";
        $conexions = mysqli_query(BaseDatos::conectar(), $query);

		switch ($table) {
			case 'proyectoProgress':
				if($row = mysqli_fetch_array($conexions)){
					echo '<div class="container" style="width: 90%">
					<table class="striped centered">
						<thead>
							<tr>
								<th>Proyecto</th>
								<th>Servicio</th>
								<th>Inicio</th>
								<th>Entrega</th>
								<th>Pre (min)</th>
								<th>Pre (max)</th>
								<th>Coste Real</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>';
					do{
						echo '<tr class="small-11">
							<td>'.$row['nombre'].'</td>
							<td>'.$row['servicio'].'</td>
							<td>'.$row['fecha_ini'].'</td>
							<td>'.$row['fecha_fin'].'</td>
							<td>'.$row['presupuesto_min'].'</td>
							<td>'.$row['presupuesto_max'].'</td>
							<td>'.$row['coste_real'].'</td>
							<td>'.$row['estado'].'</td>
						</tr>';
					} while($row = mysqli_fetch_array($conexions) );
						echo '</tbody> </table> </div> <p>&nbsp;</p>';
						echo '<div class="container" style="width: 90%; margin-bottom: 100px;"> <a class="btn blue white-text" href="'.dominio.'account/proyecto/iniciar/">Iniciar un Proyecto Nuevo</a> </div>';
				}else{
					?>
						<p>No tienes ningún proyecto, <a href="<?php echo dominio; ?>/account/proyecto/iniciar/">iniciar uno nuevo</a> o explora entre nuestros servicios.</p>
						<?php require_once "../../_include/services-home.php"; ?>
					<?php
				}
			break;


			case 'precioTable':
				if($row = mysqli_fetch_array($conexions)){
					echo '<div class="col s6 ml-20 my-20">
						<input class="search_filtro" type="search" placeholder="Filtrar en Base de Datos">
					</div>';
					echo '<div class="container" style="width: 90%">
						<table class="striped centered">
							<thead>
								<tr>
									<th>Servicio</th>
									<th>Tipo</th>
									<th>Tiempo de Elaboración</th>
									<th>Precio</th>
								</tr>
							</thead>
							<tbody>';
					do{
						echo '<tr class="small-11">
							<td>'.$row['servicio'].'</td>
							<td>'.$row['detalle'].'</td>
							<td>'.$row['fecha_e'].' (días)</td>
							<td>'.$row['precio'].'$</td>
						</tr>';
					} while($row = mysqli_fetch_array($conexions) );
						echo '</tbody> </table> </div> <p>&nbsp;</p>';
						echo '<div class="container" style="width: 90%; margin-bottom: 100px;"> <a class="btn blue white-text" href="https://compitweb.com/account/proyecto/iniciar/">Iniciar un Proyecto Nuevo</a> </div>';
				}else{
					?>
						<div class="container" style="width: 90%">
							No hay resultado por favor cargen una lista de precios
						</div>
					<?php
				}
			break;

			case "precioDesing":
				if ($row = mysqli_fetch_array($conexions)) {
					echo '<table class="striped centered td-justify-small">
							<thead>
								<tr>
									<th>Tipo de Diseño</th>
									<th>Duración</th>
									<th>Presupuesto-Monto</th>
									<th>Contractar</th>
								</tr>
							</thead>
							<tbody>
								<tr>';
					do{
						echo '<td>'.$row["nombre"].'</td>
								<td>'.$row["duraction"].'</td>
								<td>'.$row["monto"].'</td>
								<td><a href="'.$row["link"].'">Solicitar</a></td>';
					}while($row = mysqli_fetch_array($conexions));
					echo '</tr>
						</tbody>
					</table>';
				}else{
					echo '<p class="red-text">Error: No hay datos que mostrar</p>';
				}
			break;
			case 'precioMantenimineto':
				if ($row = mysqli_fetch_array($conexions)) {
					echo '<table class="striped centered td-justify-small">
							<thead>
								<tr>
									<th>Servicio</th>
									<th>Duración</th>
									<th>Presupuesto-Monto</th>
									<th>Descripcion</th>
									<th>Contractar</th>
								</tr>
							</thead>
							<tbody>
								<tr>';
					do{
						echo '<td>'.$row["nombre"].'</td>
								<td>'.$row["duraction"].'</td>
								<td>'.$row["monto"].'</td>
								<td>'.$row["description"].'</td>
								<td><a href="'.$row["link"].'">Solicitar</a></td>';
					}while($row = mysqli_fetch_array($conexions));
					echo '</tr>
						</tbody>
					</table>';
				}else{
					echo 'Error: No hay datos que mostrar';
				}
				break;
		}


}


?>