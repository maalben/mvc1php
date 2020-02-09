<?php 

    require_once 'model/Tblpersonas_model.php';

    class Tblpersonas_controller{

        private $model_personas;

        public function __construct(){
            $this->model_personas = new Tblpersonas_model();
        }

        public function index(){
            $consulta = $this->model_personas->consultar();
            require_once 'view/tblpersonas_view.php';
        }

        public function nuevo(){
            require_once 'view/tblpersonas_nuevo.php';
        }

        public function guardar(){
            $data['nombre'] = $_POST["txtnombre"];
            $data['edad'] = $_POST["txtedad"];
            $this->model_personas->insertar($data);
            $this->index();
        }

        public function modificar(){
            require_once 'view/tblpersonas_modificar.php';
        }

        public function guardarCambios(){
            $data['id'] = $_POST["txtid"];
            $data['nombre'] = $_POST["txtnombre"];
            $data['edad'] = $_POST["txtedad"];
            $this->model_personas->actualizar($data);
            $this->index();
        }

        public function eliminar(){
            require_once 'view/tblpersonas_eliminar.php';
        }

        public function eliminarPersona(){
            $data['id'] = $_POST["txtid"];
            $this->model_personas->eliminar($data);
            $this->index();
        }

    }
?>