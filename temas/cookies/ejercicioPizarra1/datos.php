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
         if(!isset($_COOKIE['acceso'])) {
            setcookie("acceso", date("d-m-Y") . " a las " . date("H:i"));            
            echo "Bienvenido a mi web";
        }
        else {
            setcookie("acceso", date("d-m-Y") . " a las " . date("H:i"));            
            echo "Hola ".$_nombre, " su última visita fue el ".$_COOKIE['acceso'];
        }
        ?>
        
        ?>
        
        
    </body>
</html>
