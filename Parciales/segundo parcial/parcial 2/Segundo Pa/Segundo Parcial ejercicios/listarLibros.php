<?php include 'conexion.php';

$sql="SELECT titulo, imagen FROM libros";

if(isset ($_GET['ordenar'])){
    $sql.=" order by ".$_GET['ordenar'];
}

$resultado=$con->query($sql);

?>

<table>
    <tr>
        <th><a href="javascript:ordenar('titulo')<?php echo $buscar?>">Titulo</a></th>
        <th>Imagen</th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td><?php echo $fila['titulo'];?></td>
        <td> <img src="images/<?php echo $fila['imagen']; ?>" style="width: 100px; height: auto;"></td>
    </tr>

    <?php }?>
   

</table>
