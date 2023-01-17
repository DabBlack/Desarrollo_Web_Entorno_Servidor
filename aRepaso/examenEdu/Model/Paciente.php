<?php

class Paciente {
    protected $nss;
    protected $nombre;
    protected $fecha_nac;
    protected $domicilio;
    protected $telefono;
    protected $provincia;
    protected $pais;
    protected $saldo;
    
    function __construct($nss,$nombre,$fecha,$dom,$tel,$provincia,$pais,$saldo) {
        $this->nss = $nss;
        $this->nombre = $nombre;
        $this->fecha_nac =  $fecha;
        $this->domicilio = $dom;
        $this->telefono = $tel;
        $this->provincia = $provincia;
        $this->pais = $pais;
        $this->saldo = $saldo;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name=$value;
    }
}

