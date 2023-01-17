<?php
session_start();
require_once './Controllers/PacienteController.php';
require_once './Controllers/MedicoController.php';
require_once './Controllers/AtenderController.php';

if (!isset($_SESSION["nombre"])) {
    header("location:index.php");
} else {

    if (isset($_POST["registrar"])) {
        AtenderController::newCita($_POST["medicos"], $_POST["nss"], $_POST["fecha"], $_POST["hora"], $_POST["consulta"], $_FILES["foto"]);
        PacienteController::reducirSaldo($_POST["nss"]);
        header("location:menu.php");
    }
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <a href="cerrarsesion.php">Cerrar Sesion</a>
            <div>

                Hospital : 
                <input type="text" disabled="" name="nombre" value="<?php echo $_SESSION["nombre"] ?>"><br>
                Telefono:
                <input type="text" disabled="" name="tlf" value="<?php echo $_SESSION["telefono"] ?>"><br>
                Direccion:
                <input type="text" disabled="" name="direccion" value="<?php echo $_SESSION["direccion"] ?>">
            </div>
            <br><br><br><!-- comment -->

            <form action="" method="POST">
                NSS del paciente: 
                <input type="text" value="" name="nss"></input>
                <br><br>
                <input type="submit" value="Buscar" name="buscar"></input> 
            </form>

            <?php

            if (isset($_POST["buscar"])) {
                $p = PacienteController::findPaciente($_POST["nss"]);
                if (isset($p)) {
                    ?>
                    <div>
                        <b>PACIENTE</b>
                        NSS : 
                        <input type="text" disabled="" name="nombre" value="<?php echo $p->nss; ?>"><br>
                        Nombre:
                        <input type="text" disabled="" name="tlf" value="<?php echo $p->nombre; ?>"><br>
                        Fecha Nacimiento:
                        <input type="text" disabled="" name="fechaNacimiento" value="<?php echo $p->fecha_nac; ?>"><br>
                        Telefono:
                        <input type="text" disabled="" name="telefono" value="<?php echo $p->telefono; ?>"><br>
                        Domicilio:
                        <input type="text" disabled="" name="domicilio" value="<?php echo $p->domicilio; ?>"><br>
                        Provincia:
                        <input type="text" disabled="" name="provincia" value="<?php echo $p->provincia; ?>"><br>
                        Pais:
                        <input type="text" disabled="" name="pais" value="<?php echo $p->pais; ?>"><br>
                        Saldo:
                        <input type="text" disabled="" name="saldo" value="<?php echo $p->saldo; ?>"><br>
                    </div>
                    <div>
                        <b>Elegir médico</b>
                        <br><br>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <select name="medicos"> 
                                <?php
                                $medicos = MedicoController::findAllMedicosFromHospital($_SESSION["nombre"]);
                               
                                foreach ($medicos as $key => $value) {
                                    echo '<option value='. $value->dni.'>' . $value->nombre . "----" . $value->especialidad . "</option>";
                                }
                                ?>

                            
                            </select>
                            <br><br>
                            Consulta:
                         
                            <input type="text"  name="consulta" value=""><br>
                            Fecha:
                            <input type="date" name="fecha" value=""><br>
                            Hora:
                            <input type="time" name="hora" value=""><br>
                            Adjuntar volante:
                            <input type="file" name="foto"><br><br><!-- comment -->

                            <input type="hidden" name="nss" value="<?php echo $_POST["nss"];?>">

                            <input type="submit" value="Registrar Cita" name="registrar"></input> 


                        </form>

                    </div>
                    <?php
                }
            }
            ?>
        </body>
    </html>
<?php }
?>
