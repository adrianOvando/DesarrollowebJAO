<?php
include("conexion.php");

for($i = 1; $i <= 3; $i++){
    $titulo = $_POST["titulo$i"];
    $autor = $_POST["autor$i"];
    $archivo_original=$_FILES['imagen'.$i]['name'];
    $arreglo=explode(".",$archivo_original);
    $extension = $arreglo[1];
    $imagen=uniqid().'.'.$extension;
    copy($_FILES["imagen$i"]['tmp_name'],'images/'.$imagen);
    $sql = "INSERT INTO libros (titulo, autor, imagen) VALUES ('$titulo', '$autor', '$imagen')";
    $con->query($sql);
    if ($con->query($sql)) {
        echo "Libro $i registrado correctamente<br>";
    } else {
        echo "Error al registrar el libro $i: " . $con->error . "<br>";
    }
}
?>


