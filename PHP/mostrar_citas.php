<?php
include 'config.php';

$sql = "SELECT * FROM citas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><tr><th>ID</th><th>ID Cliente</th><th>ID Empleado</th><th>ID Servicio</th><th>Fecha de la Cita</th><th>Estado</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_Cita"]."</td><td>".$row["id_Cliente"]."</td><td>".$row["id_Empleado"]."</td><td>".$row["id_Servicio"]."</td><td>".$row["Fecha_Cita"]."</td><td>".$row["Estado"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay citas disponibles.";
}

$conn->close();
?>
