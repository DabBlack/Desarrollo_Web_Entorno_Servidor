<?php

    class Medico {
        private $dni;
        private $nombre;
        private $especialidad;
        private $nombre_hospital;
        
        // Constuctor
        public function __construct($dni, $nombre, $especialidad, $nombre_hospital) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->especialidad = $especialidad;
            $this->nombre_hospital = $nombre_hospital;
        }
        
        // Getters and Setters
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
?>