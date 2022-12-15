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
        $conexion = new mysqli("localhost","autobuses","abc123.","autobuses");
        $error=false;
        if($conexion->connect_errno){
            $error=$conexion->connect_error;    
        }
        ?>
        
        <h1>Autobuses Comares</h1>
        
        
        
        
    </body>
</html>
