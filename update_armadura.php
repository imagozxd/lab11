<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $def = $_POST['def'];
    $drop_rate = $_POST['drop_rate'];

    $sql = "UPDATE armaduras SET name='$name', def='$def', drop_rate='$drop_rate' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Armadura actualizada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Actualizar Armadura</h2>
    <form method="post" action="">
        ID: <input type="number" name="id" required><br>
        Nombre: <input type="text" name="name" required><br>
        Defensa: <input type="number" name="def" required><br>
        Tasa de caída: <input type="text" name="drop_rate" required><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
