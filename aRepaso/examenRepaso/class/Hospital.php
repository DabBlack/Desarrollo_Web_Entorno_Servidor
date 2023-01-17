<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Hospital
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
    
    /**
     * 
     * @param type $nombre_H
     * @param type $direccion
     * @param type $telefono
     * @param type $usuario
     * @param type $clave
     * @param type $intentos
     */
    public function __construct($nombre_H, $direccion, $telefono, $usuario, $clave, $intentos) {
        $this->nombre_H = $nombre_H;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->intentos = $intentos;
    }
    
    // Setters y Getters
    
    public function getNombre_H() {
        return $this->nombre_H;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getIntentos() {
        return $this->intentos;
    }

    public function setNombre_H($nombre_H): void {
        $this->nombre_H = $nombre_H;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setClave($clave): void {
        $this->clave = $clave;
    }

    public function setIntentos($intentos): void {
        $this->intentos = $intentos;
    }


}
