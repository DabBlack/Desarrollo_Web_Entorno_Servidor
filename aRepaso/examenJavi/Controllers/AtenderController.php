<?php

require_once 'Conexion.php';
require_once './Modelo/Atender.php';
require_once './Controllers/MedicoController.php';

class AtenderController {

    public static function newCita($dni, $nss, $fecha, $hora, $consulta, $foto) {



        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $volante = time() . "-" . $nss . "-volante.jpg";
            $ruta = "./Imagenes/" . $volante;
            move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
        }

        try {
            $conex = new Conexion();
            $conex->exec("INSERT INTO atender (dni_medico, nss, fecha, hora, consulta, volante) VALUES ('$dni','$nss', '$fecha', '$hora', '$consulta', '$volante')");
         
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }

    


   

}
