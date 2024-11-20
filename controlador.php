<?php
include('conexion.php'); 

if ($conexion->connect_errno) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['iniciarbtn'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    
    $stmt = $conexion->prepare("SELECT * FROM subscriptores WHERE correo = ? AND password = ?");
    $stmt->bind_param("ss", $correo, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        
        echo '<div class="alert alert-success">Inicio de sesión exitoso</div>';
        header("Location: inicio2.php");
        exit();
    } else {
        
        echo '<div class="alert alert-danger">Correo o contraseña incorrectos</div>';
    }

    $stmt->close();
}

$conexion->close();
?>