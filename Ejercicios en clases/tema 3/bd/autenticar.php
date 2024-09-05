<?php
    include "conexion.php";
    $email=$_POST['email'];
    $password=sha1($_POST['password']);
    $sql="SELECT email, nivel FROM usuario WHERE email= '$email' AND password='$password'";
    $resultado=$con->query($sql);
    if($resultado){
        
    }
?>