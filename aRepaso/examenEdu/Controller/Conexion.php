<?php

class Conexion extends PDO {
        private $dsn = 'mysql:host=localhost;dbname=hospitales_comares;charset=utf8mb4';
        private $user = 'dwes';
        private $pass = 'abc123.';
        
        function __construct() {
            parent:: __construct($this->dsn, $this->user, $this->pass);
        }
}

