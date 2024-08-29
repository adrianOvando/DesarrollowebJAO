<?php
/*3.-  Encontrar el mayor y el menor de
 5 números, imprimir los resultados en
  dos cuadros con bordes de color rojo*/

$numeros = [12, 7, 9, 21, 15];
$mayor = $numeros[0];
$menor = $numeros[0];
foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cuadrito Rojo</title>
    <style>
        .cuadro {
            border: 2px solid red;
            padding: 10px;
            margin: 10px;
            width: 150px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="cuadro">
        <h2>Mayor</h2>
        <?php echo $mayor; ?>
    </div>
    
    <div class="cuadro">
        <h2>Menor</h2>
        <?php echo $menor; ?>
    </div>
</body>
</html>
