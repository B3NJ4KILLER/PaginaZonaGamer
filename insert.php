<?php
include("conexion.php"); 


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$numdepa = $_POST['numdepa'];
$password = $_POST['password'];


$sql = "INSERT INTO subscriptores (nombre, apellidos, usuario, telefono, correo, genero, fecha, direccion, numdepa, password) 
        VALUES ('$nombre', '$apellidos', '$usuario', '$telefono', '$correo', '$genero', '$fecha', '$direccion', '$numdepa', '$password')";


$query = $conexion->query($sql);


if ($query) {
    Header("Location: subscriptores.php"); 
} else {
    echo "Error al insertar el registro: " . $conexion->error;
}
?>

