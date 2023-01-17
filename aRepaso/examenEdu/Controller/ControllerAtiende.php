<?php

require_once 'Conexion.php';
include_once 'ControllerPaciente.php';

class ControllerAtiende {
    
    public static function crearCita() {
        try {
            $conex = new Conexion();
            if(is_uploaded_file($_FILES['volante']['tmp_name'])) {
                $fich =$_FILES['volante']['name'];
                $ruta="".$fich;
                move_uploaded_file($_FILES['volante']['tmp_name'], $fich);
                $result = $conex->exec("INSERT INTO atender (dni_medico,nss,fecha,hora,consulta,volante) values ('$_POST[medico]','$_POST[nss]','$_POST[fecha]','$_POST[hora]',$_POST[consulta],'$ruta')");
            }
            else {
                
                $result = $conex->exec("INSERT INTO atender (dni_medico,nss,fecha,hora,consulta) values ('$_POST[medico]','$_POST[nss]','$_POST[fecha]','$_POST[hora]',$_POST[consulta])");
            }
            
            if ($result) {
                ControllerPaciente::actualizarSaldo();
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR en la BD al crear Cita" . $ex->getMessage());
        }
    }
    
    public static function buscarCitasPorMedico() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT m.nombre, a.dni_medico, a.nss, a.fecha, a.hora, a.consulta, a.volante from medicos m, atender a WHERE m.dni=a.dni_medico and a.dni_medico='$_POST[dni]'");
            if ($result->rowCount()>0) {
                return $result;
            } else
                $result = false;
            unset($conex);
            return $result;
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR en la BD al crear Juego" . $ex->getMessage());
        }
    }

}
