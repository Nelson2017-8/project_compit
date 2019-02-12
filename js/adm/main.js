// Chat Start of Tawk.to Script
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c5946986cb1ff3c14cb2602/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
})();
// End of Tawk.to Script

$(document).ready(function() {
	$(".registrar").click(function() {
		$(".login-adm").fadeOut(300);
		$(".form-registro").fadeIn(300);
	});
	$(".login").click(function() {
		$(".login-adm").fadeIn(300);
		$(".form-registro").fadeOut(300);
	});
	$(".form-registro").submit(function(e) {
		e.preventDefault();
		var data = new FormData($("#files-form")[0]);
		$.ajax({
			url: 'regis_.php',
			type: 'POST',
			contentType: false,
			processData: false,
			data: data,
		})
		.done(function(data) {
			console.log("data: " + data);
		})
		.fail(function(data) {
			console.log("data: " + data);
		})
	});
});

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
            console.log('data: '+ data);
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