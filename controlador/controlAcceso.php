<?php session_start();

require_once "entidad/entidadAcceso.php";
require_once "./../modelo/modeloAcceso.php";


if(isset($_POST["accion"])){
    
    if($_POST["accion"] == "cerrarSesion"){
         session_destroy();
         echo json_encode(1);
         exit;
    }
    
    switch($_POST["accion"])
    {
        case "acceso":                 
                //MODELO
                 if(!isset($_SESSION['nombre'])){                     
                        $instanciaEntidad = new entidadAcceso;
                        $instanciaModelo = new modeloAcceso;
                        $instanciaEntidad->setUsuario($_POST["usuario"]);
                        $instanciaEntidad->setClave($_POST["clave"]);                        
                        $respuesta = $instanciaModelo->ingresar( $instanciaEntidad->getUsuario(), $instanciaEntidad->getClave());
                        echo json_encode($respuesta);
                        exit;                       
                  }else{                       
                        echo json_encode(2);      
                  }            
            break;
        case "registro":
            break;
    }
        
    
}

?>
