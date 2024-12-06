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
    <title>Dashboard Empleados - Estética</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Dashboard Empleados</h2>
        <div class="list-group">
            <a href="gestion_servicios.php" class="list-group-item list-group-item-action">Gestión de Servicios</a>
            <a href="citas_programadas.php" class="list-group-item list-group-item-action">Citas Programadas</a>
            <a href="gestion_clientes.php" class="list-group-item list-group-item-action">Gestión de Clientes</a>
            <a href="modificacion_cancelacion_citas.php" class="list-group-item list-group-item-action">Modificación y/o Cancelación de Citas</a>
            <a href="reportes_estadisticas.php" class="list-group-item list-group-item-action">Reportes y Estadísticas</a>
        </div>
        <!-- Botón para cerrar sesión -->
        <div class="text-center my-4">
            <button onclick="window.location.href='logout.php'" class="btn btn-secondary">Cerrar Sesión</button>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
