<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $def = $_POST['def'];
    $drop_rate = $_POST['drop_rate'];

    $sql = "INSERT INTO armaduras (name, def, drop_rate) VALUES ('$name', '$def', '$drop_rate')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva armadura creada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Crear Nueva Armadura</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="name" required><br>
        Defensa: <input type="number" name="def" required><br>
        Tasa de caída: <input type="text" name="drop_rate" required><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
