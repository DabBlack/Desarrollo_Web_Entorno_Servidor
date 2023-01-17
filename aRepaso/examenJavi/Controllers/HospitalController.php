<?php

require_once 'Conexion.php';
require_once './Modelo/Hospital.php';

class HospitalController {

    public static function findHospital($usuario, $clave) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM hospital WHERE usuario='$usuario' and clave='$clave'");
            
            if ($result ->rowCount() > 0) {
                while ($hospital = $result->fetchObject()) {
                    $h = new Hospital($hospital->nombre_H, $hospital ->direccion, $hospital-> telefono, $hospital->usuario, $hospital->clave, $hospital -> intentos);
                }
                
                
                return $h;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }

    

}
