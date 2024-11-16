<?php
include 'conexion_biblio.php';
     $id=$_POST['id'];
     $imagen=$_FILES['imagen']['name'];
     $titulo=$_POST['titulo'];
     $autor=$_POST['autor'];
     $ideditorial=$_POST['ideditorial'];
     $anio=$_POST['anio'];
     $idusuario=$_POST['idusuario'];
     $idcarrera=$_POST['idcarrera'];

$sql = "INSERT INTO libros (id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera) VALUES ('$id', '$imagen', '$titulo', '$autor', '$ideditorial', '$anio', '$idusuario', '$idcarrera')";
$con->query($sql);
$sql = "UPDATE libros SET imagen=$imagen";


