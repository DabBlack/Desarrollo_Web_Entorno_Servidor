<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="divPrincipal">
            <?php
            include './funciones.php';
                $con=conexion();
                
                $r1=$con->query("SELECT * FROM jugador");
                recorrerResultado($r1);
                $con->close();
            ?>
            <br><a href="index.php"><input type="button" name="indice" value="Volver"></a></td
        </div>
    </body>
</html>
