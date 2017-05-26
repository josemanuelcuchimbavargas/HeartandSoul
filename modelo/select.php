<?php

require_once "conexion.php";

$objeto = new cmysql;
$conn = $objeto -> conectar();

try{

$query = "select * from hs_usuario";
foreach ($conn->query($query) as $row) 
{
    print $row['usuario'] . "\t";
    print $row['clave'] . "\t";    
}
}
catch (PDOException $e) 
{ 
	echo "Error al Modificar: " . $e->getMessage(); 
}     
    
?>

