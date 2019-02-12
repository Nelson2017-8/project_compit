jQuery(document).ready(function($) {
    /* link */
    $('a[href="#"]').click(function (e) {
        e.preventDefault();
    });
    // reenvio de email
    var id = $("#reenvio_Email");
    $("#reenvio_Email").click(function(event) {
        var url = 'https://compitweb.com/process/reenviar_email.php';
        $.ajax({
            url: url,
            type: 'POST',
            data: {"msj": 'enviar'},
        })
        .done(function(data) {
            $(".resul").html(data);
        })
        .fail(function(data) {
            $(".resul").html(data);
        })          
    });  
    // cargar una foto
    $(".photo_file").click(function() {
        document.getElementById("click_file").click();
    });
    $("#click_file").change(function() {
        var confi = confirm("Desea cambiar su imagen de perfil");
        if (confi === true) {
            var url = "https://compitweb.com/process/subir_foto.php";
            var formData = new FormData($("#subir_photo")[0]);
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
            })
            .done(function(data) {
                $("#img_container").html(data);
                // console.log("success" + data);
            })
            .fail(function(data) {
                $("#img_container").html(data);
                // console.log("error" + data);
            })
            .always(function(data) {
                $("#img_container").html(data);
                // console.log("complete" + data);
                console.log(data);
                $(".imgInf").html(data);
            });
        } else {
            // console.log("Lo siento usted cancelo la operación");
        }
    });
});
// $.noConflict();
jQuery(document).ready(function($) {
    "use strict";
    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
        new SelectFx(el);
    } );
    jQuery('.selectpicker').selectpicker;
    $('#menuToggle').on('click', function(event) {
        $('body').toggleClass('open');
    });
    $('.search-trigger').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $('.search-trigger').parent('.header-left').addClass('open');
    });
    $('.search-close').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $('.search-trigger').parent('.header-left').removeClass('open');
    });
    // $('.user-area> a').on('click', function(event) {
    //  event.preventDefault();
    //  event.stopPropagation();
    //  $('.user-menu').parent().removeClass('open');
    //  $('.user-menu').parent().toggleClass('open');
    // });
});