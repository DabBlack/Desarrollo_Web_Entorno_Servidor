<?php
    class Hospital{
        private $nombre_H;
        private $direccion;
        private $telefono;
        private $usuario;
        private $clave;
        private $intentos;
        
        // Constructor
        public function __construct($nombre_H, $direccion, $telefono, $usuario, $clave, $intentos) {
            $this->nombre_H = $nombre_H;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->usuario = $usuario;
            $this->clave = $clave;
            $this->intentos = $intentos;
        }
        
        // Getters and Setters
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
?>