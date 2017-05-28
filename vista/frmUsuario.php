<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <link rel="icon" type="image/png" href="core/img/favicon.png" />
    <head>
        <title>HeartandSoul</title>
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../core/libreria/bootstrap/css/bootstrap.css">           
        <link rel="stylesheet" type="text/css" href="../core/libreria/bootstrap/css/bootstrap-theme.min.css">           
        
        <link rel="stylesheet" type="text/css" href="../core/libreria/desing/css/bootstrap-material-design.css">  
        <link rel="stylesheet" type="text/css" href="../core/libreria/desing/css/ripples.min.css"> 
        <link rel="stylesheet" type="text/css" href="../core/fonts/icofont/css/icofont.css">
        <link rel="stylesheet" type="text/css" href="../core/css/main.css">                 
        <style type="text/css">
	

.comments-container {
    margin: 60px auto 15px;
    width: 768px;
}
 
.comments-container h1 {
    font-size: 36px;
    color: #283035;
    font-weight: 400;
}
 
.comments-container h1 a {
    font-size: 18px;
    font-weight: 700;
}
 
.comments-list {
    margin-top: 30px;
    position: relative;
}
 
/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
    content: '';
    width: 2px;
    height: 100%;
    background: #c7cacb;
    position: absolute;
    left: 32px;
    top: 0;
}
 
.comments-list:after {
    content: '';
    position: absolute;
    background: #c7cacb;
    bottom: 0;
    left: 27px;
    width: 7px;
    height: 7px;
    border: 3px solid #dee1e3;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}
 
.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
    content: '';
    width: 60px;
    height: 2px;
    background: #c7cacb;
    position: absolute;
    top: 25px;
    left: -55px;
}
 
 
.comments-list li {
    margin-bottom: 15px;
    display: block;
    position: relative;
}
 
.comments-list li:after {
    content: '';
    display: block;
    clear: both;
    height: 0;
    width: 0;
}
 
.reply-list {
    padding-left: 88px;
    clear: both;
    margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
    width: 65px;
    height: 65px;
    position: relative;
    z-index: 99;
    float: left;
    border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    overflow: hidden;
}
 
.comments-list .comment-avatar img {
    width: 100%;
    height: 100%;
}
 
.reply-list .comment-avatar {
    width: 50px;
    height: 50px;
}
 
.comment-main-level:after {
    content: '';
    width: 0;
    height: 0;
    display: block;
    clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
    width: 680px;
    float: right;
    position: relative;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}
 
.comments-list .comment-box:before, .comments-list .comment-box:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    display: block;
    border-width: 10px 12px 10px 0;
    border-style: solid;
    border-color: transparent #FCFCFC;
    top: 8px;
    left: -11px;
}
 
.comments-list .comment-box:before {
    border-width: 11px 13px 11px 0;
    border-color: transparent rgba(0,0,0,0.05);
    left: -12px;
}
 
.reply-list .comment-box {
    width: 610px;
}
.comment-box .comment-head {
    background: #FCFCFC;
    padding: 10px 12px;
    border-bottom: 1px solid #E5E5E5;
    overflow: hidden;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}
 
.comment-box .comment-head i {
    float: right;
    margin-left: 14px;
    position: relative;
    top: 2px;
    color: #A6A6A6;
    cursor: pointer;
    -webkit-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
}
 
.comment-box .comment-head i:hover {
    color: #03658c;
}
 
.comment-box .comment-name {
    color: #283035;
    font-size: 14px;
    font-weight: 700;
    float: left;
    margin-right: 10px;
}
 
.comment-box .comment-name a {
    color: #283035;
}
 
.comment-box .comment-head span {
    float: left;
    color: #999;
    font-size: 13px;
    position: relative;
    top: 1px;
}
 
.comment-box .comment-content {
    background: #FFF;
    padding: 12px;
    font-size: 15px;
    color: #595959;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}
 
.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
    content: 'autor';
    background: #03658c;
    color: #FFF;
    font-size: 12px;
    padding: 3px 5px;
    font-weight: 700;
    margin-left: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}


@media only screen and (max-width: 766px) {
    .comments-container {
        width: 480px;
    }
 
    .comments-list .comment-box {
        width: 390px;
    }
 
    .reply-list .comment-box {
        width: 320px;
    }
}

</style>
    </head>     
