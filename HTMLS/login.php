<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Estética</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Estilos/colores.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Iniciar Sesión</h2>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include '../configuracion/test.php';

            $email = $conn->real_escape_string($_POST['email']);

            $sql = "SELECT * FROM clientes WHERE Email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // El correo electrónico está registrado
                session_start();
                $_SESSION['email'] = $email;
                echo '<div class="alert alert-success my-4" role="alert">Inicio de sesión exitoso! Redirigiendo al menú...</div>';
                // Redirigir al dashboard después de 3 segundos
                header("Refresh: 3; url=cliente.php");
                exit();
            } else {
                // El correo electrónico no está registrado
                echo '<div class="alert alert-danger my-4" role="alert">El correo electrónico no está registrado.</div>';
            }

            $conn->close();
        }
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
