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
        $peliculas = array("Enero" => 9, "Febrero" => 12, "Marzo" => 0, "Abril" => 17);
        foreach ($peliculas as $i => $valor) {
            if($valor !=0) {
            echo "El mes de ".$i." se vieron ".$valor." peliculas.<br>";
            }
        }
        ?>
    </body>
</html>
