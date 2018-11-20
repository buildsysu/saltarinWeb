var images = ['teques1.jpg', 'teques2.jpg', 'teques3.jpg', 'teques4.jpg', 'teques5.jpg', 'teques6.jpg'];

function randomBackground() {
    $('body').css({'background-image': 'url(../img/' + images[Math.floor(Math.random() * images.length)] + ')'});
}

$(document).ready(function(){
    randomBackground();
});
