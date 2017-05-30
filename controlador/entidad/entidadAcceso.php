<?php


class entidadAcceso{
    
    private $usuario;
    private $clave;
    
    function __construct(){}
    
    function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    function getUsuario(){
        return $this->usuario;
    }
    
    function setClave($clave){
        $this->clave = $clave;
        
    }
    
    function getClave(){
        return $this->clave;
    }
    
}



?>