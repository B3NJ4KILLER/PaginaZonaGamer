<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if ($correo && $password) {
        
        $stmt = $conexion->prepare("UPDATE subscriptores SET password = ? WHERE correo = ?");
        $stmt->bind_param("ss", $password, $correo);

        if ($stmt->execute()) {
            
            header("Location: login.php");
            exit();
        } else {
            echo "Error al actualizar la contraseña: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }

    $conexion->close();
}
?>