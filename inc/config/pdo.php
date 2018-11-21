<?php
require_once('Tools.php');
require_once('../controllers/UserDto.php');

$dto = new UserDto();

$username = 'root';

$result = $dto->getExistingUser($username);

var_dump($result);

?>
