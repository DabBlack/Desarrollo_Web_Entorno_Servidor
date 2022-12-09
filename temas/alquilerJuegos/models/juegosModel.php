<?php
    class Juegos{
        private $codigo;
        private $nombre_juego;
        private $nombre_consola;
        private $anno;
        private $precio;
        private $alquilado;
        private $imagen;
        
        public function __construct($codigo, $nombre_juego, $nombre_consola, $anno, $precio, $alquilado, $imagen) {
            $this->codigo = $codigo;
            $this->nombre_juego = $nombre_juego;
            $this->nombre_consola = $nombre_consola;
            $this->anno = $anno;
            $this->precio = $precio;
            $this->alquilado = $alquilado;
            $this->imagen = $imagen;
        }

        public function getCodigo() {
            return $this->codigo;
        }

        public function getNombre_juego() {
            return $this->nombre_juego;
        }

        public function getNombre_consola() {
            return $this->nombre_consola;
        }

        public function getAnno() {
            return $this->anno;
        }

        public function getPrecio() {
            return $this->precio;
        }

        public function getAlquilado() {
            return $this->alquilado;
        }

        public function getImagen() {
            return $this->imagen;
        }

        public function setCodigo($codigo): void {
            $this->codigo = $codigo;
        }

        public function setNombre_juego($nombre_juego): void {
            $this->nombre_juego = $nombre_juego;
        }

        public function setNombre_consola($nombre_consola): void {
            $this->nombre_consola = $nombre_consola;
        }

        public function setAnno($anno): void {
            $this->anno = $anno;
        }

        public function setPrecio($precio): void {
            $this->precio = $precio;
        }

        public function setAlquilado($alquilado): void {
            $this->alquilado = $alquilado;
        }

        public function setImagen($imagen): void {
            $this->imagen = $imagen;
        }

    }

?>

