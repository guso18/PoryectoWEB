<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../configuracion/test.php';

    $email = $conn->real_escape_string($_POST['email']);

    $sql = "SELECT * FROM empleados WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El correo electrónico está registrado
        session_start();
        $_SESSION['email'] = $email;
        echo '<div class="alert alert-success my-4" role="alert">Inicio de sesión exitoso! Redirigiendo al dashboard de empleados...</div>';
        // Redirigir al dashboard de empleados después de 3 segundos
        header("Refresh: 3; url=dashboard_empleado.php");
        exit();
    } else {
        // El correo electrónico no está registrado
        echo '<div class="alert alert-danger my-4" role="alert">El correo electrónico no está registrado.</div>';
    }

    $conn->close();
}
?>
