<?php

class Hospital {
    protected $nombre_H;
    protected $direccion;
    protected $telefono;
    protected $usuario;
    protected $clave;
    protected $intentos;
    
    function __construct($nombre,$dir,$tel,$usu,$clave,$int) {
        $this->nombre_H = $nombre;
        $this->direccion = $dir;
        $this->telefono = $tel;
        $this->usuario = $usu;
        $this->clave = $clave;
        $this->intentos = $int;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name=$value;
    }
}

