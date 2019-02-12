/*
    Description: Este Js envia datos al servidor para logear al usuario, validarlo y procesarlo
*/

    var urlVeryUser = dominio + "/process/membresia/function_disponibilidad.php",
        urlRegistro = dominio + '/process/membresia/function_registro.php',
        urlInicio = dominio + '/process/membresia/function_login.php',
        aSession = dominio + "/membresia/inicio/",
        aHrefEmail = dominio + "/dashboard/";
        aHref = dominio + "/dashboard/";

(function ($){
    'use strict';
	$("a[href='#']").click(function(event) {
		event.preventDefault();
	});
    function disable(){
        $("button[type='submit']").attr('disabled', 'disabled');
    }
    function enatible(){
        $("button[type='submit']").removeAttr('disabled');
    }
	// compruebo la disponbilidad del correo
    $(function very_email(){
        $("#email").on('change', function(e) {
            var data = $("#email, #select_1").serialize();
            $.ajax({
                url: urlVeryUser,
                type: 'POST',
                data: data,
                success: function (data) {
                    console.log('data: '+data);
                    if (data == "disponible") {
                        enatible();
                        $(".msj_email").html('');
                    }else{
                        $(".msj_email").html('<div class="alert alert-danger"><strong>Error:</strong> El usuario ya existe.</div>');
                        disable();
                    }
                }
            })
        });
    });
    // VALIDATION OF FORM
    $(".registrar").validate({
        rules:{
            entidad: {required: true},
            nombre:{required: true, minlength: 3 },
            apellido:{required: true, minlength: 3 },
            email:{required: true, minlength: 6, email: true },
            password_1:{required: true, minlength: 6 , maxlength: 24},
            password_2:{required: true, minlength: 6 , maxlength: 24},
            pais:{required: true},
            phone:{required: true},
        },
        messages:{
            // persona
            nombre:{required: "Por favor, escriba su Nombre.", minlength: "Su Nombre como mínimo debe tener 3 caracteres."},
            apellido:{required: "Por favor, escriba su Apellido.", minlength: "Su Apellido como mínimo debe tener 3 caracteres."},
            email:{required: "Por favor, escriba una direccion de correo electrónico valida.", minlength: "Por favor, escriba una direccion de correo electrónico válida."},
            password_1:{required: "Por favor, escriba una contraseña.", minlength: "Su contraseña como mínimo debe tener 6 caracteres."},
            password_2:{required: "Por favor, repita la contraseña anterior.", minlength: "Su contraseña como mínimo debe tener 6 caracteres.", equalTo: "Las contraseñas ingresadas no coinciden vuelva a intentar."},
            phone:{required: "Por favor, intrdoduza un teléfono."},
            phone:{required: "Por favor, intrdoduza un país."},
        }
    });
    // funtion login
    $(".sing_in").submit(function(e) {
    	e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
        	url: urlInicio,
        	type: 'POST',
        	data: data,
            success: function(data) {
                if (data == "Success") {
                    $("#info").html('<div class="alert alert-success">Éxito: usted ha iniciar Sessión.</div>');
                    location.href= aHref;
                }else if (data == "Error") {
                    $("#info").html('<div class="alert alert-danger">Error: Credenciales Invalidas<div>');
                }
            }
        })

    });
    // funtion registrar
    $(".registrar").submit(function(e) {
        e.preventDefault();
        var serialize = $(".registrar").serialize();
        $.ajax({
            url: urlRegistro,
            type: 'POST',
            data: serialize,
            success: function(data) {
                if (data == 'NoDisponible') {
                    $("#info").html('<div class="alert alert-warning">El usuario ya exite <a href='+ aSession +'>Inicie sessión</a></div>');
                }
                else if(data == "errorPOST"){
                    $("#info").html('<div class="alert alert-warning">Error en al enviar Datos</div>');
                }
                else if (data == "Success") {
                    $("#info").html('<div class="alert alert-success">Éxito: usted ha sido registrado con éxito.</div>');
                    location.href = aHrefEmail;
                }
                else if (data == "SuccessNoEmail") {
                    $("#info").html('<div class="alert alert-warning">Éxito: usted ha sido registrado con éxito Pero no se pudo enviar su email.</div>');
                    location.href = aHref;
                }else{
                    $("#info").html('<div class="alert alert-warning">Érror Inesperado</div>');
                }
                console.log(data);
            }
        });
        return false;
    });

})(jQuery);