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
            <a class="navbar-brand" href="#">Estética unisex LA OVEJA</a>
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
                        <a class="nav-link" href="HTMLS/login.html">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="HTMLS/registro.php">Registrarse</a>
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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
