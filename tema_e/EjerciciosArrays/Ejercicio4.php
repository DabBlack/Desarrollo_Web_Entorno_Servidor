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
        $datos = array("Nombre" => "Pedro Torres", "Dirección" => "C/Mayor, 37", "Teléfono" => 123456789);
        foreach ($datos as $i => $valor) {
            echo $i.": ".$valor."<br>";
        }
        ?>
    </body>
</html>