<body onload="myFunction()">   
<header>          
<div  class="navbar navbar-info">
  <div  class="container-fluid">
    <div  class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-material-light-blue-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
       <i class="navbar-brand">Carlos Garcia</i><img class="navbar-brand" href="javascript:void(0)" src="../core/img/user.png">  
    </div>    
    <div  class="navbar-collapse  navbar-material-light-blue-collapse">                            
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control col-sm-8" placeholder="Buscar">
        </div>
      </form>     
    </div>
  </div>
</div>
</header>

<div class="container-fluid">       
<div class="row">
    <div class="col-lg-12">
        <div class="span11" style="overflow: auto">
            <div class="row-fluid">
        <a id="amigo" name="amigo" style="cursor:pointer;" ><div class="circle col-lg-3"></div></a>             
    </div>
        </div>             
    </div>
</div>
  <div class="row">
    <div id="chat" class="col-sm-2 hidden-md-up" style="background-color:rgba(0,0,0,0.1);">
     <!--Bloque inicial--->          
    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#simple-dialog">Open dialog</button>-->    

    </div>     
      <!--Modals-->
<div id="simple-dialog" class="modal fade" tabindex="-1">
  <div class="modal-dialog">    
      <div class="modal-body">
       <div class="container-fluid">       
            <div class="row">
                <center>
                    <div class="col-lg-12">
                        <div class="form-group" style="background:#FFB22C; width:300px;">                     
                            <img  src="../core/img/user.png"  width="40px" style="margin-top:10px; margin-left:-100px;">
                            <i style="font-size:20px;">Manuel Vargas</i>
                        </div>
                        <div style="background:white; width:300px; height:260px;">                  
                        </div>
                        <div style="background:purple; width:300px; height:40px; margin-top:-30px;">
                           <div class="form-group has-success label-floating">                       
                                <label for="f1" class="control-label" style="color:white;">Escribir mensaje</label>
                                <input type="text" class="form-control"  style="color:white;" id="f1">                     
                          </div>
                        </div>
                    </div>  
                </center>
            </div>    
      </div>
    </div>
  </div>
</div>
    <div class="col-sm-8" style="background-color:rgba(0,0,0,0.1);  overflow-y:hidden; ">     	
     		<!--Bloque medio-->        
        <div class="input-group">
      <span class="input-group-addon">
        <div class="circle col-lg-3"></div>
               

<br/>

     </span>
     
      <input id="msg" type="text" class="form-control" name="#" placeholder="Actualiza tu estado">
          <span class="input-group-btn">

              <span class="btn" type="button">    

                     <i class="fa fa-check  fa-2x" aria-hidden="true"></i>
                     <i class="fa fa-file-video-o  fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-file-image-o  fa-2x" aria-hidden="true"></i>
               </span>

          </span>


</div>
        <div id="noticias">
       

        </div>
            
    </div>            

    <div class="col-sm-2 hidden-md-up" id="populares ">            
        <article id="contact2" style="background:yellow;">
            
         </article>			
        <article id="contact" style="background-color:rgba(0,0,0,0.1)">
                  <article id="usuarios_populares">
              <!--bloque final-->
  
  <table class="table">
  <thead> Usuarios Mas populares</thead>
    <thead>
      <tr>
        <th>Puesto</th>
        <th>Nombre</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Sebastian Hernandez</td>
      </tr>      
      <tr>
        <td>2</td>
        <td>Manuel Vargas</td>
      </tr>
      <tr >
        <td>3</td>
        <td>Esperanza Gomes</td>
      </tr>
      <tr>        
        <td>4</td>
        <td>Toro Max</td>
      </tr>
      <tr>
        <td>5</td>
        <td>James Rodriguez</td>
      </tr>
      <tr >
        <td>6</td>
        <td>Joan Hernandez</td>
      </tr>

      <tr>
        <td>7</td>
        <td>Sebastian Hernandez</td>
      </tr>      
      <tr>
        <td>8</td>
        <td>Manuel Vargas</td>
      </tr>
      <tr >
        <td>9</td>
        <td>Esperanza Gomes</td>
      </tr>
      <tr>        
        <td>10</td>
        <td>Toro Max</td>
      </tr>
      <tr>
        <td>11</td>
        <td>James Rodriguez</td>
      </tr>
      <tr >
        <td>12</td>
        <td>Joan Hernandez</td>
      </tr>

      <tr>
        <td>13</td>
        <td>Sebastian Hernandez</td>
      </tr>      
      <tr>
        <td>14</td>
        <td>Manuel Vargas</td>
      </tr>
      <tr >
        <td>15</td>
        <td>Esperanza Gomes</td>
      </tr>
      <tr>        
        <td>16</td>
        <td>Toro Max</td>
      </tr>
      <tr>
        <td>17</td>
        <td>James Rodriguez</td>
      </tr>
      <tr >
        <td>18</td>
        <td>Joan Hernandez</td>
      </tr>

      <tr>
        <td>19</td>
        <td>Sebastian Hernandez</td>
      </tr>      
      <tr>
        <td>20</td>
        <td>Manuel Vargas</td>
      </tr>
      <tr >
        
    </tbody>
  </table>
         </article>	
         </article>			
    </div>
      
