<?php

class ProfilePictureDto{

    function create($url){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('INSERT INTO ProfilePicture (url) VALUES (:url)');
        $consulta->execute(array(
            ':url' => $url
        ));
        $id = $conexion->lastInsertId();
        $result = $consulta->fetch();
        return 0+$id;
    }

    function read($id) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT url FROM ProfilePicture WHERE idProfilePicture = :id');
        $consulta->execute(array(
            ':id' => $id
        ));
        $result = $consulta->fetch();
        return $result['url'];
    }

}

?>
