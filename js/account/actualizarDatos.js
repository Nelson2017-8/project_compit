$(document).ready(function() {
	$("#data").submit(function(event) {
		event.preventDefault();
	});
	/*
		#add_pais
		#add_estado
		#add_telefono
		#changer_email
		#old_password
		#new_password
	*/
});
	$(function cambiar_datos_auto() {
		$("#add_pais, #add_estado, #add_telefono, #changer_email").change(function() {
			var data = $(this).serialize();
			$.ajax({
				url: 'https://compitweb.com/account/cuenta/actualizarDatos.php',
				type: 'POST',
				data: data,
			})
			.done(function(data) {
				console.log("success: "+ data);
			})
			.fail(function(data) {
				console.log("error: "+ data);
			})
			.always(function(data) {
				console.log("complete: "+ data);
			});
			
		});
		$("#old_password, #new_password").change(function() {
			var data = $(this).serialize();
			$.ajax({
				url: 'https://compitweb.com/account/cuenta/actualizarDatos.php',
				type: 'POST',
				data: data,
			})
			.done(function(data) {
				console.log("success: "+ data);
			})
			.fail(function(data) {
				console.log("error: "+ data);
			})
			.always(function(data) {
				console.log("complete: "+ data);
			});
			
		});
	});