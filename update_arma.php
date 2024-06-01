<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $damage = $_POST['damage'];
    $drop_rate = $_POST['drop_rate'];
    $critical = $_POST['critical'];

    $sql = "UPDATE armas SET name='$name', damage='$damage', drop_rate='$drop_rate', critical='$critical' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Arma actualizada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Actualizar Arma</h2>
    <form method="post" action="">
        ID: <input type="number" name="id" required><br>
        Nombre: <input type="text" name="name" required><br>
        Daño: <input type="number" name="damage" required><br>
        Tasa de caída: <input type="text" name="drop_rate" required><br>
        Crítico: <input type="text" name="critical" required><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
