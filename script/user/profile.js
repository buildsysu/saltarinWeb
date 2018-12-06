function photoName(){
    var filename = $('#photo').val().split('\\').pop();
    $('#photoName').html(filename);
}
