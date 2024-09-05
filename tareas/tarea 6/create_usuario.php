<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $contraseña = $_POST['password'];
    $sql = "INSERT INTO usuarios (id, email, password, nivel) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiii", $id, $email, $contraseña, $nivel);
    
    if ($stmt->execute()) {
        echo "Usuario creado con éxito";
    } else {
        echo "Error al crear: " . $conn->error;
    }
}

$conn->close();
?>