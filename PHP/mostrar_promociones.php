<?php
include 'config.php';

$sql = "SELECT Nombre_Promocion, Descripcion, Imagen FROM promociones";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="carousel-item">';
        echo '<div class="card">';
        echo '<img src="/ruta_de_tu_imagen/'.$row["Imagen"].'" class="card-img-top" alt="'.$row["Nombre_Promocion"].'">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$row["Nombre_Promocion"].'</h5>';
        echo '<p class="card-text">'.$row["Descripcion"].'</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No hay promociones disponibles.";
}

$conn->close();
?>
