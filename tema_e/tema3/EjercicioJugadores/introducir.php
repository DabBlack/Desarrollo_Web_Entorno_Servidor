<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <?php
        include './funciones.php';
            $errorNombre = false;
            $errorDni = false;
            $errorDorsal = false;
            $errorPosicion = false;
            $errorEquipo = false;
            $errorGoles = false;
        if(isset($_POST['insertar'])) {
            $errorNombre = verificar($_POST['nombre']);
            $errorDni = verificar($_POST['dni']);
            $errorDorsal = verificar($_POST['dorsal']);
            $errorPosicion = verificar($_POST['posicion']);
            $errorEquipo = verificar($_POST['equipo']);
            $errorGoles = verificar($_POST['goles']);
        }
        ?>
        <div id="divPrincipal">
            <table>
                <form action="" method="POST">
                    <h3 style="text-align: center;">Introduce un jugador</h3>
                    <tr>
                        <td> Nombre:</td>
                        <td> <input type="text" name="nombre" placeholder="Introduce el nombre..." value="<?php if(!$errorNombre && isset($_POST['insertar'])) echo $_POST['nombre'] ?>"></td>
                        <?php if($errorNombre && isset($_POST['insertar'])) echo "<td><font color=red> Introduce un nombre válido. </font></td>" ?>
                    </tr>
                    <tr>
                        <td> Dni: </td> 
                        <td><input type="text" name="dni" placeholder="Introduce el dni..." value="<?php if(!$errorDni && isset($_POST['insertar'])) echo $_POST['dni'] ?>"></td>
                         <?php if($errorDni && isset($_POST['insertar'])) echo "<td><font color=red> Introduce un dni válido. </font></td>" ?>
                    </tr>
                    <tr>
                        <td> Dorsal: </td> 
                        <td>
                            <select name="dorsal">
                                <?php
                                for ($i = 1; $i <= 11; $i++) {
                                    echo "<option value='$i'"; if(isset($_POST['insertar']) && !$errorDorsal && $i == $_POST['dorsal']) echo 'selected'; echo ">$i</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <?php if($errorDorsal && isset($_POST['insertar'])) echo "<td><font color=red> Selecciona un dorsal válido. </font></td>" ?>
                    </tr>
                    <tr>
                        <td> Posición: </td>
                        <td>
                            <select name="posicion[]" multiple="">
                                <option value="1" <?php if(!$errorPosicion && isset($_POST['insertar']) && in_array("1", $_POST['posicion'])) echo "selected"?>>Portero</option>
                                <option value="2" <?php if(!$errorPosicion && isset($_POST['insertar']) && in_array("2", $_POST['posicion'])) echo "selected"?>>Defensa</option>
                                <option value="4" <?php if(!$errorPosicion && isset($_POST['insertar']) && in_array("3", $_POST['posicion'])) echo "selected"?>>Centrocampista</option>
                                <option value="8" <?php if(!$errorPosicion && isset($_POST['insertar']) && in_array("4", $_POST['posicion'])) echo "selected"?>>Delantero</option>
                            </select>
                        </td>
                         <?php if($errorPosicion && isset($_POST['insertar'])) echo "<td><font color=red> Selecciona una posición. </font></td>" ?>
                    </tr> 
                    <tr>
                        <td>Equipo:</td>
                        <td><input type="text" name="equipo" placeholder="Introduce el equipo..."  value="<?php if(!$errorEquipo && isset($_POST['insertar'])) echo $_POST['equipo'] ?>"></td>
                        <?php if($errorEquipo && isset($_POST['insertar'])) echo "<td><font color=red> Introduce un equipo válido. </font></td>" ?>
                    </tr>
                    <tr>
                        <td>Nº de goles: </td>
                        <td><input type="text" name="goles" placeholder="Introduce los goles..."  value="<?php if(!$errorGoles && isset($_POST['insertar'])) echo $_POST['goles'] ?>"></td>
                        <?php if($errorGoles && isset($_POST['insertar'])) echo "<td><font color=red> Introduce un número de goles válido. </font></td>" ?>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="insertar" value="Insertar"></td>
                        <td><a href="index.php"><input type="button" name="indice" value="Volver"></a></td>
                    </tr>
            </form>
            </table>
            
            <?php
           
                if (isset($_POST['insertar']) && !$errorDni && !$errorDorsal && !$errorPosicion && !$errorNombre && !$errorEquipo && !$errorGoles) {
                    $con = conexion();
                    
                    if(!empty($_POST['posicion'])) {
                        $posicion=0;
                        foreach ($_POST['posicion'] as $value) {
                            $posicion+=$value;
                        }
                    }
                    
                    $con->query("INSERT INTO jugador (dni,nombre,dorsal,posicion,equipo,goles) VALUES ('$_POST[dni]','$_POST[nombre]', $_POST[dorsal] ,$posicion,'$_POST[equipo]',$_POST[goles])");

                    echo "================================<br>";
                    if(!$con->errno) {
                        echo "<br>Filas insertadas: ".$con->affected_rows."<br>";
                    }
                    else {
                       echo  "<font color=red>Error al insertar el registro.</font>";
                    }
                    $con->close();
                }
            ?>
        </div>
        
        
        
    </body>
</html>
