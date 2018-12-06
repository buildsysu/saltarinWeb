<?php session_start();
header("Cache-Control: no-cache, no-store, must-revalidate");

require_once '../inc/config/Tools.php';
require_once '../inc/controllers/UserDto.php';
require_once '../inc/controllers/ProfilePictureDto.php';

$uDto = new UserDto();
$ppDto = new ProfilePictureDto();
$edition = false;
if ($_GET['user'] == $_SESSION['username']) {
    $edition = true;
}
$idUser = $uDto->getIdUser($_GET['user']);
$user = $uDto->read($idUser);
$purl = $ppDto->read($user['fk_idProfilePicture']);

if ($purl != false) {
    $profilePicture = '../img/user/' . $purl;
} else {
    $profilePicture = '../img/user/default.jpg';
}

if(!empty($_SESSION['error'])) {
    $errores = $_SESSION['error'];
    $_SESSION['error'] = null;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUser = $uDto->getIdUser($_SESSION['username']);
    $errores = '';

    if(!empty($_FILES)) {
        $check = @getimagesize($_FILES['photo']['tmp_name']);
        if ($check != false) {
            $rand = substr(md5(microtime()),rand(0,26),10);
            $file_upload = '../img/user/' . $rand;
            move_uploaded_file($_FILES['photo']['tmp_name'], $file_upload);

            $idPp = $ppDto->create($rand);
            $uDto->updateProfilePicture($idPp,$idUser);
            unset($_FILES);
        }
    }

    if(!empty($_POST['lastpass'])) {
        $lastpass = sha1($_POST['lastpass']);
        if (!empty($_POST['password'])) {
            $user = $uDto->read($idUser);
            $password = sha1($_POST['password']);
            if($user['password'] == $lastpass) {
                $uDto->updatePassword($idUser,$password);
            } else {
                $errores .= "La contraseña actual no coincide.<br>";
            }
        } else {
            $errores .= "Por favor rellene todos los campos.<br>";
        }
    }

    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    if(!empty($email) && !empty($phone)) {
        $uDto->updateInfo($idUser,$email,$phone);
    } else {
        $errores .= "Por favor rellene todos los campos.<br>";
    }

    if ($errores != '') {
        $_SESSION['error'] = $errores;
    }

    unset($_POST['lastpass']);
    header('Location: profile.php?user='.$_SESSION['username']);

}

require '../view/user/profile.view.php';
?>
