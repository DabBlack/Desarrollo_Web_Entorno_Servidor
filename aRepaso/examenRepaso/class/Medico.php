<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Medico
 *
 * @author DWES
 */
class Medico {
    protected $dni;
    protected $nombre;
    protected $especialidad;
    protected $nombre_hospital;
    
    /**
     * 
     * @param type $dni
     * @param type $nombre
     * @param type $especialidad
     * @param type $nombre_hospital
     */
    public function __construct($dni, $nombre, $especialidad, $nombre_hospital) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
        $this->nombre_hospital = $nombre_hospital;
    }

    // Getters y Setters
    
    public function getDni() {
        return $this->dni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }

    public function getNombre_hospital() {
        return $this->nombre_hospital;
    }

    public function setDni($dni): void {
        $this->dni = $dni;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setEspecialidad($especialidad): void {
        $this->especialidad = $especialidad;
    }

    public function setNombre_hospital($nombre_hospital): void {
        $this->nombre_hospital = $nombre_hospital;
    }

}
