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
        $año = 2023;
        
        if($año % 4 == 0 && ($año % 100 != 0 || $año % 400 == 0)) {
           echo "El año ".$año. " es bisiesto, tiene 366 días."; 
        }
        else {
            echo  "El año ".$año. " no es bisiesto, tiene 365 dias.";
        }
        
        
        ?>
    </body>
</html>
