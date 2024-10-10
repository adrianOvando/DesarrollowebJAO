<?php 
$con= new mysqli("localhost","root","","bd_banco", 3307);
if($con->connect_error)
{
    die("Error: " . $con->connect_error);
}
?>