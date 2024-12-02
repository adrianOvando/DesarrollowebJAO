<style>
    th, td{
        border: 1px solid black;
    }
</style>
<?php

include("conexion.php");
session_start();
$_SESSION['usuario'] = "admin@biblioteca.usfx.bo";
$_SESSION['nivel'] = 0;
if(!isset($_SESSION["usuario"])){
    echo "Error: Usuario no autenticado";
    exit;
}

$sql = "SELECT id, usuario, nombrecompleto, cu, idcarrera, nivel FROM usuarios";
$resultado = $con->query($sql);

if($resultado->num_rows > 0){
    ?>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <th>Correos</th>
            <th>Nombre Completo</th>
            <th>Nivel</th>
            <?php if($_SESSION['nivel'] == 0){
                ?>
                <th>Operacion</th>
                <?php
            } ?>
        </tr>
        <?php while($fila = $resultado->fetch_assoc()){
            ?>
            <tr>
            <td><?php echo $fila['usuario'] ?></td>
            <td><?php echo $fila['nombrecompleto'] ?></td>
            <td><?php echo $fila['nivel'] == 1 ? "Administrador" : "Usuario"; ?></td>
            <?php if($_SESSION['nivel'] == 1){
                    echo "<td><button onclick=\"cambiarNivel(" . $fila['id'] . ", 0)\">Cambiar a Administrador</button></td>";
                }else{
                    echo "<td><button onclick=\"cambiarNivel(" . $fila['id'] . ", 1)\">Cambiar a Usuario</button></td>";
                }
            ?>    
            </tr>
            <?php
        } ?>
    </table>
    <?php
}



?>