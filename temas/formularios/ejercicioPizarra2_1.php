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
        if (isset($_POST['confirmar'])) {
            echo $_POST['nombre'] . ", su matricula se ha realizado correctamente.<br><br>";
        }
        if (isset($_POST['cancelar'])) {
            echo $_POST['nombre'] . ", su matricula se ha cancelado correctamente.<br><br>";
        }
        ?>
        <form action="ejercicioPizarra2_2.php" method="POST">
            Nombre: <input type="text" name="nombre" value="<?php if(isset($_POST['cancelar'])){
                echo $_POST['nombre'];}?>"> <br><br>
            Apellidos: <input type="text" name="apellidos" value="<?php if(isset($_POST['cancelar'])){
                echo $_POST['apellidos'];}?>"> <br><br>
            <input type="submit" name="siguiente" value="Siguiente">
        </form>
    </body>
</html>
