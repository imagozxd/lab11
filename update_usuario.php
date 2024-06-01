<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $user = $_POST['user'];
    $characters = $_POST['characters'];

    // Usa comillas invertidas para escapar el nombre de la columna characters
    $sql = "UPDATE usuarios SET user='$user', `characters`='$characters' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Verifica que $id sea un número
        if (is_numeric($id)) {
            // Usa comillas invertidas para escapar el nombre de la columna characters
            $sql = "SELECT user, `characters` FROM usuarios WHERE id=$id";
            $result = $conn->query($sql);
            
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                echo "No se encontró el usuario.";
                exit();
            }
        } else {
            echo "ID inválido.";
            exit();
        }
    } else {
        echo "No se proporcionó un ID.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Actualizar Usuario</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        Usuario: <input type="text" name="user" value="<?php echo htmlspecialchars($row['user']); ?>" required><br>
        Personaje: <input type="text" name="characters" value="<?php echo htmlspecialchars($row['characters']); ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
