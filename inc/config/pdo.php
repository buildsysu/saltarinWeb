<?php session_start();
require_once('Tools.php');
require_once('../controllers/UserDto.php');
require_once('../controllers/ProfilePictureDto.php');

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

?>
