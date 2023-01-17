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
class Paciente {
    
    protected $nss;
    protected $nombre;
    protected $fecha_nac;
    protected $domicilio;
    protected $telefono;
    protected $provincia;
    protected $pais;
    protected $saldo;
    
    public function __construct($nss,$nombre,$fecha_nac,$domicilio,$telefono,$provincia,$pais,$saldo,) {
        $this->nss = $nss;
        $this->nombre = $nombre;
        $this->fecha_nac = $fecha_nac;
        $this->domicilio = $domicilio;
        $this->telefono = $telefono;
        $this->provincia = $provincia;
        $this->pais = $pais;
        $this->saldo = $saldo;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
}
