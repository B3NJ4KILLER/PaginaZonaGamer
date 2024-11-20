<?php
include('conexion.php');


$nombre = $apellidos = $usuario = $telefono = $correo = $fecha = $direccion = $numdepa = $password = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $query = "SELECT * FROM subscriptores WHERE id='$id'";
    $result = $conexion->query($query);

    if ($result && $result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        $nombre = $fila['nombre'];
        $apellidos = $fila['apellidos'];
        $usuario = $fila['usuario'];
        $telefono = $fila['telefono'];
        $correo = $fila['correo'];
        $fecha = $fila['fecha'];
        $direccion = $fila['direccion'];
        $numdepa = $fila['numdepa'];
        $password = $fila['password'];
    }
}
?>
