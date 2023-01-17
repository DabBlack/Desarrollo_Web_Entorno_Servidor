<?php

class Atender {
    protected $dni_medico;
    protected $nss;
    protected $fecha;
    protected $hora;
    protected $consulta;
    protected $volante;
    
    function __construct($dni,$nss,$fecha,$hora,$consulta,$volante) {
        $this->dni_medico = $dni;
        $this->nss = $nss;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->consulta = $consulta;
        $this->volante = $volante;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name=$value;
    }
}

