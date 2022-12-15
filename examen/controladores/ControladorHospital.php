<?php
require_once '../controladores/conexion.php';
     
class controladorHospital {
   public static function obtenerTodosHospitales() {
    try {
        $conex = new Conexion;
        $result = $conex->query("SELECT * FROM hospitales");
        if ($result->rowCount()>0) {
            while ($reg = $result->fetchObject()) {
                $h = new Hospital($reg->nombre_H, $reg->direccion, $reg->telefono, 
                        $reg->usuario, $reg->clave, $reg->intentos);
                $hospitales[] = clone($h);
            }
        } else $hospitales = false;
       unset($conex);
       return $hospitales;
    } catch (PDOException $exc) {
       echo "<a href=index.php>Inicio</a>";
       die("Error en la BD. ". $exc.getMessage());
      }
   }  
}


?>
