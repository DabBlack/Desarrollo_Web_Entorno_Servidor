<?php

class controladorAtender {
     public static function obtenerTodosAtender() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM atender");
            if ($result->rowCount()>0) {
                while ($reg = $result->fetchObject()) {
                    $h = new Atender($reg->$dni_medico, $reg->nss, $reg->fecha, 
                            $reg->hora, $reg->consulta, $reg->volante);
                    $atender[] = clone($h);
                }
            } else $atender = false;
           unset($conex);
           return $atender;
        } catch (PDOException $exc) {
           echo "<a href=index.php>Inicio</a>";
           die("Error en la BD. ". $exc.getMessage());
          }
    }  
}   

?>