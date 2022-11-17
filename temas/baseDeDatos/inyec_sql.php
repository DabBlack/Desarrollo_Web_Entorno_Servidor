<form action="" method="POST">
    Usuario: <input type="text" name="user"><br>
    Clave: <input type="password" name="pass"><br>
    <input type="submit" name="enviar" value="Consulta SQL">
    <input type="submit" name="enviar2" value="Consulta Preparada">
</form>

<?php
if (isset($_POST["enviar"])) {
    $dwes = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');
    $result = $dwes->query("SELECT * FROM usuarios WHERE user='$_POST[user]' && pass='$_POST[pass]'");
    if ($result->num_rows > 0) {
        echo "<br>HAS ENTADO EN LA APLICACIÓN<br>";
    } else
        echo "<br>DATOS INCORRECTOS<br>";
    $dwes->close();
}

if (isset($_POST["enviar2"])) {
    $dwes = new mysqli("localhost", "dwes", "abc123.", "dwes");
    $stmt = $dwes->stmt_init();
    $stmt->prepare("SELECT * FROM usuarios WHERE user=? && pass=?");
    $stmt->bind_param('ss', $_POST['user'], $_POST['pass']);
    $stmt->execute();
    $result = $stmt->get_result();
    $dwes->close();

    if ($result->num_rows > 0) {
        echo "<br>HAS ENTADO EN LA APLICACIÓN<br>";
    } else
        echo "<br>DATOS INCORRECTOS<br>";

    }
?>


