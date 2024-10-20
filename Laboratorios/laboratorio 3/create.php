<?php
include("connect.php");
for ($i = 0; $i < 4; $i++) {
    $archivo_original = $_FILES["fotografia$i"]["name"];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . "." . $extension;
    copy($_FILES["fotografia$i"]["tmp_name"], "imagenes/$fotografia");

    $nombres = $_POST["nombres$i"];
    $apellidos = $_POST["apellidos$i"];
    $cu = $_POST["cu$i"];
    $sexo = $_POST["sexo$i"];
    $codigocarrera = $_POST["carrera$i"];
    $sql = "INSERT INTO alumnos(fotografia, nombres, apellidos, cu, sexo, codigocarrera) VALUES('$fotografia', '$nombres', '$apellidos', '$cu', '$sexo', '$codigocarrera')";
    $resultado = $con->query($sql);
}
if ($resultado) { ?>
    <h1>Datos insertados correctamente</h1>
<?php
} else {
    echo "Error al insertar los datos";
}

?>