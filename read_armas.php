<?php
include 'db_connection.php';

$sql = "SELECT * FROM armas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Daño</th><th>Tasa de caída</th><th>Crítico</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["damage"]. "</td><td>" . $row["drop_rate"]. "</td><td>" . $row["critical"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
