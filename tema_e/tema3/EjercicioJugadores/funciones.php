<?php
    
    function verificar($campo) {
        $error = false;
        if(empty($campo)) {
            $error = true;
        }
        return $error;
    }
    
    function buscarJugador($con, $campo) {
        $r1=$con->query("SELECT * from jugador where dni='$campo'");
        return $r1;
    }
    
    function conexion() {
        $con= new mysqli('localhost','dwes','abc123.','jugadores');
                if($con->connect_errno) {
                    die('ERROR AL CONECTAR CON LA BASE DE DATOS');
                }
        return $con;
    }
    
    function recorrerResultado($result) {
        while ($fila=$result->fetch_object()) {
            echo "=====================================<br>";
            echo "Nombre: ".$fila->nombre."<br>";
            echo "Dni: ".$fila->dni."<br>";
            echo "Dorsal: ".$fila->dorsal."<br>";
            echo "Posicion: ".$fila->posicion."<br>";
            echo "Equipo: ".$fila->equipo."<br>";
            echo "Nº Goles: ".$fila->goles."<br>";
        }
        
    }
?>