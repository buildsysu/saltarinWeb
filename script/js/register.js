function registerUser() {
    $.ajax({
        type: 'POST', //aqui puede ser igual get
        url: 'script/php/register.php',//aqui va tu direccion donde esta tu funcion php
        data: $("#registerForm").serialize(),
        success:function(result){
            //lo que devuelve tu archivo mifuncion.php
            console.log(result);
        },
        error:function(result){
            //lo que devuelve si falla tu archivo mifuncion.php
            console.log("No lo logré :(");
            console.log(result);
        }
    });
}

$(document).ready(function(){
    // event.preventDefault;
});