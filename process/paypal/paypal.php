<?php
	session_start();
	require_once "../procesos.php";
	echo $_SESSION['id'];

	$id = $_SESSION['id'];
		$query = "SELECT * FROM carrito WHERE userId = '".$id."' ";
		$consulta = mysqli_query(BaseDatos::conectar(), $query);
		if ($row = mysqli_fetch_array($consulta)) {

			$product_name = $row['productoNombre'];
			$product_id = $row['productoId'];
			$product_price = $row['productoMonto'];
			$product_currency = "usd";





$clienteID = "AfdY1jk6Z4XePl0Jja0f16-AZ3PlCWwGSGAJYiyEtXG3_tNbQvIfh_1Z9qPGgWIK9jMmhQGfSFv--O2F";
	$secret = "EP7dJp3aRhKLMDTsb90xQSQa9XFvd2qzhQ2PXP3fHdv4jrw95qPWTSak0iPfAj5jp1miHlCgHSaqcuzX";

	// $curl = 'url -v https://api.sandbox.paypal.com/v1/oauth2/token';
	// CURL_SET

	//URL Paypal Modo pruebas.
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	//URL Paypal para Recibir pagos
	//$paypal_url = 'https://www.paypal.com/cgi-bin/webscr';

	//Correo electronico del comercio.
    $merchant_email = 'joaquinobed123456@gmail.com';

	//Pon aqui la URL para redireccionar cuando el pago es completado
	$cancel_return = "http://localhost/paypal-integracion/productos.php";

	//Colocal la URL donde se redicciona cuando el pago fue completado con exito.
	$success_return = "http://localhost/paypal-integracion/success.php";

?>
<div style="margin-left: 40%">
	<form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="cancel_return" value="<?php echo $cancel_return ?>">
		<input type="hidden" name="return" value="<?php echo $success_return; ?>">
		<input type="hidden" name="business" value="<?php echo $merchant_email; ?>">
		<input type="hidden" name="lc" value="C2">
		<input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
		<input type="hidden" name="item_number" value="<?php echo $product_id; ?>">
		<input type="hidden" name="amount" value="<?php echo $product_price; ?>">
		<input type="hidden" name="currency_code" value="<?php echo $product_currency; ?>">
		<input type="hidden" name="button_subtype" value="services">
		<input type="hidden" name="no_note" value="0">
	</form>
</div>
<script type="text/javascript">
	document.myform.submit();
</script>


<?php








		}else{

		}

