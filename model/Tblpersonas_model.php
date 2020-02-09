<?php 

    class Tblpersonas_model{
        
        private $bd;
        private $tblpersonas;

        public function __construct(){
            $this->bd = Conexion::getConexion();
            $this->tblpersonas = array();
        }

        public function consultar(){
            $consulta = $this->bd->query("SELECT * FROM tblpersonas");
            while($fila = $consulta->fetch_assoc()){
                $this->tblpersonas[] = $fila;
            }
            return $this->tblpersonas;
        }

        public function insertar($data){
            $nombre = $data['nombre'];
            $edad = $data['edad'];
            $consulta = "INSERT INTO tblpersonas (nombre, edad) VALUES ('$nombre', $edad)";
            mysqli_query($this->bd, $consulta) or die ("Error en el guardado.");
        }

        public function actualizar($data){
            $id = $data['id'];
            $nombre = $data['nombre'];
            $edad = $data['edad'];
            $consulta = "UPDATE tblpersonas SET nombre = '$nombre', edad = $edad WHERE id = $id";
            mysqli_query($this->bd, $consulta) or die ("Error en el guardado.");
        }

        public function eliminar($data){
            $id = $data['id'];
            $consulta = "DELETE FROM tblpersonas WHERE id = $id";
            mysqli_query($this->bd, $consulta) or die ("Error en el guardado.");
        }
    }


?>