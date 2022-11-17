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
         $matriz = array(
                   1 => array("Nombre"=>"Pedro Torres" ,"Dirección"=>"C/ Mayor, 37", "Teléfono"=> "123456789"),
                   2 => array("Nombre"=>"Pepe Algar" ,"Dirección"=>"C/ Menor, 7", "Teléfono"=> "987654321"),
                   3 => array("Nombre"=>"Pepa Bujalance" ,"Dirección"=>"C/ Mediano, 17", "Teléfono"=> "569872456"),
                   4 => array("Nombre"=>"Pepito Gutierrez" ,"Dirección"=>"C/ Alto, 47", "Teléfono"=> "457123549"),
                   5 => array("Nombre"=>"Pepita Budia" ,"Dirección"=>"C/ Bajo, 27", "Teléfono"=> "980246578"));
                   
         
        foreach ($matriz as $id => $datos) {
           foreach ($datos as $indice=> $contenido) {
               echo "$indice: $contenido <br>";
           }
           echo "<br>";
        }
        ?>
    </body>
</html>