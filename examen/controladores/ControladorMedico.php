<?php

class controladorMedico{
    public static function obtenerTodosMedicos() {
    try {
        $conex = new Conexion();
        $result = $conex->query("SELECT * FROM medicos");
        if ($result->rowCount()>0) {
            while ($reg = $result->fetchObject()) {
                $h = new Medico($reg->dni, $reg->nombre, $reg->especialidad, 
                        $reg->nombre_hospital);
                $medicos[] = clone($h);
            }
        } else $medicos = false;
       unset($conex);
       return $medicos;
    } catch (PDOException $exc) {
       echo "<a href=index.php>Inicio</a>";
       die("Error en la BD. ". $exc.getMessage());
      }
   }  
}

?>

