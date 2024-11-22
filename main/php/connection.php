<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'estacio';

$conn = mysqli_connect($host, $user, $password, $database) or trigger_error(mysqli_error($conn),E_USER_ERROR);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

mysqli_select_db($conn,$database);


?>