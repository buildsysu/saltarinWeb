<?php

class HousesDto{

    function create($peakSeasonPrice,$offSeasonPrice,$rooms,$baths,$description,$advancePercentage,$houseStatus,$user,$address,$services){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $query = array($peakSeasonPrice,$offSeasonPrice,$rooms,$baths);

        $consulta = $conexion->prepare('INSERT INTO Houses (advancePercentage,description,fk_idHouseStatus,fk_idUser,fk_idAddress,fk_idServices)
        VALUES (:ap,:ds,:hs,:u,:a,:s)');
        $consulta->execute(array(
            ':ap' => $advancePercentage,
            ':ds' => $description,
            ':hs' => $houseStatus,
            ':u' => $user,
            ':a' => $address,
            ':s' => $services
        ));
        $id = $conexion->lastInsertId();
        $i = 0;
        foreach ($query as $q) {
            if ($q != null) {
                $consulta = $conexion->prepare('UPDATE Houses SET ' . $column[$i] . ' = :val WHERE idHouses = :id');
                $consulta->execute(array(
                    ':val' => $q,
                    ':id' => $id
                ));
            }
            $i++;
        }
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

    function update($idUser,$peakSeasonPrice,$offSeasonPrice,$rooms,$baths,$description,$advancePercentage,$fk_idUserType){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('UPDATE User SET username = :username, password = :password, name = :name,
            lastname = :lastname, email = :email, phone = :phone, fk_idUserType = :userType WHERE idUser = :id');
        $consulta->execute(array(
            ':id' => $idUser,
            ':username' => $peakSeasonPrice,
            ':password' => $offSeasonPrice,
            ':name' => $rooms,
            ':lastname' => $baths,
            ':email' => $description,
            ':phone' => $advancePercentage,
            ':userType' => $houseStatus
        ));
        $result = $consulta->fetch();
        $connect->disconnectDB($conexion);
        return $result;
    }

    function getExistingUser($peakSeasonPrice) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT username FROM User WHERE username = :username LIMIT 1');
        $consulta->execute(array(':username' => $peakSeasonPrice));
        $result = $consulta->fetch();
        return $result;
    }

    function login($peakSeasonPrice, $offSeasonPrice){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare('SELECT fk_idUserType FROM User WHERE username = :username AND password = :password LIMIT 1');
        $consulta->execute(array(
            ':username' => $peakSeasonPrice,
            ':password' => $offSeasonPrice
        ));
        $result = $consulta->fetch();
        return $result;
    }

}
?>
