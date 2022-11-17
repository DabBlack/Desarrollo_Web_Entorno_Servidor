<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Jugador</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="divPrincipal">
            <table>
                <form action="" method="POST">
                    <h3>Eliminación de jugadores</h3>
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
                                    
                                    echo "<tr><td>Nombre:</td> <td>$fila->nombre</td></tr>";
                                    echo "<tr><td>Dni:</td> <td>$fila->dni</td></tr>";
                                    echo "<tr><td>Dorsal:</td> <td>$fila->dorsal</td>";
                                    echo "<tr><td>Posicion:</td><td>$fila->posicion</td>";
                                    echo "<tr><td>Equipo:</td> <td>$fila->equipo</td></tr>";
                                    echo "<tr><td>Goles:</td> <td>$fila->goles</td></tr>";
                                    echo "<input type=hidden name=dni value=$fila->dni>";
                                    echo "<tr><td></td><td><input type='submit' name='eliminar' value='Eliminar jugador'>";
                                        
                                }
                            }
                            else {
                                echo  "<font color=red>No se han encontrado registros</font>";
                            }
                            $con->close();
                        }
                    ?>
                </form>
                <?php
                    if (isset($_POST['eliminar'])) {
                        $con=conexion();
                        if($con->errno) {
                            die('ERROR AL CONECTAR CON LA BASE DE DATOS.');
                        }
                        
                        $con->query("DELETE FROM jugador where dni='$_POST[dni]'");
                        echo "================================<br>";
                        if(!$con->errno) {
                           echo "Se han eliminado correctamente $con->affected_rows registros";
                        }
                        else {
                           echo  "<font color=red>Error al eliminar los registros</font>";
                           echo $con->error;
                        }
                        $con->close();
                    }
                ?>
            </table>
        </div>
        
    </body>
</html>
