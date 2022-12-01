<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mamifero
 *
 * @author DWES
 */
class Mamifero extends Animal {
    public $nombre;
    public $pelaje;
    
    // Getters and Setters
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getPelaje() {
        return $this->pelaje;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setPelaje($pelaje): void {
        $this->pelaje = $pelaje;
    }

    // Funciones
    
    public function amamantar(){
        echo 'amamantado';
    }
    
    public function parir(){
        echo 'pariendo';
    }
    
    public function mudar_pelaje(){
        echo 'mudando el pelaje';
    }
}
