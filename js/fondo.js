$(document).ready(function () {                 

   $(document).ready(function () {                 

            colors = ['#FF0080', '#4B088A', '#2E9AFE', '#0B614B', '#FF5A00' ];
                       var i = 0;
                       animate_loop = function() {      
                       $("body").animate({backgroundColor:colors[(i++)%colors.length]
                       }, 100, function(){
                           animate_loop();
                        });
                     }
             animate_loop();
            });

});
      


