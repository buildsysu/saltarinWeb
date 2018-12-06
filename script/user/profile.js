function photoName(){
    var filename = $('#photo').val().split('\\').pop();
    $('#photoName').html(filename);
}

function loque() {
    var pri = $("#email").val();
    console.log(pri);
}
