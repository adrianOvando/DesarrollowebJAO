<?php
include 'conexion.php';
session_start();

if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];
    $role = $_SESSION['nivel'];
    
    if (isset($_GET['idcarrera']) && $_GET['idcarrera'] > 0) {
        $careerId = $_GET['idcarrera'];
        $query = "SELECT l.id, l.imagen, l.titulo, l.autor, e.editorial, l.anio, u.usuario, c.carrera
                  FROM libros AS l 
                  INNER JOIN editoriales AS e ON l.ideditorial = e.id 
                  INNER JOIN usuarios AS u ON l.idusuario = u.id 
                  INNER JOIN carreras AS c ON l.idcarrera = c.id 
                  WHERE l.idcarrera = '$careerId'";
    } else {
        $query = "SELECT l.id, l.imagen, l.titulo, l.autor, e.editorial, l.anio, u.usuario, c.carrera
                  FROM libros AS l
                  INNER JOIN editoriales AS e ON l.ideditorial = e.id
                  INNER JOIN usuarios AS u ON l.idusuario = u.id
                  INNER JOIN carreras AS c ON l.idcarrera = c.id";
    }

    $result = $con->query($query);
?>
    <table class="table">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Año</th>
                <th>Carrera</th>
                <?php
                if ($role == 1) {
                    echo '<th>Acciones</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><img src="images/<?php echo $row['imagen']; ?>" style="width: 50px; height: 75px;"></td>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><?php echo $row['autor']; ?></td>
                    <td><?php echo $row['editorial']; ?></td>
                    <td><?php echo $row['anio']; ?></td>
                    <td><?php echo $row['carrera']; ?></td>
                    <?php
                    if ($role == 1) { ?>
                        <td>
                            <button class="btn bg-warning">Editar</button>
                            &nbsp;&nbsp;&nbsp;
                            <button class="btn bg-danger" style="color: white;">Eliminar</button>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php
}
?>
