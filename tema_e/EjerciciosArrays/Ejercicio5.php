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
         $datos = array(
             "Persona1" => array("Nombre" => "Pedro Torres", "Dirección" => "C/Mayor, 37", "Teléfono" => 123456789),
             "Persona2" => array("Nombre" => "Agustin Abdalahi", "Dirección" => "C/Estepa, 3", "Teléfono" => 675834156),
             "Persona3" => array("Nombre" => "Eduardo Villar", "Dirección" => "C/Jose Ruiz, 8", "Teléfono" => 652538014)
             );
        foreach ($datos as $i => $valor) {
            foreach ($valor as $key => $value) {
                 echo $key.": ".$value."<br>";
            }
            echo"<br><br><br>";
           
        }
        ?>
    </body>
</html>
