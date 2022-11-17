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
        echo "Datos de matrícula <br><br>";
        echo "Nombre: ".$_POST["nombre"]."<br> <br>";
        echo "Apellidos: ".$_POST["apellidos"]."<br> <br>";
        echo "Nº Matricula: ".$_POST["matricula"]."<br> <br>";
        echo "Curso: ".$_POST["curso"]."<br> <br>";
        echo "Precio: ".$_POST["precio"]."<br> <br>";
        echo "Idiomas: ".$_POST["idiomas"]."<br><br>";
        ?>
        
        <form action="FormularioPagina1.php" method="POST">
          <input type="hidden" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
          <input type="hidden" name="apellidos" value="<?php echo $_POST["apellidos"]; ?>">
          <input type="hidden" name="matricula" value="<?php echo $_POST["matricula"]; ?>">
          <input type="hidden" name="curso" value="<?php echo $_POST["curso"]; ?>">
          <input type="hidden" name="precio" value="<?php echo $_POST["precio"]; ?>">
          <input type="submit" value="Cancelar" name="cancelar">
          <input type="submit" value="Confirmar" name="confirmar">
        </form>
    </body>
</html>
