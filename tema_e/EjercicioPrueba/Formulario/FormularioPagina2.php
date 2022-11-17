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
        // put your code here
        ?>
        <form action="FormularioPagina3.php" method="POST" >
            Nº Matricula: <input type="text" name="matricula"> <br> <br>
            Curso: <input type="text" name="curso"> <br> <br>
            Precio: <input type="text" name="precio"> <br> <br>
            <input type="hidden" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
            <input type="hidden" name="apellidos" value="<?php echo $_POST["apellidos"]; ?>">
            <input type="hidden" name="idiomas" value="<?php echo implode(", ",$_POST["idiomas"])?>">
            <input type="submit" name="enviar" value="Siguiente">
        </form>
    </body>
</html>
