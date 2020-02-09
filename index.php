<?php 

    require_once 'conexion/Conexion.php';
    require_once 'controller/Tblpersonas_controller.php';

    $controller = new Tblpersonas_controller();

    if(!empty($_REQUEST['accion'])){

        $metodo = $_REQUEST['accion'];

        if(method_exists($controller, $metodo)){
            $controller->$metodo();
        }else{
            $controller->index();
        }

    }else{

        $controller->index();
        
    }

    

?>