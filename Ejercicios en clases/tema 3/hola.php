<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .holo{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Primer ejercicio</h1>
    <p class="holo">
    <?php
        echo "Hola mundo"
    ?>
    </p>
    <h2> Imprimir numeros del 1 al 10</h2>
    <ul>
        <?php  
            for ($i=0;$i<10;$i++){
                echo '<li>"'.$i.'"</li>'
            }
        ?>
    </ul>
</body>
</html>