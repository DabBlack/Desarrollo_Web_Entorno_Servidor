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
        $peliculas = array("Enero"=>9 ,"Febrero"=>12, "Marzo"=>0, "Abril"=>17);
        
        foreach ($peliculas as $mes => $numPelisVistas) {
            if ($numPelisVistas > 0) {
                echo "$mes: $numPelisVistas <br>";
            }
        }
        ?>
    </body>
</html>
