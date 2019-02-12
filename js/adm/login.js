$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        var serializ = $(this).serialize();
        $.ajax({
            url: 'login_.php',
            type: 'POST',
            data: serializ,
        })
        .done(function(data) {
            // console.log('data: '+ data);
            if(data === 'Login'){
                // Login
                console.log('ExitoLogin');
                location.href = "./dra/";
            }else if (data === 'ErrorLogin' ) {
                // no existe el usuario
            }else{
                // datos vacios

            }
        })  
    });
    $(".login-adm").validate();

});