<?php
    $conexion = new mysqli("localhost","alquiler_juegos","abc123.","dwes");
    $error=false;
    if($conexion->connect_errno){
        $error=$conexion->connect_error;    
    }
?>
