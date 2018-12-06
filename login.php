<?php session_start();

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
        $check = $dto->login($username, $password);

        if($check == false) {
            $errores .= "<li>El usuario o contraseña no son válidos.</li>";
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['type'] = $check['fk_idUserType'];
            var_dump($_SESSION);
            header('Location: index.php');
        }
    }

}

require 'view/login.view.php';
?>
