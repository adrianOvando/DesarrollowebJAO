<?php session_start();
include 'conexion.php';
if (!isset($_SESSION['email'])) {
    echo "Usted no está autorizado a ver esta página";
    echo '<meta http-equiv="refresh" content="3; url=login.html">';
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <p>Has iniciado sesión como: <?php echo $_SESSION['email']; ?></p>
    <a href="login.html">Cerrar Sesión</a>
</body>
</html>
