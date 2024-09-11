<?php
include('calculo.php');
$calculo = new calculo();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cuadritos">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Sumar:</strong></td>
                    <td colspan="3"><?php echo $calculo->sumar(); ?></td>
                </tr>
                <tr>
                    <td><strong>Mayor:</strong></td>
                    <td colspan="3"><?php echo $calculo->mayor(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
