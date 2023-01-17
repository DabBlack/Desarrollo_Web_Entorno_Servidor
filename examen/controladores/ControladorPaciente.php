<?php

class controladorPaciente{
    public static function obtenerTodosPacientes() {
    try {
        $conex = new Conexion();
        
        $result = $conex->query("SELECT * FROM pacientes");
        
        if ($result->rowCount()>0) {
            while ($reg = $result->fetchObject()) {
                $h = new Hospital($reg->nss, $reg->nombre, $reg->fecha_nac,$reg->domicilio, 
                         $reg->telefono, $reg->provincia, $reg->pais, $reg->saldo);
                $pacientes[] = clone($h);
            }
        } else $pacientes = false;
       unset($conex);
       return $pacientes;
    } catch (PDOException $exc) {
       echo "<a href=index.php>Inicio</a>";
       die("Error en la BD. ". $exc.getMessage());
      }
   }  
}

?>

