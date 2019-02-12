function alerta(){M.toast({html: 'Datos Guardados con éxito', displayLength: 2000, classes: "blue lighten-5 black-text", }) }
function redimension() {location.href= "https://compitweb.com/account/"; }
$(document).ready(function() {
	$('#analisis').change(function() {
		var valor =  document.getElementById('analisis').checked;
		if (valor == true) {
			$("#hide-p").fadeIn(400);
		}else{
			$("#hide-p").fadeOut(400);
		}
	});
	$(".iniciarProject").submit(function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = "https://compitweb.com/account/proyecto/iniciar/iniciar_project.php";
		$.ajax({
			url: url,
			type: "POST",
			data: data,
		})
		.done(function(data) {
			// console.log("success: " +data);
			$(".msj-server").html(data);
			// alerta();
		})
		.fail(function(data) {
			// console.log("error: " +data);
			$(".msj-server").html(data);
		})
		.always(function(data) {
			// console.log("complete: " +data);
		});


		// var formData = new FormData($("#areas")[0]);
		// $.ajax({
		// 	url: url,
		// 	type: "POST",
  //           contentType: false,
  //           processData: false,
		// 	data: formData,
		// })
		// .done(function(data) {
		// 	console.log("success: " +data);
		// 	$(".msj-server").html(data);
		// })
		// .fail(function(data) {
		// 	console.log("error: " +data);
		// 	$(".msj-server").html(data);
		// })
		// .always(function(data) {
		// 	console.log("complete: " +data);
		// });
		
	});
});