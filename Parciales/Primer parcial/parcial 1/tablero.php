<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $d=$_POST['color'];
    ?>
    <style>
        .par{
            border:1px solid black;
            width:45px;
            height:45px;
            background-color:<?php echo $d?>  
        }
        .impar{
            border:1px solid black;
            width:45px;
            height:45px;
            background-color: white;
        }
        table{
            border-collapse: collapse;
        }
        tr, td{
            border: 2px solid black;
            padding: 50px;
        }
        .rojo{
            background-color: red;
        }
        .amarrillo{
            background-color: yellow;
        }
        .imag{
            width: 40px;
            height: 40px;
        }
        .blanco{
            background-color: white;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    $nf=$_POST['numerofilas'];
    $nc=$_POST['numeroColumnas'];
    $f=$_POST['fila'];
    $c=$_POST['columna'];


    echo "<table>";
        for($i=1; $i<=$nf; $i++){
            $aux=$i;
                echo "<tr>";
            for($j=1;$j<=$nc;$j++){

                if (($j+$i)%2==0)
                {
                    echo '<td class="par">&nbsp</td>';
                }else
                {
                    echo '<td class="impar">&nbsp</td>';
                }
                if($f==$i and $c==$j+1){
                    $j=$j+1;
                    echo '<td  class="amarrillo"><img class="imag" src="imagenes/Bowser.png" alt=""></td>';
                }
            
            }
            echo "</tr>";
        }
    echo "</table>";
?>