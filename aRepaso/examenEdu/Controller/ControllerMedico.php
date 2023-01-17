<?php

require_once 'Conexion.php';
require_once './Model/Medico.php';

class ControllerMedico {

    public static function buscarMedicosPorHospital() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * from medicos WHERE nombre_hospital='" . $_SESSION['usuario']->nombre_H . "'");
            if ($result->rowCount() > 0) {
                while ($fila = $result->fetchObject()) {
                    $m = new Medico($fila->dni, $fila->nombre, $fila->especialidad, $fila->nombre_hospital);
                    $medicos[] = clone($m);
                }
                return $medicos;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die($ex->getMessage() + " - Error Al Buscar Medicos");
        }
    }
    
}