</div>
</div>

<footer id="footer">
                              
            <p class="copyright" style="color:white;">Autores: Manuel Vargas y Sebastian Hernandez     
             &copy; Todos los derechos reservados.</p>          

          <ul class="icons">
                  <li><a href="https://www.facebook.com/Amaterasul" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="https://twitter.com/_sebaastian" class="icon fa-facebook"><span class="label">Facebook</span></a></li>   
                  <li><a href="https://www.instagram.com/sebastian_hernandez1997" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                </ul>
    <input type="button" class="btn btn-default" id="arriba" value="Volver arriba.">
    </footer>
    
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
            <script src="../core/libreria/desing/js/material.min.js" type="text/javascript"></script>            
            <script src="../core/libreria/desing/js/ripples.min.js" type="text/javascript"></script>              
            <script src="../core/libreria/bootstrap/js/bootstrap.js" type="text/javascript"></script>  
            <script src="../js/cargarNoticias.js" type="text/javascript"></script>  
            <script src="../js/cargarchat.js" type="text/javascript"></script>  
            <script type="text/javascript">
                $.material.init();
            </script>                
            <script>
                function myFunction() {
                       var contenedorPrincipal;
                       contenedorPrincipal = '<div class="container-fluid"><div class="comments-container"><ul id="comments-list" class="comments-list"><li><div class="comment-main-level"><div class="comment-avatar"><img src="https://scontent.feoh4-2.fna.fbcdn.net/v/t1.0-9/18157903_1445673558817796_3598804664962280009_n.jpg?oh=e8a4f711b381d9f50811b3dbfbb0deb3&oe=59E99D70" alt=""></div> <div class="comment-box"><div class="comment-head"><h6 class="comment-name by-author"><a href="#">Manuel Vargas</a></h6><span>hace 20 minutos</span><i class="fa fa-reply"></i><i class="fa fa-heart"></i></div><div class="comment-content"><iframe width="360" height="315" src="https://www.youtube.com/embed/Dyc1V1r0ajY" frameborder="0" allowfullscreen></iframe></div></div></div><ul class="comments-list reply-list"><li><div class="comment-avatar"><img src="https://scontent.feoh4-2.fna.fbcdn.net/v/t1.0-9/18485406_1413935078665016_4345483548792990133_n.jpg?oh=9c38786bd3eaec92315f2d1575b908af&oe=59A91B2F" alt=""></div><div class="comment-box"><div class="comment-head"><h6 class="comment-name"><a href="#">Sebastian Hernandez</a></h6><span>hace 10 minutos</span><i class="fa fa-reply"></i><i class="fa fa-heart"></i></div><div class="comment-content"><p>:"v</p></div></div></li></ul></li><li><div class="comment-main-level"><div class="comment-avatar"><img src="https://scontent.feoh4-2.fna.fbcdn.net/v/t1.0-9/14494890_1648803718693611_7627774125963742039_n.jpg?oh=6815b84401f61c1aca4e4a1185aa5ec5&oe=59ABB405" alt=""></div><div class="comment-box"><div class="comment-head"><h6 class="comment-name"><a href="#">Esperanza Gomez</a></h6><span>hace 10 minutos</span><i class="fa fa-reply"></i><i class="fa fa-heart"></i></div><div class="comment-content"><p> Hp que rico</p></div></div></div></li></ul></div></div>';
                       $("#noticias").html(contenedorPrincipal);
                }
            </script>
    </body>
    
    

</html>