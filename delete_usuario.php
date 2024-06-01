<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Eliminar Usuario</h2>
    <form method="post" action="">
        ID del Usuario: <input type="text" name="id" required><br>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
