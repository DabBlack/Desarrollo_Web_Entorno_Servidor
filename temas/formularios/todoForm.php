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
        <form action="todoForm.php" method="POST">
            Nombre: <input type="text" name="nombre"> <br>
            Apellidos: <input type="text" name="apellidos"> <br>
            Sexo:<br>
            <input type="checkbox" name="curso[]" value="DAM">DAM <br>
            <input type="checkbox" name="curso[]" value="DAW">DAW <br>
            <input type="checkbox" name="curso[]" value="ASIR">ASIR <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php
            if (isset($_POST['enviar'])) {
                if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['curso[]'])) {
                    echo "Nombre: " . $_POST['nombre'] . "<br>";
                    echo "Apellidos: " . $_POST['apellidos'] . "<br>";
                    echo "Curso: <br>";
                    foreach ($_POST['curso'] as $c) {
                        echo $c . "<br>";
                    }
                    echo "<a href=".$_POST['PHP_SELF'].">Volver</a>";
                }
                else{
                    echo "error";
                }
            }
        ?>
    </body>
</html>
