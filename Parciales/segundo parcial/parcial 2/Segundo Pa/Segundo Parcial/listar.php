<?php
include("conexion.php");

$sql = "SELECT id, titulo, autor, imagen FROM libros";
$resultado = $con->query($sql);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Imagen</th></tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['titulo'] . "</td>";
    echo "<td>" . $fila['autor'] . "</td>";
    echo "<td><img src='images/" . $fila['imagen'] . "' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>
