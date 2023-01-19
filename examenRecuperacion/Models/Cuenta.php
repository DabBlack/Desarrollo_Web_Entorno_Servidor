<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Cuenta
 *
 * @author DWES
 */
class Cuenta {
    protected $iban;
    protected $saldo;
    protected $dni_cuenta;
    
    /**
     * 
     * @param type $iban
     * @param type $saldo
     * @param type $dni_cuenta
     */
    public function __construct($iban, $saldo, $dni_cuenta) {
        $this->iban = $iban;
        $this->saldo = $saldo;
        $this->dni_cuenta = $dni_cuenta;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
}

?>