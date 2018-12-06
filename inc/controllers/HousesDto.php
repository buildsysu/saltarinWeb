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
    
    function readbyid($idhouse) {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare("SELECT  * FROM Houses inner join address on address.idAddress=houses.fk_idAddress inner join services on houses.fk_idServices=services.idServices
                                        where idHouses=$idhouse");
        $consulta->execute();
        
        
        $result=$consulta->fetch();
        return $result;
    }
    function readServicesbyid($id)
    {
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare("SELECT  * FROM services where idServices=$id");
        $consulta->execute();
        
        
        $result=$consulta->fetch();
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
    function foundRows($ini,$fin){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM Houses inner join address on address.idAddress=houses.fk_idAddress where fk_idHouseStatus <>3 LIMIT $ini,$fin");
        $consulta->execute();
        
        $total=$conexion->query("SELECT FOUND_ROWS() AS total");
        
        return $total;
    }



    //Filtro
    function foundRowsFiltro($ini,$fin,$rooms,$from,$to,$bath,$nhost){
        $connect = new Tools();
        
        $conexion=$connect->connectDB();
        
        $cadenaConsulta=$this->RealizaConsulta($ini,$fin,$rooms,$from,$to,$bath,$nhost);
        
        $consulta=$conexion->prepare($cadenaConsulta);
        $consulta->execute();
        
        $total=$conexion->query("SELECT FOUND_ROWS() AS total");
        
        return $total;
    }
    function RealizaConsulta($ini,$fin,$rooms,$from,$to,$bath,$nhost){
        
        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM Houses inner join address on address.idAddress=houses.fk_idAddress where fk_idHouseStatus <>3";
        
        if($rooms>0){
            $consulta=$consulta." AND rooms=$rooms";
        }      
        if($rooms>0){
            $consulta=$consulta." AND rooms=$rooms";
        }   
        
        return $consulta." LIMIT $ini,$fin";
    }
    function readLimitFiltro($ini,$fin,$rooms,$from,$to,$bath,$nhost){
        $connect = new Tools();
        
        $conexion=$connect->connectDB();
        
        $cadenaConsulta=$this->RealizaConsulta($ini,$fin,$rooms,$from,$to,$bath,$nhost);
        
        $consulta=$conexion->prepare($cadenaConsulta);
        $consulta->execute();
        $result=$consulta->fetchAll();
        return $result;
    }
    //termina filtro
    function readLimit($ini,$fin){
        $connect = new Tools();
        $conexion=$connect->connectDB();
        $consulta=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM Houses inner join address on address.idAddress=houses.fk_idAddress where fk_idHouseStatus <>3 LIMIT $ini,$fin");
        $consulta->execute();
        $result=$consulta->fetchAll();
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
