<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estética</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Estilos/colores.css">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="imagenes/unisex-salon-logo-LA OVEJA.PNG" alt="Logotipo" style="height: 40px; margin-right: 10px;"> Estética unisex LA OVEJA </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#servicios">Catálogo de Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promociones">Promociones</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="HTMLS/login.php">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="HTMLS/registro.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="HTMLS/login_empleado.php">Empleados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-4">Bienvenidos a Estética</h1>
        <p class="text-center">Tu belleza, nuestra pasión. Conoce nuestros servicios y horarios.</p>
    </div>

    <!-- Catálogo de Servicios -->
    <div id="servicios" class="container">
        <h2 class="my-4">Nuestros Servicios</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/corte.jpg" class="card-img-top" alt="Corte de Cabello">
                    <div class="card-body">
                        <h5 class="card-title">Corte de Cabello</h5>
                        <p class="card-text">Corte de cabello unisex con estilo moderno y personalizado.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/pedicure.jpg" class="card-img-top" alt="Manicura y Pedicura">
                    <div class="card-body">
                        <h5 class="card-title">Manicura y Pedicura</h5>
                        <p class="card-text">Embellecimiento y cuidado de tus uñas con acabados profesionales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/inte.png" class="card-img-top" alt="Tinte de Cabello">
                    <div class="card-body">
                        <h5 class="card-title">Tinte de Cabello</h5>
                        <p class="card-text">Colores vibrantes, cobertura total o reflejos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/eventos.jfif" class="card-img-top" alt="Peinado para Eventos">
                    <div class="card-body">
                        <h5 class="card-title">Peinado para Eventos</h5>
                        <p class="card-text">Peinados elegantes y personalizados para cualquier ocasión.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/depila.jpg" class="card-img-top" alt="Depilación">
                    <div class="card-body">
                        <h5 class="card-title">Depilación</h5>
                        <p class="card-text">Depilación con cera para diferentes áreas del cuerpo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/trata.jpg" class="card-img-top" alt="Tratamientos Capilares">
                    <div class="card-body">
                        <h5 class="card-title">Tratamientos Capilares</h5>
                        <p class="card-text">Hidratación, reparación y fortalecimiento del cabello.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promociones -->
    <div id="promociones" class="container my-4">
        <h2 class="my-4">Promociones</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/promo1.jpg" class="card-img-top" alt="Promoción 1">
                    <div class="card-body">
                        <h5 class="card-title">Promoción 1</h5>
                        <p class="card-text">Aplicación de tinte, corte y tratamiento hidratante por $370.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/promo2.jpeg" class="card-img-top" alt="Promoción 2">
                    <div class="card-body">
                        <h5 class="card-title">Promoción 2</h5>
                        <p class="card-text">Corte de cabello padre e hijo por $150.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/promo3.jpg" class="card-img-top" alt="Promoción 3">
                    <div class="card-body">
                        <h5 class="card-title">Promoción 3</h5>
                        <p class="card-text">Manicura y pedicura con descuento del 20% los lunes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start" style="background-color: var(--azul-oscuro); color: var(--blanco-suave);">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Ubicación</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.0843174673684!2d-98.20499310320632!3d19.00485427657552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf58ad37be01%3A0xbbf554e277df72cb!2s104-B%2C%20Cd%20Universitaria%2C%20Cdad.%20Universitaria%2C%2072592%20Heroica%20Puebla%20de%20Zaragoza%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1733460780586!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0" style="color: black;">
                    <h5 class="text-uppercase">Horarios de Atención</h5>
                    <p>Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                    <p>Sábado: 10:00 AM - 4:00 PM</p>
                    <p>Domingo: Cerrado</p>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            &copy; 2023 Estética unisex LA OVEJA
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
