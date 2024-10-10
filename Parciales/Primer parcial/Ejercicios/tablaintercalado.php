<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 900px;
        }
        tr, td{
            border: 2px solid black;
            padding: 10px;
        }
        .rojo{
            background-color: red;
        }
        .amarillo{
            background-color: yellow;
        }
        .green{
            background-color: green;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    $fila=$_POST['a'];
    $columna=$_POST['b'];
    echo "<table>";
        for($i=1; $i<=$fila; $i++){
            $aux=$i;
            if($i%3==1){
            echo "<tr class='rojo'>";}
            if($i%3==2){
                echo "<tr class='amarillo'>";} 
            if($i%3==0){
                echo "<tr class='green'>";}
            for($j=1;$j<=$columna;$j++){
                $aux.=+$i;
                echo "<td>";
                    echo "";
                echo "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
?>