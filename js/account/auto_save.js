function alerta(msj){
			      M.toast({
			      html: 'Datos Guardados con éxito',
			      displayLength: 2000,
			      classes: "blue lighten-5 black-text",
			      })
			    }
			(function ($){
				'use strict';
				$("#preventDefault").submit(function(e) {
					e.preventDefault;
				});

				function submit_datos() {
					var data = $("#preventDefault").serialize();
					// var data = $("#preventDefault, #enviar").serialize();
			    	var url = 'https://compitweb.com/account/_include/auto_save.php';
			        $.ajax({
			        	url: url,
			            type: 'POST',
			            data: data,
			            success: function (data) {
			                // console.log(data);
			                // alerta();
			            },
			            error: function(data) {
			                // console.log(data);
			            }
			        })
				}
				$("#enviar").click(function() {
					var data = $("#preventDefault, #enviar").serialize();
			    	var url = 'https://compitweb.com/account/_include/auto_save.php';
			        $.ajax({
			            url: url,
			            type: 'POST',
			            data: data,
			            success: function (data) {
			                // console.log(data);
			                $('.msj').html(data);
			            },
			            complete: function () {
			                location.href = "https://compitweb.com/account/";
			            	
			            },
			            error: function(data) {
			                // console.log(data);
			            }
			        })
				});
			    $(".precagar").on('change', function() {
			    	submit_datos();
			    	$(".hid").fadeIn(400);
			    });
			})(jQuery);