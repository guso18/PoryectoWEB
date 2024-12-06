<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Estilos/colores.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Agendar una nueva cita</h2>

        <!-- Formulario para agendar citas -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="cliente">Cliente:</label>
                <select class="form-control" id="cliente" name="cliente" required>
                    <?php
                    // Consulta para obtener todos los clientes
                    include '../configuracion/test.php';
                    $result = $conn->query("SELECT id_Cliente, nombre FROM clientes");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_Cliente'] . "'>" . $row['nombre'] . " (" . $row['id_Cliente'] . ")</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="empleado">Empleado:</label>
                <select class="form-control" id="empleado" name="empleado" required>
                    <?php
                    // Consulta para obtener todos los empleados
                    $result = $conn->query("SELECT id_Empleado, nombre FROM empleados");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_Empleado'] . "'>" . $row['nombre'] . " (" . $row['id_Empleado'] . ")</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="servicio">Servicio:</label>
                <select class="form-control" id="servicio" name="servicio" required>
                    <?php
                    // Consulta para obtener todos los servicios
                    $result = $conn->query("SELECT id_Servicio, descripcion FROM servicios");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_Servicio'] . "'>" . $row['descripcion'] . " (" . $row['id_Servicio'] . ")</option>";
                    }
                    $conn->close();
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>
            <button type="submit" class="btn btn-primary">Agendar Cita</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include '../configuracion/test.php';

            $cliente = $conn->real_escape_string($_POST['cliente']);
            $empleado = $conn->real_escape_string($_POST['empleado']);
            $servicio = $conn->real_escape_string($_POST['servicio']);
            $fecha = $conn->real_escape_string($_POST['fecha']);
            $hora = $conn->real_escape_string($_POST['hora']);

            $sql = "INSERT INTO citas (id_Cliente, id_Empleado, id_Servicio, Fecha_Cita, Horario, Estado)
                    VALUES ('$cliente', '$empleado', '$servicio', '$fecha', '$hora', 'pendiente')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success my-4" role="alert">¡Cita agendada con éxito! Redirigiendo a la página del cliente...</div>';
                header("Refresh: 3; url=cliente.php");
                exit();
            } else {
                echo '<div class="alert alert-danger my-4" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            }

            $conn->close();
        }
        ?>

        <!-- Botón para regresar a la página del cliente -->
        <div class="text-center my-4">
            <button onclick="window.location.href='cliente.php'" class="btn btn-secondary">Regresar</button>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
