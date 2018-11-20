<?php

class UserTypeDto{

    function getUserType($id) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT userType FROM UserType WHERE idUserType = :id LIMIT 1');
        $consulta->execute(array(':id' => $id));
        $result = $consulta->fetch();
        return $result;
    }
    
}
?>
