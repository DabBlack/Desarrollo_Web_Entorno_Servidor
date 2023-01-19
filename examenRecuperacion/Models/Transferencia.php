<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Transferencia
 *
 * @author DWES
 */
class Transferencia {
    protected $iban_origen;
    protected $iban_destino;
    protected $fecha;
    protected $cantidad;
    
    /**
     * 
     * @param type $iban_origen
     * @param type $iban_destino
     * @param type $fecha
     * @param type $cantidad
     */
    public function __construct($iban_origen, $iban_destino, $fecha, $cantidad) {
        $this->iban_origen = $iban_origen;
        $this->iban_destino = $iban_destino;
        $this->fecha = $fecha;
        $this->cantidad = $cantidad;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
}

?>