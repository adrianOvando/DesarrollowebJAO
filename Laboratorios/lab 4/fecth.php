<?php
include('connection.php');
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$tipo = $_GET['tipo'];

$sql = "SELECT correo, asunto, estado FROM correos WHERE tipo = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $tipo);
$stmt->execute();
$result = $stmt->get_result();

$emails = [];
while ($row = $result->fetch_assoc()) {
    $emails[] = $row;
}

echo json_encode($emails);

?>