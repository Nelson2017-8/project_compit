<?php
	require_once "../../../process/dominio.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../../_include/head_materialize.php";?>
</head>
<body class="grey lighten-5">
	<?php include_once '../../_include/aside_left.php'; ?>
	<section id="hide" class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="container w-90">
			<div class="section">
				<p class="flow-text"><b>Comenzar un Nuevo Proyecto</b></p>
				<hr>
				<div class="justify">
					<!-- lorem 80 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos assumenda dicta officiis rerum impedit rem temporibus molestiae labore facere tempore, suscipit laborum? Magnam nobis, omnis ex ducimus, facilis pariatur saepe vitae numquam velit minus ea sapiente, eveniet corporis reiciendis necessitatibus tenetur sed ab esse quam ipsum. Suscipit corporis at in repudiandae magni dolore dolorem similique ab tempore voluptate, aut eveniet enim earum aliquid unde ex esse porro, provident animi, tenetur saepe repellendus nostrum adipisci. Dolor, aut iste? Id repudiandae, praesentium.</p>
				</div>
			</div>
			 <a id="trigger-form" class="waves-effect waves-light btn" href="#">Iniciar</a>
		</div>
	</section>
	<section id="show" class="hid col m12 l9 offset-l3 offset-xl3 s12">
		<div class="container section">
			<div class="col s12 card section">
				<div class="card-content">
					<form class="iniciarProject">
						<p class="flow-text blue-text">Información del Proyecto</p>
						<div class="input-field col s12">
							<input required type="text" name="nombre_proyecto" class="validate">
							<label for="Nombre_Proyecto">Nombre del proyecto</label>
						</div>
						<div class="input-field col s12">
							<select required multiple name="areas_profesionales_incluir[]" >
								<option value="Actualización Web">Actualización Web</option>
								<option value="Analítica Web">Analítica Web</option>
								<option value="Community Manager">Community Manager</option>
								<option value="Desarrollo Web">Desarrollo Web</option>
								<option value="Diseño Gráfico">Diseño Gráfico</option>
								<option value="Diseño Web">Diseño Web</option>
								<option value="Imprenta">Imprenta</option>
								<option value="Mantenimiento Web">Mantenimiento Web</option>
								<option value="Marketing Digital">Marketing Digital</option>
								<option value="SEO">SEO</option>
								<option value="Otros">Otros</option>
							</select>
							<label>Áreas profesional</label>
						</div>
						<div class="input-field col s12">
							<label>Describa su proyecto</label>
							<textarea required name="description" class="validate materialize-textarea" ></textarea>
						</div>
						<div class="col s12">
							<label>
								<input type="checkbox" id="analisis" name="incluir_analisis_estadistico">
								<span>Incluir el servicio de Análisis de Proyecto</span>
							</label>
						</div>
						<p>&nbsp;</p>
						<div class="input-field col s12" id="hide-p" style="display: none">
							<select name="analisis_estadistico">
								<option value="50">Paquete 50$</option>
								<option value="70">Paquete 70$</option>
								<option value="100">Paquete 100$</option>
							</select>
							<label>Versión del Paquete Análisis-Estadístico</label>
						</div>
						<div class="input-field col s6">
							<label>Presupuesto Mínimo (valorado en dólares)</label>
							<input required id="pre_min" type="number" name="pre_min" class="validate" placeholder="100">
						</div>
						<div class="input-field col s6">
							<label>Presupuesto Máximo (valorado en dólares)</label>
							<input required id="pre_max" type="number" name="pre_max" class="validate" placeholder="1000">
						</div>
						<div id="msj_pre" class="col s12" style="display: none;">
							<p class="red lighten-1 white-text" style="padding: 10px 30px; border-radius: 3px;">El Presupuesto min es mayor o igual al presupuesto max</p>
						</div>
						<div class="container col s12" style="margin: 20px 0 40px;">
							<button type="submit" class="btn blue enviar">Enviar Proyecto</button>
						</div>
						<div class="container col s12">
							<p class="msj-server"></p>
						</div>
					</form>
				</div>
			</div>
		</div>


	</section>
	<?php include_once '../../_include/section_body_fin.php'; ?>
	<script src="<?php echo dominio;?>/js/account/iniciar_project.js"></script>
	<script>
		$(document).ready(function() {
			$("#trigger-form").click(function(event) {
				event.preventDefault();
				$("#show").fadeIn(400);
				$("#hide").fadeOut(400);
			});
		});
	</script>
</body>
</html>