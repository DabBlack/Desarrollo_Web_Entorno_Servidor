<?php

require_once 'Conexion.php';

class ControllerPaciente {

    public static function buscarPaciente() {
        try {
            unset($_SESSION['paciente']);
            $conex = new Conexion();
            $result = $conex->query("SELECT * from pacientes WHERE nss=$_POST[nss]");
            if($result->rowCount()>0) {
                $fila = $result->fetchObject();
                $_SESSION['paciente'] = $fila;
                return true;
            }
            else {
                return false;
            }
        } catch (PDOException $ex) {
            die($ex->getMessage() + " - Error Al Buscar Paciente");
        }
    }
    
    public static function actualizarIntentos($intentos) {
        try {
            $conex = new Conexion();
            $result = $conex->exec("UPDATE hospital SET intentos=$intentos WHERE usuario='$_POST[user]'");
            if ($result != 0) {
                return true;
            } else return false;
        } catch (PDOException $ex) {
            die($ex->getMessage() . " - Error Al Actualizar intentos Profesor");
        }
    }
    
     public static function actualizarSaldo() {
        try {
            $conex = new Conexion();
            $saldo = $_POST['saldo']-50;
            $result = $conex->exec("UPDATE pacientes SET saldo=$saldo WHERE nss='$_POST[nss]'");
            if ($result != 0) {
                return true;
            } else return false;
        } catch (PDOException $ex) {
            die($ex->getMessage() . " - Error Al Actualizar intentos Profesor");
        }
    }
    
    

}
