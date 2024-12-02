<?php
$con = new mysqli("localhost:3307", "root", "", "bd_biblioteca_central");
if($con->connect_error)
{
    die("Error: " . $con->connect_error);
}
?>