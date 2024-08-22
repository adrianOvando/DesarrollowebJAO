<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tabla de Ajedrez</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .negro {
            background-color: black;
        }
        .blanco {
            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($fila = 0; $fila < 8; $fila++) {
            echo "<tr>";
            for ($columna = 0; $columna < 8; $columna++) {
                $color = ($fila + $columna) % 2 == 0 ? 'blanco' : 'negro';
                echo "<td class=\"$color\"></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
