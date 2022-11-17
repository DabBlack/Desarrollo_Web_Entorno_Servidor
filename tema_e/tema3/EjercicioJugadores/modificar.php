<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        
        <div id="divPrincipal">
            <table>
                <form action="" method="POST">
                    <h3>Modificación jugadores</h3>
                    <tr>
                        <td>Dni Jugador: </td>
                        <td><input type="text" name="dni"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="buscar" value="Buscar"></td>
                        <td><a href="index.php"><input type="button" name="indice" value="Volver"></a></td>
                    </tr>
                
            </table>
            <table>
                <?php
                    include './funciones.php';
                        if(isset($_POST['buscar'])) {
                            echo "================================<br>";
                            
                            $con=conexion();
                            $r1=buscarJugador($con, $_POST['dni']);
                            if($con->affected_rows) {
                                while ($fila=$r1->fetch_object()) {
                                    
                                    echo "<tr><td>Nombre:</td> <td><input type='text' name='nombre' value='".$fila->nombre."'></td></tr>";
                                    echo "<tr><td>Dni:</td> <td>$fila->dni<input type='hidden' name='dni' value='".$fila->dni."' readonly></td></tr>";
                                    echo "<tr><td>Dorsal:</td> <td>";
                                    ?>
                                    <select name="dorsal">
                                        <?php
                                        for ($i = 1; $i <= 11; $i++) {
                                            echo "<option value='$i'"; if($i == $fila->dorsal) echo 'selected'; echo ">$i</option>";
                                        }
                                        ?>
                                    </select>
                                    </td> 
                                    <?php
                                    echo "<tr><td>Posicion:</td><td>";
                                    ?>
                                    <select name="posicion[]" multiple="">
                                        <option value="1" <?php if(strpos($fila->posicion, "Portero") != false) echo "selected"?>>Portero</option>
                                        <option value="2" <?php if(strpos($fila->posicion, "Defensa") != false) echo "selected"?>>Defensa</option>
                                        <option value="4" <?php if(strpos($fila->posicion, "Centrocampista") != false) echo "selected"?>>Centrocampista</option>
                                        <option value="8" <?php if(strpos($fila->posicion, "Delantero") != false) echo "selected"?>>Delantero</option>
                                    </select>
                                    </td>
                                    <?php  
                                        echo "<tr><td>Equipo:</td> <td><input type='text' name='equipo' value='".$fila->equipo."'></td></tr>";
                                        echo "<tr><td>Goles:</td> <td><input type='text' name='goles' value='".$fila->goles."'></td></tr>";
                                        echo "<tr><td></td><td><input type='submit' name='actualizar' value='Actualizar jugador'>";
                                        
                                }
                            }
                            else {
                                echo "<font color=red>No se han encontrado registros.</font>";
                            }
                            $con->close();
                        }
                    ?>
                </form>
            </table>
            
            <?php
                if(isset($_POST['actualizar'])) {
                    
                    $con=conexion();
                    
                    
                    $posicion=0;
                    foreach ($_POST['posicion'] as $value) {
                        $posicion+=$value;
                    }
                    
                    $r1=$con->query("UPDATE jugador SET nombre='$_POST[nombre]', dorsal=$_POST[dorsal], posicion='$posicion', equipo='$_POST[equipo]', goles=$_POST[goles] where dni='$_POST[dni]'");
                    if(!$con->errno) {
                        echo "================================<br>";
                        echo "Se ha modificado correctamente el jugador.";
                    }
                    else {
                        $con->error;
                    }
                }
                
            ?>
        </div>
    </body>
</html>
