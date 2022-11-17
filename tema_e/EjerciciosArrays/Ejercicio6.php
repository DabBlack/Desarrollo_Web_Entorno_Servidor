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
        $ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");
        foreach ($ciudades as $i => $value) {
            echo "<br>La ciudad con el índice ".$i." tiene el nombre de ".$value;
        }
        ?>
    </body>
</html>
