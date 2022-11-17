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
        if(isset($_POST['Confirmar'])) {
            echo "Nombre: ".$_POST['nombre']."<br>";
            echo "Apellidos: ".$_POST['apellidos']."<br>";
            echo "Curso: <br>";
            foreach ($_POST['curso'] as $c) {
                echo $c."<br>";
            }
        }
        ?>
    </body>
</html>
