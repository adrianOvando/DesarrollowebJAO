<?php

include("connect.php");

$sqlCheck = "SELECT COUNT(*) AS count FROM carreras";
$resultCheck = $con->query($sqlCheck);
$rowCheck = $resultCheck->fetch_assoc();

if ($rowCheck['count'] == 0) {
    $sqlInsert = "INSERT INTO carreras (carrera) VALUES ('Ingeniería de Sistemas'), ('Ingeniería Industrial'), ('Arquitectura'), ('Derecho')";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <form action="create.php" method="post" enctype="multipart/form-data">
            <tr>
                <th>&nbsp;</th>
                <th>Fotografia</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </tr>
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><input type="file" name="fotografia<?php echo $i; ?>"></td>
                    <td><input type="text" name="nombres<?php echo $i; ?>"></td>
                    <td><input type="text" name="apellidos<?php echo $i; ?>"></td>
                    <td><input type="text" name="cu<?php echo $i; ?>"></td>
                    <td>
                        <label for="sexo">Masculino</label>
                        <input type="radio" name="sexo<?php echo $i; ?>" value="M">
                        <label for="sexo">Femenino</label>
                        <input type="radio" name="sexo<?php echo $i; ?>" value="F">
                    </td>
                    <td>
                        <select name="carrera<?php echo $i; ?>">
                            <?php
                            foreach ($carreras as $carrera) {
                            ?>
                                <option value="<?php echo $carrera["codigo"]; ?>"><?php echo $carrera["carrera"]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="7"><input type="submit" value="Insertar"></td>
            </tr>
        </form>
    </table>
</body>

</html>
