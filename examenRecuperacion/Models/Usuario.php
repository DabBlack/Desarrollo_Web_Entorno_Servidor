<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author DWES
 */
class Usuario {
    protected $nombre;
    protected $direccion;
    protected $telefono;
    protected $dni;
    protected $clave;
    
    /**
     * 
     * @param type $nombre
     * @param type $direccion
     * @param type $telefono
     * @param type $dni
     * @param type $clave
     */
    public function __construct($nombre, $direccion, $telefono, $dni, $clave) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->dni = $dni;
        $this->clave = $clave;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
}

?>