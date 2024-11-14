<?php
$con = new mysqli("localhost:3307", "root", "", "bd_correos");

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}
?>
