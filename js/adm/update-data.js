$(document).ready(function() {
	$("#data").submit(function(event) {
		event.preventDefault();
	});
	/*
		#add_paypal
		#add_telefono
		#changer_direccion
		#changer_email
		#old_password
		#new_password
	*/
	function alerta(html){
      M.toast({
      html: html,
      displayLength: 2000,
      classes: "red",
      // completeCallback: function(){alert('Your toast was dismissed')}
      })
    }
	$("#data").submit(function(event) {
		event.preventDefault();
		var data = $(this).serialize();
			$.ajax({
				url: 'https://compitweb.com/administrador/dra/account/update-data.php',
				type: 'POST',
				data: data,
			})
			.done(function(data) {
				// console.log("success: " + data);
				if (data == 'Error') {
					alert("Se ha producido un error");
				}else{
					alerta("Los datos se ha actualizado correctamente");
					location.href = "";
				}
			})
			.fail(function(data) {
				// console.log("error: " + data);
			})
	});

});