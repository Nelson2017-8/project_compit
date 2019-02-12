<?php
	require_once "../../../process/dominio.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../../_include/head_materialize.php";?>
</head>
<body>
	<?php include_once '../../_include/aside_left.php'; ?>
	<section class="col m12 l9 offset-l3 offset-xl3 s12">
		<div class="container w-90">
			<div class="section">
				<p class="flow-text"><b>Tus Proyectos</b></p>
				<hr>
				<div class="justify">
					<!-- lorem 80 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos assumenda dicta officiis rerum impedit rem temporibus molestiae labore facere tempore, suscipit laborum? Magnam nobis, omnis ex ducimus, facilis pariatur saepe vitae numquam velit minus ea sapiente, eveniet corporis reiciendis necessitatibus tenetur sed ab esse quam ipsum. Suscipit corporis at in repudiandae magni dolore dolorem similique ab tempore voluptate, aut eveniet enim earum aliquid unde ex esse porro, provident animi, tenetur saepe repellendus nostrum adipisci. Dolor, aut iste? Id repudiandae, praesentium.</p>
				</div>
			</div>
			<?php require_once "../../_include/function.php"; show_table('proyectoProgress');?>
		</div>

	</section>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>