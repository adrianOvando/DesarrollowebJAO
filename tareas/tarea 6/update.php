<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $contraseña = $_POST['password'];
    $nivel =$_POST['nivel'];
    $sql = "UPDATE usuarios SET id = ?, email = ?, password = ?, nivel = ? 
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiiii", $id, $email, $contraseña, $nivel);
    
    if ($stmt->execute()) {
        echo "usuario actualizada con éxito";
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
}

$conn->close();
?>