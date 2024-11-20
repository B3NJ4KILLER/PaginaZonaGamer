<?php
// Conexión a la base de datos
$server = "localhost";
$user = "root";
$pass = "";
$db = "usuarios";
$port = 3307;


$conexion = new mysqli($server, $user, $pass, $db, $port);


if ($conexion->connect_errno) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

// echo "Conexión exitosa";
?>
