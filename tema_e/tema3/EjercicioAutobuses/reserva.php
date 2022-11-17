<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reserva on-line</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <?php
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=autobuses', 'autobuses', 'abc123.');
        ?>
        <div id="divPrincipal">
            <h2>AUTOBUSES DAVID ALGAR</h2>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            Fecha: 
                        </td>
                        <td>
                            <input type="date" name="fecha">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Origen: 
                        </td>
                        <td>
                            <select name="origen">
                                <?php
                                    $r1=$conexion->query('select origen from viajes group by origen');
                                    while($fila=$r1->fetchObject()) {
                                        echo "<option value=$fila->origen>$fila->origen</option>";
                                    }
                                    
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Destino:
                        </td>
                        <td>
                            <select name='destino'>
                                <?php
                                    $r2=$conexion->query('select destino from viajes group by destino');
                                    while($fila=$r2->fetchObject()) {
                                        echo "<option value=$fila->destino>$fila->destino</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="consultar" value="Consultar">
                        </td>
                        <td>
                            <a href="index.php"><input type="button" value="Volver al Indice"></a>
                        </td>
                    </tr>
                </table>
            </form>
            
            <form action="" method="POST">
                <table>
                    <?php
                        if(isset($_POST['consultar'])) {
                            $r3=$conexion->query("SELECT * from viajes where fecha='$_POST[fecha]' and origen='$_POST[origen]' and destino='$_POST[destino]'");
                            
                            if($r3->rowCount()>0) {
                                while($fila=$r3->fetchObject()) {
                                    echo "<tr><td>Fecha: </td><td>$fila->Fecha</td></tr>";
                                    echo "<input type=hidden name=fecha value=$fila->Fecha>";
                                    echo "<tr><td>Origen: </td><td>$fila->Origen</td></tr>";
                                    echo "<input type=hidden name=origen value=$fila->Origen>";
                                    echo "<tr><td>Destino: </td><td>$fila->Destino</td></tr>";
                                    echo "<input type=hidden name=destino value=$fila->Destino>";
                                    echo "<tr><td>Plazas disponibles: </td><td>$fila->Plazas_libres</td></tr>";
                                    echo "<input type=hidden name=plazaslibres value=$fila->Plazas_libres>";
                                    echo "<input type=hidden name=matricula value=$fila->Matricula>";
                                    echo "<tr><td>Plazas a reservar: </td><td><input type=text name=plazas></td></tr>";
                                    echo "<tr><td></td><td><input type=submit name=reservar value=Reservar></td</tr>";
                                }
                                
                            }
                            else {
                                echo "<br><font color=red>No se han encontrado viajes.</font>";
                            }
                        }
                    ?>
                </table>
            </form>
            
            <?php
                if(isset($_POST['reservar'])){
                    if($_POST['plazaslibres']>$_POST['plazas']) {                         
                        $r4=$conexion->exec("UPDATE viajes SET Plazas_libres=$plazaslibres where fecha='$_POST[fecha]' and origen='$_POST[origen]' and destino='$_POST[destino]' and matricula='$_POST[matricula]'");
                        
                        echo "<br><font color=blue>Reserva de $_POST[plazas] para ir desde $_POST[origen] hasta $_POST[destino] el $_POST[fecha] realizada correctamente.</font>";
                        
                    }
                    else {
                        echo "<br><font color=red>No se ha podido realizar la reserva.<br> Nº de plazas superior al disponible.</font>";
                    }
                }
            ?>
        </div>
        
        <?php
        } catch (Exception $ex) {
            
        }
        
        ?>
    </body>
</html>
