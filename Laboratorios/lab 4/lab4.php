<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente de Correo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="sidebar">
        <button class="tab active" onclick="showTab('inbox')">Bandeja de Entrada</button>
        <button class="tab" onclick="showTab('sent')">Bandeja de Salida</button>
    </div>

    <div class="main-content">
        <button class="compose-button" onclick="showTab('compose')">Redactar</button>

        <div id="inbox" class="tab-content">
            <h2>Bandeja de Entrada</h2>
            <table class="email-table">
                <thead>
                    <tr>
                        <th>Correo</th>
                        <th>Asunto</th>
                        <th>Estado</th>
                        <th>Operación</th>
                    </tr>
                </thead>
                <tbody id="inboxContent">
                    <?php
                    $sql = "SELECT * FROM correos WHERE bandeja='entrada'";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['correo']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['asunto']) . "</td>";
                            echo "<td>" . ($row['estado'] == 'P' ? 'Pendiente' : 'Enviado') . "</td>";
                            echo "<td><button class='view-button' onclick=\"openModal('" . htmlspecialchars($row['asunto']) . "', '" . addslashes($row['mensaje']) . "')\">Ver</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No hay correos en la bandeja de entrada.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div id="sent" class="tab-content" style="display: none;">
            <h2>Correos Enviados</h2>
            <table class="email-table">
                <thead>
                    <tr>
                        <th>Correo</th>
                        <th>Asunto</th>
                        <th>Estado</th>
                        <th>Operación</th>
                    </tr>
                </thead>
                <tbody id="sentContent">
                    <?php
                    $sql = "SELECT * FROM correos WHERE bandeja='salida'";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['correo']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['asunto']) . "</td>";
                            echo "<td>" . ($row['estado'] == 'P' ? 'Pendiente' : 'Enviado') . "</td>";
                            echo "<td><button class='view-button' onclick=\"openModal('" . htmlspecialchars($row['asunto']) . "', '" . addslashes($row['mensaje']) . "')\">Ver</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No hay correos enviados.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        
        <div id="compose" class="tab-content" style="display: none;">
            <h2>Redactar Mensaje</h2>
            <form action="redactar.php" method="POST">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" required> <br><br><br>
                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" id="asunto" required> <br><br><br>
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" rows="5" required></textarea><br><br>
                <button type="submit" class="send-button">Enviar</button>
            </form>
        </div>

    </div>

    
    <div id="modal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3 id="modalAsunto"></h3>
            <p id="modalMensaje"></p>
        </div>
    </div>

    <script src="ajax.js"></script>
</body>

</html>

<?php
?>