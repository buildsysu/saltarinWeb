function registerUser() {
    $.ajax({
        type: 'method', //aqui puede ser igual get
        url: 'action',//aqui va tu direccion donde esta tu funcion php
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