<?php

require_once 'Conexion.php';
require_once './Models/Usuario.php';


class ControllerUsuario {

    public static function findUsuario($dni, $clave) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM usuarios WHERE DNI='$dni' and clave='$clave'");
            
            if ($result ->rowCount() > 0) {
                while ($usuario = $result->fetchObject()) {
                    $u = new Usuario($usuario->Nombre, $usuario ->Direccion, $usuario-> Telefono, $usuario->DNI, $usuario->clave);
                }
     
                return $u;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }
}
  