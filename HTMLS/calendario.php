<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Santiago Cardenas">
    <title>Calendario de Reservas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/colores.css">
    <link rel="stylesheet" href="../Estilos/calendario.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 id="selectedDate">Fecha seleccionada:</h3>

                <div class="calendar">
                    <div class="calendar-header">
                        <button id="prevBtn" class="calendar-btn"><i class="fas fa-angle-left"></i></button>
                        <h2 id="currentMonth"></h2>
                        <button id="nextBtn" class="calendar-btn"><i class="fas fa-angle-right"></i></button>
                    </div>
                    <div id="calendarBody" class="calendar-body"></div>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Reservar Cita</h2>
                <form id="reservationForm" action="calendario.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nombre del Cliente</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Selecciona los Servicios</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="Corte de Cabello" id="service1">
                            <label class="form-check-label" for="service1">
                                Corte de Cabello
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="Manicura y Pedicura" id="service2">
                            <label class="form-check-label" for="service2">
                                Manicura y Pedicura
                            </label>
                        </div>
                        <!-- Añadir más checkboxes para otros servicios -->
                    </div>
                    <div class="form-group">
                        <label for="time">Horario Preferido</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <input type="hidden" id="selectedDateInput" name="selectedDate">
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
                <!-- Botón para regresar al dashboard de cliente -->
                <div class="text-center my-4">
                    <button onclick="window.location.href='cliente.php'" class="btn btn-secondary">Regresar al Inicio</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../configuracion/test.php';

        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $services = isset($_POST['service']) ? implode(", ", $_POST['service']) : '';
        $time = $conn->real_escape_string($_POST['time']);
        $selectedDate = $conn->real_escape_string($_POST['selectedDate']); // Asegúrate de capturar esta fecha correctamente

        // Asumiendo que id_Empleado e id_Servicio son determinados de alguna manera
        $id_empleado = 1; // Este es un ejemplo, asegúrate de obtener el ID correcto
        $id_servicio = 1; // Este es un ejemplo, asegúrate de obtener el ID correcto

        $sql = "INSERT INTO citas (id_Cliente, id_Empleado, id_Servicio, Fecha_Cita, Estado) VALUES ((SELECT id_Cliente FROM clientes WHERE Email = '$email'), $id_empleado, $id_servicio, '$selectedDate $time', 'Programada')";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Cita reservada con éxito! Redirigiendo al dashboard...</div>';
            // Redirigir al dashboard después de 3 segundos
            header("Refresh: 3; url=cliente.php");
            exit();
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
        }

        $conn->close();
    }
    ?>

    <script src="../Scripts/calendario.js"></script>
    <script>
        // Código JavaScript para capturar la fecha seleccionada
        document.getElementById('reservationForm').addEventListener('submit', function(event) {
            const selectedDate = document.getElementById('selectedDate').textContent;
            document.getElementById('selectedDateInput').value = selectedDate;
        });
    </script>
</body>
</html>
