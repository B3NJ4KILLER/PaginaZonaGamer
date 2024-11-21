<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    
    $query = "UPDATE subscriptores SET password = ? WHERE id = ?";

    $stmt = $conexion->prepare($query);

    if ($stmt) {
        
        $stmt->bind_param("si", $password, $id);

        
        if ($stmt->execute()) {
            
            header("Location: subscriptores.php");
            exit();
        } else {
            echo "Error al actualizar la contraseña: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }

    $conexion->close();
}
?>