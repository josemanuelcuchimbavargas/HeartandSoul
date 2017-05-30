$(document).ready(function () {                 

   $(document).ready(function () {                              
        $("#amigo").click(function(){
            var contenedorPrincipal;
            contenedorPrincipal = '<div  style="position:fixed;top:120px;z-index:2000;" class="hex container-fluid"><div class="row"><center><div class="col-lg-12"><div class="form-group" style="background-color:rgba(0,0,0,0.1); width:225px;"><img  src="../core/img/user.png"  width="40px" style="margin-top:10px; margin-left:-50px;"><i style="font-size:20px;">Manuel Vargas</i><br/><i id="close" style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></div><div style="background:white; width:225px; height:260px;"></div><div style="background:purple; width:225px; height:40px; margin-top:-30px;"><div class="form-group has-success label-floating"><label for="f1" class="control-label" style="color:black;">Escribir mensaje</label><input type="text" class="form-control"  style="color:white;" id="f1"></div></div></div></center></div></div>';       
            $("#chat").html(contenedorPrincipal); 
            $("#chat").hide(); 
            $('#chat').show(800);
             $("#close").click(function(){  	
                $('#chat').hide(800);
            });
        });
    });   
});
      


