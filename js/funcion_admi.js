/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
parameters="";

function insert_libro(nom_libro,text_libro){
     
    parameters="paso=1&nom_libro="+nom_libro+"&text_libro="+text_libro;
    
    $.ajax({
        data: parameters, 
        type: "POST",
        url: "jax_admi.php",                          
        success: function(data){  
            
            if(data==="1")
                {
                    limpiar.html('');
                    select_libro("admi");
                }          
        },error:function(request,error){}
    });
    
   
}
function select_libro(type){
    parameters="paso=2";
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",  
        url: "jax_admi.php",                          
        success: function(data){  
            if(type=="admi"){
                nom_libro_dromp.html('');
                nom_libr_drop(data);
            }else{tutulo_libro(data);}         //
          
          
        },error:function(request,error){console.log(error);}
    });
}

function insert_capitulos(num_cap,num_cap_lib){     
    parameters="paso=3&num_cap="+num_cap+"&num_cap_lib="+num_cap_lib;
    $.ajax({
        data: parameters, 
        type: "POST",
        url: "jax_admi.php",                          
        success: function(data){  
            if(data==="1")
                {
                    limpiar.html('');
                    
                }          
        },error:function(request,error){}
    });
}            


function nom_libr_drop(data)
{
    nom_libro_dromp.append('<option value="0">Libros</option>');
    for(i in data){
        nom_libro_dromp.append('<option value="'+data[i].id_lib+'">'+data[i].nom_lib+'</option>');
    }
    timer = setTimeout("nom_libr_drop()", 5000);clearTimeout(timer);
}


function select_capi(num_cap_lib){
    parameters="paso=4&num_cap_lib="+num_cap_lib;
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",  
        url: "jax_admi.php",                          
        success: function(data){ 
            nom_capi_drop_.html('');       
            nom_capi_drop(data);
        },error:function(request,error){}
    });
}

function nom_capi_drop(data)
{   
    nom_capi_drop_.append('<option value="0">Capitulos</option>');
    for(i in data){
        nom_capi_drop_.append('<option value="'+data[i].id_cap+'">'+data[i].num_cap+'</option>');
    }
    timer = setTimeout("nom_capi_drop()", 5000);clearTimeout(timer);
}

function insert_versiculo(text_versi,num_versi,num_pac){
    parameters="paso=5&text_versi="+text_versi+"&num_versi="+num_versi+"&num_pac="+num_pac;
    $.ajax({
        data: parameters, 
        type: "POST",
        url: "jax_admi.php",                          
        success: function(data){  
            if(data==="1")
                {
                    limpiar.html('');
                    $('option', nom_capi_drop_).remove();
                    $('option', nom_libro_dromp).remove();
                    nom_capi_drop_.append('<option value="0">Capitulos</option>');                    
                    select_libro("admi");
                }          
        },error:function(request,error){}
    });
}



function clos_login()
{
    parameters="paso=6";
    $.ajax({
        data: parameters, 
        type: "POST",
        url: "jax_admi.php",                          
        success: function(data){  
            if(data==="1")
                {
                    $(location).attr('href',"index.php");
                }          
        },error:function(request,error){}
    });
}

function select_versi(num_pac){
    parameters="paso=7&num_pac="+num_pac;
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",  
        url: "jax_admi.php",                          
        success: function(data){       
            $('option', nom_versi_dromp).remove();
          nom_versi_drop(data);
        },error:function(request,error){}
    });
}

function nom_versi_drop(data)
{   
    nom_versi_dromp.append('<option value="0">versiculos</option>');
    for(i in data){
        nom_versi_dromp.append('<option value="'+data[i].id_ver+'">'+data[i].num_ver+'</option>');
    }
    
}

function insert_titulo(text_titulo){
    parameters="paso=8&num_cap_lib="+num_cap_lib+"&num_pac="+num_pac+"&num_versi="+num_versi+"&text_titulo="+text_titulo;
    $.ajax({
        data: parameters, 
        type: "POST",
        url: "jax_admi.php",                          
        success: function(data){  
            if(data==="1")
                {
                    limpiar.html('');
                    $('option', nom_capi_drop_).remove();
                    $('option', nom_versi_dromp).remove();
                    select_libro("admi");
                }          
        },error:function(request,error){}
    });
}
function capi_one_final_lib(num_cap_lib){
    parameters="paso=9&num_cap_lib="+num_cap_lib;
    
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",
        url: "jax_admi.php",                          
        success: function(data){  
            
           try{
               num_capi_inser.text(++data[0].num_cap);         
               num_pac =data[0].id_cap;   
               ver_one_final_cap(num_pac); 
           }catch(err){
               num_capi_inser.text('1'); 
               num_pac =1;  
            }
           
        },error:function(request,error){}
    });
}
function ver_one_final_cap(num_none_ca){
    parameters="paso=10&num_none_ca="+num_none_ca;
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",  
        url: "jax_admi.php",                          
        success: function(data){  
            console.log(data);
            try{
                num_versi.text(++data[0].num_ver);
                num_versi_id = data[0].id_ver;               
            }catch(err){
                console.log(err);
                num_versi.text('1');
                num_versi_id = 1;  
            }
            
        },error:function(request,error){}
    });
}

//




