<?php
session_start();
include 'conexion.php';

$email = $_POST['email'];
$pass = $_POST['contraseña'];

$sql = "SELECT * FROM docentes WHERE email = '$email' AND contraseña = '$pass'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    echo "Inicio de sesión exitoso<br>";

    $sql_all_users = "SELECT * FROM docentes";
    $result_all_users = $con->query($sql_all_users);

    if ($result_all_users->num_rows > 0) {
        echo "<h2>Lista de Usuarios:</h2><ul>";
        while($row = $result_all_users->fetch_assoc()) {
            echo "<li>ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Email: " . $row["email"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No hay usuarios.";
    }
    echo '<a href="login.html">Cerrar Sesión</a>';
} else {
    echo "Email o contraseña incorrectos";
    echo '<meta http-equiv="refresh" content="2; url=login.html">';
}

$con->close();
?>
