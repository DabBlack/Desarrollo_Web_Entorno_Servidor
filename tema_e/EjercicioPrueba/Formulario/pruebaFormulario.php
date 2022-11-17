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
        $errorNombre = false;
        $errorApellido = false;
        $errorCurso = false;
        if (isset($_POST["enviar"])) {
            if(empty($_POST["nombre"])) {
                $errorNombre = true;
            }
            if (empty($_POST["apellido"])) {
                $errorApellido = true;
            }
            if (!isset($_POST["curso"])) {
                $errorCurso = true;
            }
        }
        
        if (isset($_POST["enviar"]) && !$errorNombre && !$errorApellido && !$errorCurso) {
            echo "Nombre: ".$_POST["nombre"]."<br>";
            echo "Apellido: ".$_POST["apellido"]."<br>";
            echo "Curso: <br>";
            foreach ($_POST["curso"] as $key => $value) {
                echo $value."<br>";
            }
            echo "<a href=".$_SERVER['PHP_SELF']."> VOLVER </a>";
        }
        else {
        ?>
        <form action ="" method="POST">

            Nombre: <input type="text" name="nombre"><?php if($errorNombre && isset($_POST["enviar"])) echo " Introduce un nombre" ?><br>
            Apellido: <input type="text" name="apellido" > <?php if($errorApellido && isset($_POST["enviar"])) echo " Introduce un apellido valido" ?><br>
            Curso: <?php if($errorCurso && isset($_POST["enviar"])) echo " Selecciona un curso" ?><br>
              <input type="checkbox" name="curso[]" value="DAW" <?php if(!$errorCurso && isset($_POST['enviar']) && in_array("DAW",$_POST['curso']))  echo "checked=checked" ?>>  DAW <br>
              <input type="checkbox" name="curso[]" value="DAM" <?php if(!$errorCurso && isset($_POST['enviar']) && in_array("DAM",$_POST['curso']))  echo "checked=checked" ?>> DAM <br>
              <input type="checkbox" name="curso[]" value="ASIR" <?php if(!$errorCurso && isset($_POST['enviar']) && in_array("ASIR",$_POST['curso']))  echo "checked=checked" ?>> ASIR <br>
                <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
            }
        ?>
    </body>
</html>
