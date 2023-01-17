<?php

class Medico {
    protected $dni;
    protected $nombre;
    protected $especialidad;
    protected $nombre_hospital;
    
    function __construct($dni,$nombre,$especialidad,$nomH) {
        $this->dni =  $dni;
        $this->nombre =  $nombre;
        $this->especialidad =  $especialidad;
        $this->nombre_hospital = $nomH;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name=$value;
    }
}

