<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Cliente - Estética</title>
    <link href="Estilos/colores.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="container">
        <h1 class="text-center my-4">Registro Cliente</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include '../configuracion/test.php';

            // Recoger y limpiar los datos del formulario
            $nombre = $conn->real_escape_string($_POST['nombre']);
            $apellido = $conn->real_escape_string($_POST['apellido']);
            $telefono = $conn->real_escape_string($_POST['telefono']);
            $email = $conn->real_escape_string($_POST['email']);
            $direccion = $conn->real_escape_string($_POST['direccion']);
            $fecha_registro = date('Y-m-d'); // Establece la fecha actual

            // Crear la consulta SQL para insertar los datos
            $sql = "INSERT INTO clientes (Nombre, Apellido, Telefono, Email, Direccion, Fecha_Registro) 
                    VALUES ('$nombre', '$apellido', '$telefono', '$email', '$direccion', '$fecha_registro')";

            // Ejecutar la consulta y comprobar si fue exitosa
            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success" role="alert">Registro exitoso! Redirigiendo a la página principal...</div>';
                // Redirigir al dashboard después de 3 segundos
                header("Refresh: 3; url=cliente.php");
                exit();
            } else {
                echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            }

            // Cerrar la conexión
            $conn->close();
        }
        ?>

        <!-- Formulario de registro de clientes -->
        <form action="registro.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
