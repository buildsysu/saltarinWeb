<?php session_start();
require_once('Tools.php');
require_once('../controllers/UserDto.php');
require_once('../controllers/ProfilePictureDto.php');
//
$uDto = new UserDto();
$ppDto = new ProfilePictureDto();
// $ppDto = new ProfilePictureDto();
// $idUser = $uDto->getIdUser($_SESSION['username']);
// $purl = $ppDto->read($user['fk_idProfilePicture']);
//
$rand = "something";
$idPp = $ppDto->create($rand);
echo $idPp;
$uDto->updateProfilePicture($idPp,1);
$user = $uDto->read(1);
// if ($purl != false) {
//     $profilePicture = '../img/user/' . $purl;
// } else {
//     $profilePicture = '../img/user/default.png';
// }
var_dump($user)


?>
