<?php session_start();
require_once 'inc/config/Tools.php';
require_once 'inc/controllers/UserDto.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $userType = 4;

    $errores = '';
        $dto = new UserDto();

    if (empty($username) or empty($password)) {
        $errores .= '<li>Por favor rellena todos los campos</li>';
    } else {
        $check = $dto->getExistingUser($username);

        if($check != false) {
            $errores .= "<li>Lo sentimos, el usuario ya existe.</li>";
        }

        $check = $dto->getExistingEmail($email);

        if($check != false) {
            $errores .= "<li>Lo sentimos, el correo ya está registrado con otra cuenta.</li>";
        }
    }

    if ($errores == '') {
        $result = $dto->create($username,$password,$name,$lastname,$email,$phone,$userType);

        header('Location: login.php');
    }

}

require 'view/register.view.php'

 ?>
