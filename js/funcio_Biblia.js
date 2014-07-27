/* 
funciones ajax y validacion 
28/02/2014
 */
//solo numeros 
var parameters="";
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
                 
return true;
}

function prores_(){
    progres_bibl.css("background-color","#666666");
    progres_bibl.addClass('animated hinge');
}

function valida_cajax(id_text)
{
    $(id_text).removeClass("tipper-attached");
    $(id_text).addClass("text_error");
  
}
function login(name_usu,contr_usu)
{
 parameters="paso=1&name_usu="+name_usu+"&contr_usu="+contr_usu;
                        $.ajax({
                         data: parameters, 
                         type: "POST",
                         //dataType: "json", 
                         url: "jax_biblia.php",                          
                         success: function(data){                           
                             $('#info_log').html(data);   
                         },error:function(request,error){
                          //alert('error ajax');
                         }
                        });
}
function select_libro_(){
    parameters="paso=2";
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",  
        url: "jax_admi.php",                          
        success: function(data){  
          tutulo_libro(data);    
          
        },error:function(request,error){console.log(error);}
    });
}
function capitulo_verisiculo(){
    parameters="paso=2&num_lib="+id_lib;    
    $.ajax({
        data: parameters, 
        type: "POST",
        dataType:"json",  
        url: "jax_biblia.php",                          
        success: function(data){  
       //  console.log(data);
         capi_versi_format(data);
          
        },error:function(request,error){console.log(error);}
    });
}

function tutulo_libro(data){
    tit_libro.html('<div style="height:10%;"></div>'+data[0].nom_lib);
    tit_libro.append('<p id="text_libro">'+data[0].txt_lib+'</p>');
    id_lib = (data[0].id_lib);
    capitulo_verisiculo();
   
}
function capi_versi_format(data){
   var cap_ver = data.contex;
   var tit_cap_ver = data.tilulos;
    for(i in tit_cap_ver){
        //console.log(cap_ver);
      //  console.log(tit_cap_ver[i].tex_tit);
       // for(i in data){
        
        // }
   }
    
}

