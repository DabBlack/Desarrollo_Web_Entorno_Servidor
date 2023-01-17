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
class Hospital {
    
    protected $nombre_H;
    protected $direccion;
    protected $telefono;
    protected $usuario;
    protected $clave;
    protected $intentos;
    
    public function __construct($nombre_H,$direccion,$telefono,$usuario,$clave,$intentos) {
        $this->nombre_H = $nombre_H;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->intentos = $intentos;

    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
}
