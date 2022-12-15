<?php
    function conexion() {
        $conexion = new mysqli("localhost","dwes","abc123.","hospitales_comares");
        $error=false;
        if($conexion->connect_errno){
            $error=$conexion->connect_error;    
        }
        return $conexion;
    }
    
    
    
?>
