<?php
include 'conexion_biblio.php';

$sql = "SELECT imagen FROM libros";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
    <?php
    $cont=0;
     while($fila=$resultado->fetch_assoc()) { ?>
    <tr>
        
        <td><button><img src="images/<?php echo $fila['imagen'];   ?>" width="50px" height="75px">  </button></td>

    </tr>
    <?php } ?>
    </table>
</body>
</html>

