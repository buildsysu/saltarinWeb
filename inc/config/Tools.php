<?php
require_once('config.php');
/**
* Clase que contiene funciones útiles sobre la funcionalidad del programa
*
* @package  Saltarin Web App
* @author   Build Sys
* @license  BUild Sys
*/
class Tools{
    /**
    * Devuelve una instancia de la conexión a la base de datos
    * @return type
    */
    function connectDB(){
        $conexion;
        try {
            $conexion = new PDO('mysql:host='.SERVER.';dbname='.DB.'',USER,PASS);
            if($conexion){
            }else{
                echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>';
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $conexion;
    }
    /**
    * Desconecta la base de datos a partir de la instancia que le pasamos
    * @param type $conexion
    * @return type
    */
    function disconnectDB($conexion){
        $conexion = null;
    }

}
?>
