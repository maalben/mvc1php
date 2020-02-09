<?php 

    class Conexion{

        private $usuario;
        private $password;
        private $servidor;
        private $basededatos;

        public function __construct(){
            $this->usuario = "root";
            $this->password = "111";
            $this->servidor = "localhost";
            $this->basededatos = "dbpersona";
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getServidor(){
            return $this->servidor;
        }

        public function getBasededatos(){
            return $this->basededatos;
        }

        public function getConexion(){
            $conexion = new mysqli("localhost", "root", "111", "dbpersona");
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }

    }
?>