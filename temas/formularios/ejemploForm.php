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
        <form action="ejemploRecibeForm.php" method="POST">
            Nombre: <input type="text" name="nombre"> <br>
            Apellidos: <input type="text" name="apellidos"> <br>
            Curso:<br>
            <input type="checkbox" name="curso[]" value="DAM">DAM <br>
            <input type="checkbox" name="curso[]" value="DAW">DAW <br>
            <input type="checkbox" name="curso[]" value="ASIR">ASIR <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>
