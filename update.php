<?php
include('conexion.php'); 

$nombre = $apellidos = $usuario = $telefono = $correo = $genero = $fecha = $direccion = $numdepa = $password = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; 

    
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

    
    $query = "UPDATE subscriptores SET 
                nombre = ?, 
                apellidos = ?, 
                usuario = ?, 
                telefono = ?, 
                correo = ?, 
                genero = ?, 
                fecha = ?, 
                direccion = ?, 
                numdepa = ?, 
                password = ? 
              WHERE id = ?";

    
    $stmt = $conexion->prepare($query);

    if ($stmt) {
        
        $stmt->bind_param(
            "ssssssssssi",
            $nombre,
            $apellidos,
            $usuario,
            $telefono,
            $correo,
            $genero,
            $fecha,
            $direccion,
            $numdepa,
            $password,
            $id
        );

        
        if ($stmt->execute()) {
            
            Header("Location: subscriptores.php");
        } else {
            
            echo "Error al actualizar el registro: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
}
?>
