<?php
include 'config.php';

$sql = "SELECT Nombre_Servicio, Descripcion, Imagen FROM servicios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="carousel-item">';
        echo '<div class="card">';
        // Ajustamos la ruta para que apunte a la carpeta correcta
        echo '<img src="imagenes/'.$row["Imagen"].'" class="card-img-top" alt="'.$row["Nombre_Servicio"].'">';
        echo '<div class="carousel-caption d-none d-md-block">';
        echo '<h5>'.$row["Nombre_Servicio"].'</h5>';
        echo '<p>'.$row["Descripcion"].'</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No hay servicios disponibles.";
}

$conn->close();
?>
