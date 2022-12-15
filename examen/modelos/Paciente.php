<?php
 
    class Paciente {
        private $nss;
        private $nombre;
        private $fecha_nac;
        private $domicilio;
        private $telefono;
        private $provincia;
        private $pais;
        private $saldo;
        
        // Constuctor
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
        
        // Getters and Setters
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
?>