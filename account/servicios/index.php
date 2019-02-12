<?php
    include_once "../../process/dominio.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "../_include/head_materialize.php";?>
</head>
<body class="row">
	<?php include_once '../_include/aside_left.php'; ?>

	<?php include_once "_include_servicio.php"; ?>

	<script src="<?php echo dominio; ?>/lib/jquery/jquery.min.js"></script>
	<?php include_once '../_include/section_body_fin.php'; ?>
	<script>
		$("#changerData").click(function() {
			$("#data").fadeToggle(400);
		});
	</script>
</body>
</html>