<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $damage = $_POST['damage'];
    $drop_rate = $_POST['drop_rate'];
    $critical = $_POST['critical'];

    $sql = "INSERT INTO armas (name, damage, drop_rate, critical) VALUES ('$name', '$damage', '$drop_rate', '$critical')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva arma creada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Crear Nueva Arma</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="name" required><br>
        Daño: <input type="number" name="damage" required><br>
        Tasa de caída: <input type="text" name="drop_rate" required><br>
        Crítico: <input type="text" name="critical" required><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
