<?php

require_once 'Conexion.php';

class ControllerHospital {

    public static function iniciarSesion() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * from hospital WHERE usuario='$_POST[user]'");
            if ($result->rowCount() > 0) {
                $fila = $result->fetchObject();
                if ($_POST['pass'] == $fila->clave) {
                    if ($fila->intentos >= 3) {
                        return $fila->intentos;
                    } else {
                        $_SESSION['usuario'] = $fila;
                        self::reiniciarIntentos();
                        return 0;
                    }
                } else {
                    $intentos = $fila->intentos + 1;
                    self::actualizarIntentos($intentos);
                    return $intentos;
                }
            }
        } catch (PDOException $ex) {
            die($ex->getMessage() + " - Error Al Iniciar Sesion");
        }
    }

    public static function actualizarIntentos($intentos) {
        try {
            $conex = new Conexion();
            $result = $conex->exec("UPDATE hospital SET intentos=$intentos WHERE usuario='$_POST[user]'");
            if ($result != 0) {
                return true;
            } else
                return false;
        } catch (PDOException $ex) {
            die($ex->getMessage() . " - Error Al Actualizar intentos Profesor");
        }
    }

    public static function reiniciarIntentos() {
        try {
            $conex = new Conexion();
            $result = $conex->exec("UPDATE hospital SET intentos=0 WHERE usuario='$_POST[user]'");
            if ($result != 0) {
                return true;
            } return false;
        } catch (PDOException $ex) {
            die($ex->getMessage() . " - Error Al Reiniciar intentos Profesor");
        }
    }

}
