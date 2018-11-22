<?php session_start();

require_once '../inc/config/Tools.php';
require_once '../inc/controllers/UserDto.php';
require_once '../inc/controllers/ProfilePictureDto.php';

$uDto = new UserDto();
$ppDto = new ProfilePictureDto();
$idUser = $uDto->getIdUser($_SESSION['username']);
$user = $uDto->read($idUser);
$purl = $ppDto->read($user['fk_idProfilePicture']);

if ($purl != false) {
    $profilePicture = '../img/user/' . $purl;
} else {
    $profilePicture = '../img/user/default.png';
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['photo']['tmp_name']);
    if ($check != false) {
        $destiny = '../img/user/';
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_upload = $destiny . $rand . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $file_upload);

        $idPp = $ppDto->create($rand . $_FILES['photo']['name']);
        $uDto->updateProfilePicture($idPp,$idUser);

        $_SERVER['REQUEST_METHOD'] = null;
        $_FILES = null;

        header('Location: profile.php');
    } else {
        $errores .= "No es un formato de imagen válido.";
    }
}

require '../view/user/profile.view.php';
?>
