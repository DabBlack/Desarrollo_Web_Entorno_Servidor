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
        if(isset ($_POST['siguiente'])) {
            echo "Nombre: " . $_POST['nombre'] . "<br><br>";
            echo "Apellidos: " . $_POST['apellidos'] . "<br><br>";
            echo "Matricula: " . $_POST['matricula'] . "<br><br>";
            echo "Curso: " . $_POST['curso'] . "<br><br>";
            echo "Precio: " . $_POST['precio'] . "<br><br>";
        ?>
        <form action="ejercicioPizarra2_1.php" method="POST">
            <input type="submit" name="confirmar" value="Confirmar">
            
            <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']; ?>">
            <input type="hidden" name="apellidos" value="<?php echo $_POST['apellidos']; ?>">
            <input type="submit" name="cancelar" value="Cancelar">
        </form>
        <?php
        }
        
        else{
            header('Location:ejercicioPizarra2_1.php');
        }
        ?>
    </body>
</html>
