<?php
include 'db_connection.php';

$sql = "SELECT id, user, characters FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Usuario</th><th>Personaje</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["user"]. "</td><td>" . $row["characters"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
