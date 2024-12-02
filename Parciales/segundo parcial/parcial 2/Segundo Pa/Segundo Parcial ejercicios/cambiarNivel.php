<?php

include("conexion.php");
session_start();

$id = intval($_GET['id']);
$nuevoNivel = intval($_GET['nivel']);

$sql = "UPDATE usuarios SET nivel = $nuevoNivel WHERE id = $id";
$con->query($sql);

?>