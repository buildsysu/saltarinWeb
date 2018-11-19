<?php
include_once 'inc/config/functions.php';
/**
 * Esta clase contiene las funciones necesarias para gestionar la tabla table1 de la base de datos
 *
 * @package  Saltarin Web App
 * @author   Build Sys
 * @license  BUild Sys
 */
class UserDto{

    public $ID = 0;
    /**
     * Crea una nueva fila en la tabla table1.
     * @param type $name
     * @param type $name_twitter
     * @param type $fecha_inicio
     * @param type $fecha_final
     * @return type
     */
 function create($username,$password,$name,$lastname,$email,$phone,$fk_idUserType){

        $connect = new Tools();
        $conexion = $connect->connectDB();
        $sql = "insert into User (username,password,name,lastname,email,phone,fk_idUserType)
        values ('".$username."','".$password."','".$name."','".$lastname."','".$email."','".$phone."','".$fk_idUserType."');";
        $consulta = mysqli_query($conexion,$sql);
        if($consulta){
        }else{
               echo "No se ha podido insertar en la base de datos<br><br>".mysqli_error($conexion);
        }
        $connect->disconnectDB($conexion);
        return $consulta;
    }
    /**
     * Modifica la tabla con los datos introducidos
     * @param type $name
     * @param type $name_twitter
     * @param type $fecha_inicio
     * @param type $fecha_final
     * @return type
     */
    function update($idUser,$username,$password,$name,$lastname,$email,$phone,$fk_idUserType){

        $connect = new Tools();
        $conexion = $connect->connectDB();
        $sql = "UPDATE table1 SET "
                . "username = '$username', "
                . "password = '$password', "
                . "name = '$name', "
                . "lastname = '$lastname', "
                . "email = '$email', "
                . "phone = '$phone', "
                . "fk_idUserType = '$fk_idUserType'
        WHERE idUser = '.$idUser.' ;";
        $consulta = mysqli_query($conexion,$sql);
        if(!$consulta){
               echo "No se ha podido modificar la base de datos<br><br>".mysqli_error($conexion);
        }
        $connect->disconnectDB($conexion);
        return $consulta;

    }
    /**
     * Borra el elemento a partir de un ID dado
     * @param type $ID
     * @return type
     */
    function delete($ID){
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $sql = "DELETE FROM User WHERE idUser=$ID;";
        $consulta = mysqli_query($conexion,$sql);
        if($consulta){
        }else{
               echo "No se ha podido borrar la table1<br><br>".mysqli_error($conexion);
        }
        $connect->disconnectDB($conexion);
        return $consulta;
    }
    /**
     * Devuelve un array con la información de una fila a partir de un ID
     * @return type
     */

    function getData(){
        //Creamos la consulta
        $sql = "SELECT * FROM User WHERE idUser = $this->ID;";
        //obtenemos el array
        $tool = new Tools();
        $array = $tool->getArraySQL($sql);
        return $array;
    }

    function login($username){
        //Creamos la consulta
        $sql = "SELECT password FROM User WHERE username = '.$username.';";
        //obtenemos el array
        $tool = new Tools();
        $array = $tool->getArraySQL($sql);
        return $array[0][0];
    }

    /**
     * Devuelve Toda la información de la tabla table1
     * @return type
     */
    function getAllInfo(){
        //Creamos la consulta
        $sql = "SELECT * FROM table1;";
        //obtenemos el array
        $tool = new Tools();
        $array = $tool->getArraySQL($sql);
        return $array;
    }
}
?>
