<?php session_start();


 if(isset($_SESSION['nombre'])){   
     echo json_encode(1);
 }
else
{
    echo json_encode(2);
}



?>