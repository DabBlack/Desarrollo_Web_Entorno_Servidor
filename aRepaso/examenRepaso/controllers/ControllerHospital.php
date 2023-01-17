<?php
require_once '../controllers/Conexion.php';
     
class controladorHospital {
   public static function obtenerTodosHospitales($usuario, $clave) {
    try {
        $conex = new Conexion;
        $result = $conex->query("SELECT * FROM hospitales WHERE "
                . "usuario='$usuario' and clave='$clave'");
        if ($result->rowCount()>0) {
            while ($reg = $result->fetchObject()) {
                $h = new Hospital($reg->nombre_H, $reg->direccion, $reg->telefono, 
                        $reg->usuario, $reg->clave, $reg->intentos);
            }
            return $h;
        }
    }   catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }
}

?>

