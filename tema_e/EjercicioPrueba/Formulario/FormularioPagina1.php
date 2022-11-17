<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST["confirmar"])) {
            echo "<font color=blue>".$_POST["nombre"]." su petición se ha registrado correctamente </font><br>";
        }
        if(isset($_POST["cancelar"])) {
            echo "<font color=red>Se ha cancelado el proceso de registro.</font>";
        }
        ?>
        <form action="FormularioPagina2.php" method="POST">
            Nombre: <input type="text" name="nombre" <?php if(isset($_POST["cancelar"])) echo "value=".$_POST["nombre"]; ?>> <br><br>
            Apellidos: <input type="text" name="apellidos" <?php if(isset($_POST["cancelar"])) echo "value=".$_POST["apellidos"]; ?>><br><br>
            Idiomas: <br>
            <input type="checkbox" name="idiomas[]" value="Inglés"><label>Inglés</label><br>
            <input type="checkbox" name="idiomas[]" value="Francés"><label>Francés</label><br>
            <input type="checkbox" name="idiomas[]" value="Alemán"><label>Alemán</label><br>
            <input type="checkbox" name="idiomas[]" value="Chino"><label>Chino</label><br>
            <input type="submit" name="enviar" value="Siguiente">
        </form>
    </body>
</html>
