<?php

require_once 'Conexion.php';
require_once './Modelo/Paciente.php';
require_once './Modelo/Medico.php';
require_once './Modelo/Hospital.php';

class MedicoController {

    public static function findAllMedicosFromHospital($hospital) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM medicos WHERE nombre_hospital='$hospital'");
            
            if ($result ->rowCount() > 0) {
                while ($medico = $result->fetchObject()) {
                    $m = new Medico($medico->dni, $medico ->nombre, $medico-> especialidad, $medico->nombre_hospital);
                    $medicos[] = clone($m);
                    
                    
                }  
                return $medicos;
            }
            else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            echo $ex->getMessage();
        }
    }
    public static function findCitasByMedico($dniMedico) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT p.nss, p.nombre, p.telefono , a.fecha , a.hora, a.consulta , a.volante FROM pacientes p, medicos m, atender a WHERE p.nss=a.nss and m.dni=a.dni_medico and m.nombre='$dniMedico'");
            if ($result->rowCount() > 0) {
                return $result;
            } else
                $result = false;
            unset($conex);
            return $result;
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR en la BD." . $ex->getMessage());
        }
    }
    public static function obtenerJuegosAlquilados() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT a.DNI_cliente, p.Nombre, a.Cod_juego, j.Nombre_juego, j.Nombre_consola, j.Anno, j.Precio, j.Imagen, a.Fecha_alquiler FROM alquiler a, cliente p, juegos j where a.Fecha_devol IS NULL and p.DNI=a.DNI_cliente and j.Codigo=a.Cod_juego");
            if ($result->rowCount() > 0) {
                return $result;
            } else
                $result = false;
            unset($conex);
            return $result;
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR en la BD." . $ex->getMessage());
        }
    }

    public static function obtenerJuegosNoAlquilados() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM juegos WHERE Alguilado!='SI'");
            if ($result->rowCount() > 0) {
                while ($reg = $result->fetchObject()) {
                    $j = new Juegos($reg->Codigo, $reg->Nombre_juego, $reg->Nombre_consola, $reg->Anno, $reg->Precio, $reg->Alguilado, $reg->Imagen, $reg->descripcion);
                    $juegos[] = clone($j);
                }
            } else
                $juegos = false;
            unset($conex);
            return $juegos;
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR en la BD al obtener los Juegos No Alquilados." . $ex->getMessage());
        }
    }

    public static function obtenerJuegosPorPersona() {
        try {
            $conex = new Conexion();
            $dni = $_SESSION['usuario']->DNI;
            $result = $conex->query("SELECT j.Nombre_juego, j.Imagen, j.Alguilado, j.Nombre_consola, j.Anno, j.Precio, a.Cod_juego, a.DNI_cliente from juegos j, alquiler a, cliente c WHERE a.DNI_cliente=c.DNI and a.Cod_juego=j.Codigo and c.DNI='$dni' and a.Fecha_devol IS NULL");
            if ($result->rowCount() > 0) {
                return $result;
            } else
                $result = false;
            unset($conex);
            return $result;
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR en la BD al obtener los Juegos No Alquilados." . $ex->getMessage());
        }
    }

    public static function devolverJuego() {
        try {
            $conex = new Conexion();
            $fecha = new DateTime();
            $fecha1 = date_format($fecha, "Y-m-d");
            $result = $conex->exec("UPDATE alquiler SET Fecha_devol='$fecha1' WHERE Fecha_devol IS NULL and Cod_juego='$_POST[cod]'");
            if ($result) {
                $result2 = $conex->exec("UPDATE juegos SET Alguilado='NO' WHERE Codigo='$_POST[cod]'");
            }
        } catch (PDOException $ex) {
            echo "<a href=index.php>Ir a Inicio</a>";
            die("ERROR al Devolver P." . $ex->getMessage());
        }
    }

}
