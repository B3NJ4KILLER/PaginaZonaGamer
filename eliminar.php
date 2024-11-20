<?php
include('conexion.php');

$id = $_GET['id'];

$query = "DELETE FROM subscriptores WHERE id='$id'";
if ($conexion->query($query)) {
    header("Location: subscriptores.php"); 
} else {
    echo "Error: " . $conexion->error;
}
?>
