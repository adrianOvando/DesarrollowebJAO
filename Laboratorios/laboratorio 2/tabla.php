<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Generada</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
        }
        .numeracion {
            color: white;
            background-color: red;
        }
    </style>
</head>
<body>

<?php

    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];

    echo "<table>";
    
    for ($i = 1; $i <= $filas + 1; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= $columnas + 1; $j++) {


            if ($j == $columnas + 1 && $i <= $filas) {
                $numFila = $filas - $i + 1;
                echo "<td class='numeracion'>$numFila</td>";
            }
            else{
                if ($i == $filas + 1 && $j <= $columnas){
                $numColumna = $columnas - $j + 1;
                echo "<td class='numeracion'>$numColumna</td>";
                }
                else{
                    if ($i == $filas + 1 && $j == $columnas + 1) {
                        echo "<td class='numeracion'></td>";
                    }
                    else{
                        if ($i <= $filas && $j <= $columnas) {
                            $numFila = $filas - $i + 1;      
                            $numColumna = $columnas - $j + 1; 
                            $resultado = $numFila * $numColumna;
                            echo "<td>$resultado</td>";
                    }
                    }
                }
            }
        }

        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>
