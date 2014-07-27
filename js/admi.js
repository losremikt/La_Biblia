/* 
 28/02/2014

 
 */
$(function(){
    // funciones de inicio 
    // 
    // 
  //  
    //menu
     menu = $(".menu");
     tex_menu ="";
     
     
     buton_enviar ="Libros";
    //modale
    libro =$("#libro");
    capitulo =$("#capitulo");
    versiculos =$("#versiculos");
    //libros
     lib_env = $("#lib_env");
     nom_lib =  $("#nom_lib");
     text_lib =  $("#text_lib");     
     nom_libro_dromp = $("#nom_libro_dromp");
     mos_nom_libro = $("#mos_nom_libro");
     nom_libro_dromp.append('<option value="0">Libros</option>');
     num_cap_lib =  "";
     
     
     //capitulos     
     num_pac="";
     nom_capi_drop_ =  $("#nom_capi_drop");
     num_capi_inser =  $("#num_capi_inser");
     mos_nom_capi =  $("#mos_nom_capi");
     nue_capi_chek =  $("#nue_capi_chek");
     nom_capi_drop_.append('<option value="0">Capitulos</option>');
     
     
     
     
     //versiculos
     num_versi_id ="";
     num_versi = $("#num_versi");
     text_versi = $("#text_versi");
     nom_versi_dromp = $("#nom_versi_dromp");
     nom_versi_dromp.append('<option value="0">versiculos</option>');
     
     //titulos
     titulos = $("#titulos");
     text_titulo = $("#text_titulo");
     num_versi_titulo="";
     
 
     //para limpiar la cajas    
     limpiar= $(".limpiar");
     
     //funciones de usu de variables 
     versiculos.hide();
     titulos.hide();
     mos_nom_libro.hide();
     mos_nom_capi.hide();
     
     
     
     
     //munu click
     menu.click(function(){
        tex_menu = $(this).text();
        buton_enviar = tex_menu;
        if(tex_menu==="Libros"){
            libro.show();
            versiculos.hide();
            capitulo.hide();
            mos_nom_libro.hide();
            mos_nom_capi.hide();
            titulos.hide();
        }       
        if(tex_menu==="Capitulos-Versiculos"){
            
            mos_nom_libro.show();
            mos_nom_capi.hide();
            versiculos.show();
            capitulo.hide();
            libro.hide();    
            titulos.hide();
            
             
             select_libro("admi");
        }
        if(tex_menu==="Titulos"){
            titulos.show();
            mos_nom_libro.show();
            mos_nom_capi.show();
            versiculos.hide();
            capitulo.hide();
            libro.hide(); 
            select_libro("admi");
        }
            
     });
     
     nom_libro_dromp.on('change',function(){
         num_cap_lib = $(this).val();
         select_capi(num_cap_lib);   
         if(tex_menu==="Capitulos-Versiculos")             
         capi_one_final_lib(num_cap_lib);
                        
     });
     nom_capi_drop_.on('change',function(){
         num_pac = $(this).val();
         select_versi(num_pac);
     });
     
     nom_versi_dromp.on('change',function(){
         num_versi = $(this).val();
     });
     
     nue_capi_chek.click(function() {  
         if(nue_capi_chek.is(':checked')) { 
             insert_capitulos(num_capi_inser.text(),num_cap_lib);              
             capi_one_final_lib(num_cap_lib);
         } else {  
            // alert("No está activado");  
         }  
     });  

     
   
  //guardar libro   capitulos versiculos  
  lib_env.click(function(){ 
      var ban = false;
      if(buton_enviar==="Libros"){
          if(nom_lib.text().trim().length === 0){
              ban = true;           
          }          
          if(text_lib.text().trim().length === 0){
              ban = true;
          }
          if(ban === false){  
              insert_libro(nom_lib.text(),text_lib.text());
          }
          else{console.log('nada de datos '+ban);
          }
          
      }
      else if(buton_enviar==="Capitulos-Versiculos"){
          
          nue_capi_chek.prop('checked', false);  
          
          if(text_versi.text().trim().length === 0){
              ban = true;
          }
          if(num_versi.text().trim().length === 0){
              ban = true;
          }
          
          if(ban === false){  
             insert_versiculo(text_versi.text(),num_versi.text(),num_pac);
          }
          else{console.log('nada de datos '+ban);
          }
           
      }
      else if(buton_enviar==="Titulos"){
          if(text_titulo.text().trim().length === 0){
              ban = true;
          }          
          if(nom_capi_drop_.text()==="versiculos"){
              ban = true;
          }
          if(ban === false){  
              insert_titulo(text_titulo.text());
          }
          else{console.log('nada de datos '+ban);
          }
          
          
      }
      
   });
  
      
  /*  */
  });
  
  
 


