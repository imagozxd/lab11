<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM armaduras WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Armadura eliminada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Eliminar Armadura</h2>
    <form method="post" action="">
        ID: <input type="number" name="id" required><br>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
