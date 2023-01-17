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
class Medico {
    
    protected $dni;
    protected $nombre;
    protected $especialidad;
    protected $nombre_hospital;
    
    
    public function __construct($dni,$nombre,$especialidad,$nombre_hospital) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
        $this->nombre_hospital = $nombre_hospital;
        
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
}
