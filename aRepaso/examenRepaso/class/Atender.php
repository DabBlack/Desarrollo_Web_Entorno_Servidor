<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Atender
 *
 * @author DWES
 */
class Atender {
    protected $dni_medico;
    protected $nss;
    protected $fecha;
    protected $hora;
    protected $consulta;
    protected $volante;
    
    /**
     * 
     * @param type $dni_medico
     * @param type $nss
     * @param type $fecha
     * @param type $hora
     * @param type $consulta
     * @param type $volante
     */
    public function __construct($dni_medico, $nss, $fecha, $hora, $consulta, $volante) {
        $this->dni_medico = $dni_medico;
        $this->nss = $nss;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->consulta = $consulta;
        $this->volante = $volante;
    }
    
    // Getters y Setters
    
    public function getDni_medico() {
        return $this->dni_medico;
    }

    public function getNss() {
        return $this->nss;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getConsulta() {
        return $this->consulta;
    }

    public function getVolante() {
        return $this->volante;
    }

    public function setDni_medico($dni_medico): void {
        $this->dni_medico = $dni_medico;
    }

    public function setNss($nss): void {
        $this->nss = $nss;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function setHora($hora): void {
        $this->hora = $hora;
    }

    public function setConsulta($consulta): void {
        $this->consulta = $consulta;
    }

    public function setVolante($volante): void {
        $this->volante = $volante;
    }

}
