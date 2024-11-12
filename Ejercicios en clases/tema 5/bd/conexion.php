<?php
$con = $mysqli("localhost:3307","root", "", "bd_eleciones(1)");
    if($con->connect_error){
        die("conexion fallida".$con->connect_error);
    }
?>