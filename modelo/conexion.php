<?php

class conexion
{
    
    private $serverName;
    private $connectionOptions;
    private $conn;
    private $mensaje;
    private $retorno;
    
    
        /*-- PREPARAR CONEXION --*/
        function OpenConnection()  
        {  
            try  
            {  
                $this->serverName = "DESKTOP-8BR5T06\JOSEMANUEL";                         
                $this->connectionOptions = array("Database"=>"HeartandSoul",  
                    "Uid"=>"", "PWD"=>"");                 
                $this->conn = sqlsrv_connect($this->serverName, $this->connectionOptions);  

                if($this->conn) {            
                    echo "Conexión establecida.<br />";
                }else{
                     echo "Conexión no se pudo establecer.<br />";
                     die( print_r( sqlsrv_errors(), true));
                }

                return $this->conn;
            }  
            catch(Exception $e)  
            {  
                return $this->mensaje = "Advertencia : " +  $e;  
            }  
        }  



        /*-- EJECUTAR CONSULTA --*/
    
        function ejecutar($consulta)
        {
            try
            {
                $this->retorno = sqlsrv_query($this->conn,$consulta);
                if($this->retorno === false)
                {
                    return false;
                }
                else
                {
                    return $this->retorno;   
                }    
            }
            catch(Exception $e)  
                {  
                    return $this->mensaje = "Se detecto fallo : " + $e;  
                }  
            
        }
    
    

        /*-- NUMERO DE FILAS CON ARRAY ASOCIATIVO --*/

        function filasAsociativo($consultaEjecutada)
        {
            return sqlsrv_fetch_array($consultaEjecutada,SQLSRV_FETCH_ASSOC);
        }

        /*-- NUMERO DE FILAS CON ARRAY NUMERICO --*/

        function filasNumerico($consultaEjecutada)
        {
            return sqlsrv_fetch_array($consultaEjecutada,SQLSRV_FETCH_NUMERIC);
        }

        /*-- LIBERAR MEMORIA DE CONSULTAS --*/

        function liberarMemoria($consulta)
        {
            sqlsrv_free_stmt($consulta);
        }
        
        /*-- CERRAR CONEXION --*/

        function cerrarConexion()
        {
            sqlsrv_close($this->conn); 
        }
        
}

$abrirConexion = new conexion;
$conn = $abrirConexion->OpenConnection();


?>