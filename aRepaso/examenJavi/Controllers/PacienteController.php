<?php

require_once 'Conexion.php';
require_once './Modelo/Paciente.php';

class PacienteController {

    public static function findPaciente($nss) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM pacientes WHERE nss='$nss'");
            
            if ($result ->rowCount() > 0) {
                while ($paciente = $result->fetchObject()) {
                    $p = new Paciente($paciente->nss, $paciente ->nombre, $paciente-> fecha_nac, $paciente->domicilio, $paciente->telefono, $paciente -> provincia, $paciente->pais , $paciente->saldo);
                }
                
                
                return $p;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }
    
    public static function reducirSaldo($nss) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM pacientes WHERE nss='$nss'");
            $nuevoSaldo;
            while ($paciente = $result->fetchObject()) {
                $nuevoSaldo = $paciente->saldo - 50;
            }
            
            
            $conex->exec("UPDATE pacientes SET saldo='$nuevoSaldo' where nss='$nss'");
            
           
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }

    

}
