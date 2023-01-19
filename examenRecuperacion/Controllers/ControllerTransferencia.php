<?php

class ControllerTransferencia {

    public static function newTransferencia($iban_origen, $iban_destino, $fecha, $cantidad) {
        try {
            $conex = new Conexion();
            $conex->exec("INSERT INTO transferencias (iban_origen, iban_destino, fecha, cantidad) VALUES ('$iban_origen','$iban_destino', '$fecha', '$cantidad)");
         
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }
    
    public static function findTransferencias($iban) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM transferencias WHERE iban='$iban'");
            
            if ($result ->rowCount() > 0) {
                while ($transferencia = $result->fetchObject()) {
                    $t = new Cuenta($transferencia->iban_origen, $transferencia ->iban_destino, $transferencia-> fecha, $transferencia-> cantidad);
                    $transferencias[] = clone($t);
                }  
                return $transferencias;
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

?>
