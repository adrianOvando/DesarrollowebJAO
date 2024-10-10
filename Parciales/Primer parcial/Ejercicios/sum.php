<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        tr{
            border: 2px solid black;
        }
        td{
            border: 2px solid black;
            background-color: lime;
        }
    </style>
</head>
<body>
    
</body>
</html>


<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$a+$b;
    echo "<table>";
        echo "<tr>";
        echo "<td>$a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>&nbsp;+&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>$b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>&nbsp;=&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>$c&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "</tr>";
    echo "</table>"
?>