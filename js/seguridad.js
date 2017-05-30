
    function validar(){    
         $.ajax({
             url:'./controlador/controlSeguridad.php', 
             type:'POST', 
             dataType:'json', 
             data:{"accion":"1"} 
             }).done(function(data){
              if(data == 1){                        
              window.location.href = "./vista/frmUsuario.php";                      
              }
          });	    
    }


 
      


