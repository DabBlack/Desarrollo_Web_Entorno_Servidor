<?php

require_once './Models/Cuenta.php';

class ControllerCuenta {

    public static function findCuentas($dni) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM cuentas WHERE dni_cuenta='$dni'");

            if ($result->rowCount() > 0) {
                while ($cuenta = $result->fetchObject()) {
                    $c = new Cuenta($cuenta->iban, $cuenta->saldo, $cuenta->dni_cuenta);
                    $cuentas[] = clone($c);
                }
                return $cuentas;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }

    
    public static function findAllCuentas() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM cuentas");
            
            if ($result ->rowCount() > 0) {
                while ($cuenta = $result->fetchObject()) {
                    $c = new Cuenta($cuenta->iban, $cuenta ->saldo, $cuenta-> dni_cuenta);
                    $cuentas[] = clone($c);
                    
                    
                }  
                return $cuentas;
            }
            else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }
}
