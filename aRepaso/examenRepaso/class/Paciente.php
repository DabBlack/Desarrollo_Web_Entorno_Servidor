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
    
    /**
     * 
     * @param type $nss
     * @param type $nombre
     * @param type $fecha_nac
     * @param type $domicilio
     * @param type $telefono
     * @param type $provincia
     * @param type $pais
     * @param type $saldo
     */
    public function __construct($nss, $nombre, $fecha_nac, $domicilio, $telefono, $provincia, $pais, $saldo) {
        $this->nss = $nss;
        $this->nombre = $nombre;
        $this->fecha_nac = $fecha_nac;
        $this->domicilio = $domicilio;
        $this->telefono = $telefono;
        $this->provincia = $provincia;
        $this->pais = $pais;
        $this->saldo = $saldo;
    }

    public function getNss() {
        return $this->nss;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFecha_nac() {
        return $this->fecha_nac;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setNss($nss): void {
        $this->nss = $nss;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setFecha_nac($fecha_nac): void {
        $this->fecha_nac = $fecha_nac;
    }

    public function setDomicilio($domicilio): void {
        $this->domicilio = $domicilio;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setProvincia($provincia): void {
        $this->provincia = $provincia;
    }

    public function setPais($pais): void {
        $this->pais = $pais;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

}
