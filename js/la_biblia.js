/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
    //variables login
    
    $('#mesega_bien').addClass('animated tada');

  /*    	
elemento1 = document.createElement('div');
elemento1.appendChild(document.createTextNode('Elemento nuevo'));
elemento1.class = 'hoja_bil';
elemento2 = document.getElementById('tex_cap_ver1');
elemento2.appendChild(elemento1);
       //<!-- $("<div class='hoja_bil'>Hello World!</div>").appendTo("#1");-->
        
      $("<div class='hoja_bil'>Hello World!</div>").appendTo(".hoja_bil");*/
    //progres biblia	
    progres_bibl = $("#progres_bibl");
    ///
    mod_login = $("#mod_login");
    login_open = $("#login_open");
    clos_login = $("#clos_login");
    
    //libro
    id_lib = "";
    la_biblia = $("#la_biblia");
    tit_libro = $("#tit_libro");
    
    //funciones iniciales 
    //setTimeout (' prores_();',20); 
   
    setTimeout("prores_()",1000);
    
    
    select_libro('libro');
    
    
   
    // finction login
    mod_login.hide();
    login_open.click(function (){
        mod_login.show();          
    });
    clos_login.click(function (){
        mod_login.hide(); 
    });
    
    /* login admit*/    
    
    // limpiarjajas
    $(".text_cajas").mousedown(function(){
        $(this).html('');
        $(this).removeClass("text_error");
    });      
    $("#ingre_usu").click(function (){
        var id_name = $("#usu_name");
        var id_conte = $("#usu_pasw");
        var name_usu = $("#usu_name").text().trim();        
        var contr_usu = $("#usu_pasw").text().trim(); 
        ban_datos = false;
        if(name_usu.length === 0 ||  name_usu === "Usuario"){
            ban_datos = true; 
            valida_cajax(id_name);    
        }
        if(name_usu.length === 0 || contr_usu === "Contraseña" || contr_usu === ""){       
            valida_cajax(id_conte);
            ban_datos = true; 
        }
        if(ban_datos===false){
            login(name_usu,contr_usu);
        }
    }); 
    
    $("#tex").click(function (){
        prueba_codigo(); 
    });
    
    //eventos del libro hojas 
    la_biblia.bind("turning", function(event, page, view) {
        
      
    });
});




