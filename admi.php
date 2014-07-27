
<?php

session_start();
if(isset($_SESSION["admit"])){}else{header("Location: ../index.php"); }

?>
 <!doctype html>
 <html>

   <head>
      <meta charset="utf-8"/>   
      <meta name="Capitulos y versiculos de la biblia" content="La Biblia">
      <meta content="Jhon javier estrada" name="losremikt"/>
      <title>Admit</title>
      
      <script type="text/javascript" src="js/jquery.js"></script>
      
      <script type="text/javascript" src="js/admi.js"></script>
      <script type="text/javascript" src="js/funcio_Biblia.js"></script>
      <script type="text/javascript" src="js/funcion_admi.js"></script>
      
      
      <link href="img/admit.ico" rel="shortcut icon" type="image/x-icon" />
      
      <link rel=stylesheet href="css/style_class.css" type="text/css"/>
      <link rel=stylesheet href="css/style_admi.css" type="text/css"/>
       
   </head>

   <body onload="">
       <div id="clos_admit" class="butot_clos bord" title="SERRAR LA SESION" onclick="clos_login();"><hr><hr>           
       </div>
      <header>
        <!--  <h1 id="dios">DIOS TE AMA</h1>-->
      </header>
       <div id="contec">  
           <div id="menu_admi">
               <div class="menu">Libros</div>
               <div class="menu">Capitulos-Versiculos</div>
               <div class="menu">Titulos</div>
           </div>
           <div id="mos_nom_libro"> 
               Seleccione el libro
               <select id="nom_libro_dromp">                            
               </select>
           </div>
           
           <div id="mos_nom_capi">
               Seleccione el capitulo 
               <select id="nom_capi_drop">                            
               </select>
           </div>
           
            
           
            <section id="libro">
                <div class="title">Registro de libros </div>
                <div id="lobro_regis">
                    <samp>Nombre del Libro</samp>
                    <div id="nom_lib" class="text_cajas limpiar" contentEditable="true"></div>                 
                     <samp>descripción del libro </samp>
                    <div id="text_lib" class="limpiar text_area_" contentEditable="true"></div>
                </div>
            </section>
           
            
                <section id="versiculos">
                <div class="title">Registro de versiculos </div>
                <div id="lobro_regis">
                    <br><br><br><br>
                     <samp>capitulo</samp>
                     <div><div id="num_capi_inser" class="text_cajas limpiar" id_capi_manul="0"></div><input id="nue_capi_chek" name="nue_capi_chek"  type="checkbox" style="float:right " ></div>
                     <samp>Numero del versiculo</samp>
                    <div id="num_versi" class="text_cajas limpiar" contentEditable="true" onkeypress="return isNumberKey(event);"></div>
                     <samp>descripción del versiculos </samp>
                    <div id="text_versi" class="limpiar text_area_" contentEditable="true"></div>
                </div>
             </section>
           <section id="titulos">
                <div class="title">Registro de titulos </div>
                <div id="lobro_regis">
                    <br><br><br><br>                   
                    <div>
                        <samp>Numero del versiculo</samp>
                    <select id="nom_versi_dromp">                            
                    </select>
                        </div>
                     <samp>Titulo tex </samp>
                     <div id="text_titulo" class="limpiar text_area_" contentEditable="true"></div>
                </div>
             </section>
           <br>
            <div id="lib_env" class="buto bord">Enviar</div>
       </div>

      <footer>
      </footer>
   </body>

 </html>