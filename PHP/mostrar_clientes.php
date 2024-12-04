<?php
include 'config.php';

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th><th>Direccion</th><th>Fecha de Registro</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_Cliente"]."</td><td>".$row["Nombre"]."</td><td>".$row["Apellido"]."</td><td>".$row["Telefono"]."</td><td>".$row["Email"]."</td><td>".$row["Direccion"]."</td><td>".$row["Fecha_Registro"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay clientes disponibles.";
}

$conn->close();
?>
