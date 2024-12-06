<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login_empleado.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Servicios - Estética</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Gestión de Servicios</h2>
        <!-- Aquí puedes añadir el contenido para gestionar los servicios -->
        <div class="text-center my-4">
            <button onclick="window.location.href='dashboard_empleado.php'" class="btn btn-secondary">Regresar al Dashboard</button>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
