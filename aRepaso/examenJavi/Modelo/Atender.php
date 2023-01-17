<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Paciente
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
    
    
    public function __construct($dni_medico,$nss,$fecha,$hora,$consulta,$volante) {
        $this->dni_medico = $dni_medico;
        $this->nss = $nss;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->consulta = $consulta;
        $this->volante = $volante;

    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
}
