<?php

    class Atender {
        private $dni_medico;
        private $nss;
        private $fecha;
        private $hora;
        private $consulta;
        private $volante;
        
        // Constructor
        public function __construct($dni_medico, $nss, $fecha, $hora, $consulta, $volante) {
            $this->dni_medico = $dni_medico;
            $this->nss = $nss;
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->consulta = $consulta;
            $this->volante = $volante;
        }

        // Getters and Setters
        public function getDni_medico() {
            return $this->dni_medico;
        }

        public function getNss() {
            return $this->nss;
        }

        public function getFecha() {
            return $this->fecha;
        }

        public function getHora() {
            return $this->hora;
        }

        public function getConsulta() {
            return $this->consulta;
        }

        public function getVolante() {
            return $this->volante;
        }

        public function setDni_medico($dni_medico): void {
            $this->dni_medico = $dni_medico;
        }

        public function setNss($nss): void {
            $this->nss = $nss;
        }

        public function setFecha($fecha): void {
            $this->fecha = $fecha;
        }

        public function setHora($hora): void {
            $this->hora = $hora;
        }

        public function setConsulta($consulta): void {
            $this->consulta = $consulta;
        }

        public function setVolante($volante): void {
            $this->volante = $volante;
        }
    }
?>
