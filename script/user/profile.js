function photoName(){
    var filename = $('#photo').val().split('\\').pop();
    console.log(filename);
    $('#photoName').html(filename);
}
