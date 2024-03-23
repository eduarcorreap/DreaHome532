<?php

$host = "localhost";
$User = "root";
$pass = "";

$db = "dreamhome";
$conexion = mysqli_connect($host, $User, $pass, $db);

if (!$con) {
    echo "connexion fallida";
}



?>