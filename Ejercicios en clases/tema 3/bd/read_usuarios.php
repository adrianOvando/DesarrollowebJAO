<?php include 'conexion.php';
$sql="SELECT nombres,apellidos,carnet,sexo,fechadenacimiento,operaciones FROM padrom";
$resultado=$con->query($sql);
?>

<table>
    <tr>
        <th>nombres</th>
        <th>apellidos</th>
        <th>carnet</th>
        <th>sexo</th>
        <th>fechadenacimiento</th>
        <th>opereciones</th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc())
    {?>
    <tr>
        <td><?php echo $fila['nombres'];?></td>
        <td><?php echo $fila['apellidos'];?></td>
        <td><?php echo $fila['sexo'];?></td>
        <td><?php echo $fila['fechadenacimiento'];?></td>
        <td><a href="form_update.php?id="></td>
    </tr>
    <?php }?>
</table>
<href></href>