<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opiniones y Valoraciones - Estética</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Estilos/colores.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Opiniones y Valoraciones.</h2>
        <form action="opiniones.php" method="POST">
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="nombre_empleado" class="form-label">Nombre del Empleado que lo atendio</label>
                <input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" required>
            </div>
            <div class="mb-3">
                <label for="calificacion" class="form-label">Calificación</label>
                <select class="form-control" id="calificacion" name="calificacion" required>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Opinión</button>
        </form>

        <!-- Botón para regresar a la página del cliente -->
        <div class="text-center my-4">
            <button onclick="window.location.href='cliente.php'" class="btn btn-secondary">Regresar</button>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include '../configuracion/test.php';

            $comentario = $conn->real_escape_string($_POST['comentario']);
            $nombre_empleado = $conn->real_escape_string($_POST['nombre_empleado']);
            $calificacion = $conn->real_escape_string($_POST['calificacion']);
            $fecha_coment = date('Y-m-d');

            $sql = "INSERT INTO comentarios (Comentario, Nombre_Empleado, Calificación, Fecha_Coment) VALUES ('$comentario', '$nombre_empleado', '$calificacion', '$fecha_coment')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success my-4" role="alert">¡Opinión enviada con éxito! Redirigiendo a la página de cliente...</div>';
                // Redirigir a cliente.php después de 3 segundos
                header("Refresh: 3; url=cliente.php");
                exit();
            } else {
                echo '<div class="alert alert-danger my-4" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            }

            $conn->close();
        }
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
