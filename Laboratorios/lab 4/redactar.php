<?php
include 'conexion.php';


$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$bandeja = 'Salida';
$estado = 'E';


$sql = "INSERT INTO correos (bandeja,correo,asunto,mensaje,estado) VALUES ('$bandeja','$correo','$asunto','$mensaje','$estado')";
$query = mysqli_query($con,$sql);
?>