<?php
require_once('Tools.php');

$connect = new Tools();
$conexion = $connect->connectDB();

$result = $conexion->query('SELECT * FROM User');

foreach ($result as $res) {
    echo $res['name'];
}

?>
