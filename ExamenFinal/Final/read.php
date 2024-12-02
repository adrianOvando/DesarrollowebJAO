<?php

include 'conexion.php';
$email = $_POST['email'];
$pass = $_POST['contraseña'];
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$pass'";

?>
