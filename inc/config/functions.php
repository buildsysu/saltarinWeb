<meta charset="UTF-8">
<?php

require_once("config.php");

if(DEBUG == "true"){
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}

require_once("Tools.php");
require_once("UserDto.php");
require_once("Table2Class.php");

?>
