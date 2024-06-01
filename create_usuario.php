<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $character = $_POST['characters'];

    // Escapar los nombres de las columnas con comillas invertidas
    $sql = "INSERT INTO usuarios (user, pass, `characters`) VALUES ('$user', '$pass', '$character')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo usuario creado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Crear Nuevo Usuario</h2>
    <form method="post" action="">
        Usuario: <input type="text" name="user" required><br>
        Contraseña: <input type="password" name="pass" required><br>
        Personaje: <input type="text" name="characters"><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
