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
        if(isset($_POST["confirmar"])) {
            echo "<font color=blue>".$_POST["nombre"]." su petición se ha registrado correctamente </font><br>";
        }
        if(isset($_POST["cancelar"])) {
            echo "<font color=red>Se ha cancelado el proceso de registro.</font>";
        }
        ?>
        <form action="" method="POST" <?php if(isset($_POST["enviar1"]) || isset($_POST["enviar2"])) echo "hidden"; ?>>
            Nombre: <input type="text" name="nombre" <?php if(isset($_POST["cancelar"])) echo "value=".$_POST["nombre"]; ?>> <br><br>
            Apellidos: <input type="text" name="apellidos" <?php if(isset($_POST["cancelar"])) echo "value=".$_POST["apellidos"]; ?>><br><br>
            <input type="submit" name="enviar1" value="Siguiente">
        </form>
        
        <?php
        if(isset($_POST["enviar1"])) {
        ?>
        
        <form action="" method="POST" <?php if(isset($_POST["enviar2"]) || isset($_POST["confirmar"]) || isset($_POST["cancelar"])) echo "hidden"; ?>>
            Nº Matricula: <input type="text" name="matricula"> <br> <br>
            Curso: <input type="text" name="curso"> <br> <br>
            Precio: <input type="text" name="precio"> <br> <br>
            <input type="hidden" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
            <input type="hidden" name="apellidos" value="<?php echo $_POST["apellidos"]; ?>">            
            <input type="submit" name="enviar2" value="Siguiente">
        </form>
        <?php
        }
        ?>
        
        <?php
        if(isset($_POST["enviar2"])) {
            echo "Datos de matrícula <br><br>";
            echo "Nombre: ".$_POST["nombre"]."<br> <br>";
            echo "Apellidos: ".$_POST["apellidos"]."<br> <br>";
            echo "Nº Matricula: ".$_POST["matricula"]."<br> <br>";
            echo "Curso: ".$_POST["curso"]."<br> <br>";
            echo "Precio: ".$_POST["precio"]."<br> <br>";
        
        ?>
        <form action="" method="POST">
          <input type="hidden" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
          <input type="hidden" name="apellidos" value="<?php echo $_POST["apellidos"]; ?>">
          <input type="submit" value="Cancelar" name="cancelar">
          <input type="submit" value="Confirmar" name="confirmar">
        </form>
        <?php
        }
        ?>
    </body>
</html>
