<?php

require_once "conexion.php";
require_once "entidad/entidadAcceso.php";

class modeloAcceso{
    
    function __construct(){}
    
    function ingresar($usuario,$clave){
        $objeto = new cmysql;
        $cont = 0;
        $conn = $objeto -> conectar();        
        try{          
            $query = "select * from hs_usuario where hs_usuario.clave = '".$clave."' and hs_usuario.usuario = '".$usuario."'";
            $queryDatos = "select * from hs_dato where hs_dato.correo = '".$usuario."'";
            foreach ($conn->query($query) as $row) 
            {                
                $cont = 1;
            }
            
            if($cont == 1){
                
                foreach ($conn->query($queryDatos) as $rowDato) 
                {
                    $_SESSION['nombre'] = $rowDato['nombre'];                    
                }
                
                return 1;
            }
        }
        catch (PDOException $e) 
        { 
            echo "Error al Modificar: " . $e->getMessage(); 
            return 0;
        }     

    }
    
}

?>