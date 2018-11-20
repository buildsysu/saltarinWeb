<?php

require_once 'inc/config/Tools.php';
require_once 'inc/controllers/UserDto.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);

    $errores = '';
        $dto = new UserDto();

    if (empty($username) or empty($password)) {
        $errores .= '<li>Por favor rellena todos los campos</li>';
    } else {
        $check = $dto->getExistingUser($username);

        if($check == false) {
            $errores .= "<li>El usuario o contraseña no son válidos.</li>";
        }
    }

    if ($errores == '') {
        $result = $dto->create($username,$password,$name,$lastname,$email,$phone,$userType);

        header('Location: login.php');
    }

}

require 'view/login.view.php';
?>
