<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Animal
 *
 * @author DWES
 */
class Animal {
    public $raza;
    public $peso;
    public $color;
    public $sexo;
    public $edad;
    
    // Getters and Setters
    
    public function getRaza() {
        return $this->raza;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setRaza($raza): void {
        $this->raza = $raza;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setColor($color): void {
        $this->color = $color;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }

    // Métodos
    
    public function moverse() {
        echo 'moviéndose';
    }
    
    public function alimentarse(){
        echo 'alimentándose';
    }
    
    public function dormir(){
        echo 'durmiendo';
    }
}
