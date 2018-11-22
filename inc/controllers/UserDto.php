<?php

class UserDto{

    function create($username,$password,$name,$lastname,$email,$phone,$userType){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('INSERT INTO User (username,password,name,lastname,email,phone,fk_idUserType)
        VALUES (:username,:password,:name,:lastname,:email,:phone,:userType)');
        $consulta->execute(array(
            ':username' => $username,
            ':password' => $password,
            ':name' => $name,
            ':lastname' => $lastname,
            ':email' => $email,
            ':phone' => $phone,
            ':userType' => $userType
        ));
        $result = $consulta->fetch();
        $connect->disconnectDB($conexion);
        return $result;
    }

    function read($idUser) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT * FROM User WHERE idUser = :id LIMIT 1');
        $consulta->execute(array(':id' => $idUser));
        $result = $consulta->fetch();
        return $result;
    }

    function update($idUser,$username,$password,$name,$lastname,$email,$phone,$fk_idUserType){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('UPDATE User SET username = :username, password = :password, name = :name,
            lastname = :lastname, email = :email, phone = :phone, fk_idUserType = :userType WHERE idUser = :id');
        $consulta->execute(array(
            ':id' => $idUser,
            ':username' => $username,
            ':password' => $password,
            ':name' => $name,
            ':lastname' => $lastname,
            ':email' => $email,
            ':phone' => $phone,
            ':userType' => $userType
        ));
        $result = $consulta->fetch();
        $connect->disconnectDB($conexion);
        return $result;
    }

    function updateProfilePicture($idPp, $idU) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('UPDATE User SET fk_idProfilePicture = :idPp WHERE idUser = :idU');
        $consulta->execute(array(
            ':idPp' => $idPp,
            ':idU' => $idU
        ));
        $result = $consulta->fetch();
        $connect->disconnectDB($conexion);
        return $result;
    }

    function getExistingUser($username) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT username FROM User WHERE username = :username LIMIT 1');
        $consulta->execute(array(':username' => $username));
        $result = $consulta->fetch();
        return $result;
    }

    function getExistingEmail($email) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT email FROM User WHERE email = :email LIMIT 1');
        $consulta->execute(array(':email' => $email));
        $result = $consulta->fetch();
        return $result;
    }

    function getIdUser($username) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT idUser FROM User WHERE username = :username LIMIT 1');
        $consulta->execute(array(':username' => $username));
        $result = $consulta->fetch();
        return 0+$result['idUser'];
    }

    function login($username, $password){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT fk_idUserType FROM User WHERE username = :username AND password = :password LIMIT 1');
        $consulta->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
        $result = $consulta->fetch();
        return $result;
    }
}

?>
