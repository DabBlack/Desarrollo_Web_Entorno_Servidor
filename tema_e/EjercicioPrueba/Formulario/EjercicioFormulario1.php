x<!DOCTYPE html>
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
        $errorSexo = false;
        $errorCivil = false;
        $errorAficciones = false;
        $errorEstudios = false;
        $errorEdad = false;
        if(isset($_POST["enviar"])) {
            if (empty($_POST["nombre"])) $errorNombre = true;
            if (empty($_POST["apellidos"])) $errorApellido = true;
            if (empty($_POST["sexo"])) $errorSexo = true;
            if (!isset($_POST["civil"])) $errorCivil = true;
            if (!isset($_POST["aficcion"])) $errorAficciones = true;
            if (empty($_POST["estudios"])) $errorEstudios = true;
            if ($_POST["edad"] == "vacio") $errorEdad = true;
        }
        
        if (isset($_POST["enviar"]) && !$errorNombre && !$errorApellido && !$errorSexo && !$errorCivil && !$errorAficciones){
            echo "Nombre: ".$_POST["nombre"]."<br>";
            echo "Apellidos: ".$_POST["apellidos"]."<br>";
            echo "Sexo: ".$_POST["sexo"]."<br>";
            echo "Estado Civil: ".$_POST["civil"]."<br>";
            echo "Aficciones: <br>";
            foreach ($_POST["aficcion"] as $key => $value) {
                echo $value."  ";
            }
            echo "<br>";
            echo "Estudios: <br>";
            foreach ($_POST["estudios"] as $key => $value) {
                echo $value."  ";
            }
            echo "<br>";
            echo "Edad: ".$_POST["edad"]."<br>";
             echo "<a href=".$_SERVER['PHP_SELF']."> VOLVER </a>";
            
        } else {
        ?>
        
        <form action="" method="POST">
            Nombre:  <input type="text" name="nombre" value="<?php if(isset($_POST["enviar"]) && !$errorNombre) echo $_POST["nombre"] ?>"><?php if($errorNombre && isset($_POST["enviar"])) echo "<font color=red> Introduce un nombre </font>" ?> <br> <br>
            Apellidos:  <input type="text" name="apellidos" value="<?php if(isset($_POST["enviar"]) && !$errorApellido) echo $_POST["apellidos"] ?>">  <?php if($errorApellido && isset($_POST["enviar"])) echo "<font color=red> Introduce un apellido valido </font>" ?>  <br> <br>
            Sexo:<br>
            <input type="radio" name="sexo" value="Hombre" <?php if(!$errorSexo && isset($_POST["enviar"]) && $_POST["sexo"] == "Hombre") echo "checked=checked"?>> <label>Hombre</label>
            <input type="radio" name="sexo" value="Mujer" <?php if(!$errorSexo && isset($_POST["enviar"]) && $_POST["sexo"] == "Mujer") echo "checked=checked"?>> <label>Mujer</label>
            <input type="radio" name="sexo" value="Porfavor" <?php if(!$errorSexo && isset($_POST["enviar"]) && $_POST["sexo"] == "Porfavor") echo "checked=checked"?>> <label>Porfavor</label>
            <?php if($errorSexo && isset($_POST["enviar"])) echo "<font color=red> Selecciona un sexo </font>" ?> <br> <br>
            Estado civil:<br>
            <input type="radio" name="civil" value="Soltero" <?php if(!$errorCivil && isset($_POST["enviar"]) && $_POST["civil"] == "Soltero") echo "checked=checked"?>> <label>Soltero</label>
            <input type="radio" name="civil" value="Casado" <?php if(!$errorCivil && isset($_POST["enviar"]) && $_POST["civil"] == "Casado") echo "checked=checked"?>> <label>Casado</label>
            <input type="radio" name="civil" value="Otro" <?php if(!$errorCivil && isset($_POST["enviar"]) && $_POST["civil"] == "Otro") echo "checked=checked"?>> <label>Otro</label>
             <?php if($errorCivil && isset($_POST["enviar"])) echo "<font color=red> Selecciona un estado civil </font>" ?> <br> <br>
            Aficciones: <br>
            <input type="checkbox" name="aficcion[]" value="Cine" <?php if(!$errorAficciones && isset($_POST['enviar']) && in_array("Cine",$_POST['aficcion']))  echo "checked=checked" ?>> <label>Cine</label>
            <input type="checkbox" name="aficcion[]" value="Deporte" <?php if(!$errorAficciones && isset($_POST['enviar']) && in_array("Deporte",$_POST['aficcion']))  echo "checked=checked" ?>> <label>Deporte</label>
            <input type="checkbox" name="aficcion[]" value="Lectura" <?php if(!$errorAficciones && isset($_POST['enviar']) && in_array("Lectura",$_POST['aficcion']))  echo "checked=checked" ?>> <label>Lectura</label>
            <input type="checkbox" name="aficcion[]" value="Musica" <?php if(!$errorAficciones && isset($_POST['enviar']) && in_array("Musica",$_POST['aficcion']))  echo "checked=checked" ?>> <label>Música</label>
            <input type="checkbox" name="aficcion[]" value="Television" <?php if(!$errorAficciones && isset($_POST['enviar']) && in_array("Television",$_POST['aficcion']))  echo "checked=checked" ?>> <label>Television</label>
            <input type="checkbox" name="aficcion[]" value="Internet" <?php if(!$errorAficciones && isset($_POST['enviar']) && in_array("Internet",$_POST['aficcion']))  echo "checked=checked" ?>> <label>Internet</label>
             <?php if($errorAficciones && isset($_POST["enviar"])) echo "<font color=red> Selecciona al menos una aficcion </font>" ?> <br> <br>
            Estudios: <br>
            <select multiple name="estudios[]" >
                <option value="ESO" <?php if(!$errorEstudios && isset($_POST["enviar"]) && in_array("ESO", $_POST["estudios"])) echo "selected" ?>>ESO</option>
                <option value="Bachillerato" <?php if(!$errorEstudios && isset($_POST["enviar"]) && in_array("Bachillerato", $_POST["estudios"])) echo "selected" ?> >Bachillerato</option>
                <option value="Grado Medio" <?php if(!$errorEstudios && isset($_POST["enviar"]) && in_array("Grado Medio", $_POST["estudios"])) echo "selected" ?>>CFGM</option>
                <option value="Grado Superior" <?php if(!$errorEstudios && isset($_POST["enviar"]) && in_array("Grado Superior", $_POST["estudios"])) echo "selected" ?>>CFGS</option>
                <option value="Universidad" <?php if(!$errorEstudios && isset($_POST["enviar"]) && in_array("Universidad", $_POST["estudios"])) echo "selected" ?>>Universidad</option>
            </select>
            <?php if($errorEstudios && isset($_POST["enviar"])) echo "<font color=red> Selecciona al menos un estudio </font>" ?> <br> <br>
            Edad:
            <select name="edad">
                <option value="vacio" selected></option>
                <option value="1-14 años" <?php if (!$errorEdad && isset($_POST["enviar"]) && $_POST["edad"] == "1-14 años") echo "selected" ?>>Entre 1 y 14 años</option>
                <option value="15-25 años" <?php if (!$errorEdad && isset($_POST["enviar"]) && $_POST["edad"] == "15-25 años") echo "selected" ?> >Entre 15 y 25 años</option>
                <option value="26-35 años" <?php if (!$errorEdad && isset($_POST["enviar"]) && $_POST["edad"] == "26-35 años") echo "selected" ?>>Entre 26 y 35 años</option>
                <option value="+35 años" <?php if (!$errorEdad && isset($_POST["enviar"]) && $_POST["edad"] == "+35 años") echo "selected" ?>>Mayor de 35 años</option>
            </select>
            <?php if($errorEdad && isset($_POST["enviar"])) echo "<font color=red> Selecciona tu edad </font>" ?>
            <br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php 
        }
        ?>
    </body>
</html>
