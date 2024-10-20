<?php

include "connect.php";

$sql = "SELECT a.fotografia, a.nombres, a.apellidos, a.cu, a.sexo, c.carrera FROM Alumnos a INNER JOIN carreras c ON a.codigocarrera = c.codigo";
if (isset($_GET["ordenar"])) {
    $sql .= " ORDER BY " . $_GET["ordenar"];
}
$result = $con->query($sql);

$alumnos = [];
while ($row = $result->fetch_assoc()) {
    $alumnos[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            background-color: lightskyblue;
            color: white;
        }

        td,
        tr,
        th {
            border: 1px solid black;
            width: 150px;
            height: 50px;
        }

        .par {
            background-color: white;
        }

        .impar {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <table style="border: 1px solid black; border-collapse:collapse;">
        <tr>
            <th>Nro</th>
            <th><a href="read.php?ordenar=fotografia">Fotografia</a></th>
            <th><a href="read.php?ordenar=nombres">Nombres</a></th>
            <th><a href="read.php?ordenar=apellidos">Apellidos</a></th>
            <th><a href="read.php?ordenar=cu">CU</a></th>
            <th><a href="read.php?ordenar=sexo">Sexo</a></th>
            <th><a href="read.php?ordenar=carrera">Carrera</a></th>
        </tr>
        <?php
        foreach ($alumnos as $i => $alumno) {
            $clase = ($i % 2 == 0) ? 'par' : 'impar';
        ?>
            <tr class="<?php echo $clase; ?>">
                <td><?php echo $i + 1; ?></td>
                <td><img src="../images/<?php echo $alumno["fotografia"]; ?>" alt="Fotografia" width="100"></td>
                <td><?php echo $alumno["nombres"]; ?></td>
                <td><?php echo $alumno["apellidos"]; ?></td>
                <td><?php echo $alumno["cu"]; ?></td>
                <td><?php echo ($alumno["sexo"]=='M') ? 'Masculino' : 'Femenino'; ?></td>
                <td><?php echo $alumno["carrera"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>