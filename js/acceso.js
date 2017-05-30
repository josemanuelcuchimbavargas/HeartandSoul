    $(document).ready(function () {                              
        $("#iniciar").click(function(){ 
                var accion,datos,usuario,clave;
                usuario = $("#usuario").val();
                clave = $("#contrasena").val();
                accion = "acceso"; 	
                datos = {"usuario":usuario,"clave":clave,"accion":accion}; 
                $.ajax({
                    url:'./controlador/controlAcceso.php', 
                    type:'POST', 
                    dataType:'json', 
                    data:datos 
                }).done(function(data){
                    if(data == 1){
                        data = "Ingresando";
                        window.location.href = "./vista/frmUsuario.php";
                        $("#resultado").html(data);
                       }else if(data == 2)
                          {
                             data = "./vista/frmChat.php";                            
                             window.location.href = data;  
                           }
                        else if(data != 1 && data != 2){
                            data = "Credenciales incorrectas";                            
                            $("#resultado").html(data);
                        }
                   // window.stop();
                });	                
            });
        
        
            $("#cerrarSesion").click(function(){
              var accion = "cerrarSesion";
                var datos = {"accion":accion};
               $.ajax({
                    url:'../controlador/controlAcceso.php', 
                    type:'POST', 
                    dataType:'json', 
                    data:datos 
                }).done(function(data){
                    if(data == 1){                        
                        window.location.href = "../index.php";                        
                       }
                   // window.stop();
                });	
            });
        });
 
      


