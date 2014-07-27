<?php 
try {
    include_once 'class/login.php';
} catch (Exception $o) {
    error_log($o);
}

$usu = new Usuarios();

$resul = $usu->ListarUsu();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>   
    <meta name="Capitulos y versiculos de la biblia" content="La Biblia">
    <meta content="Jhon javier estrada" name="losremikt"/>
    <title>LA BIBLIA</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/turn.js"></script>    
    <script type="text/javascript" src="js/elastic-columns.js"></script>
    <script type="text/javascript" src="js/elastic-columns-demo.js"></script>
    <script src="js/jquery.darktooltip.js"></script>
    <script src="js/examples.js"></script>
    <script type="text/javascript" src="js/jquery.fittext.js"></script>

    
    <script type="text/javascript" src="js/la_biblia.js"></script>
    <script type="text/javascript" src="js/funcion_admi.js"></script>
    <script type="text/javascript" src="js/funcio_Biblia.js"></script>
    


    <link href="img/labiblia.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel=stylesheet href="css/darktooltip.css" type="text/css"/>
    <link rel=stylesheet href="css/animate.css" type="text/css"/>
    <link rel=stylesheet href="css/style_biblia.css" type="text/css"/>
    <link rel=stylesheet href="css/style_class.css" type="text/css"/>
    

</head>
<body>
    
    <div style="color: greenyellow;"  id="progres_bibl">
        <h2 id="mesega_bien" style=" color: #ccc; font-size: 50px;">
            ¿Hola bienvenido?
        </h2>
       
        <img src="img/722.GIF" title="">
    </div>
    
    <header>
        <div id="login_open" data-tooltip="#login_open_tull">
             usuarios
             <hr>
        </div>
    </header>    
    <section>
        
    <div id="la_biblia">
        
    <div class="tc rel">
        <div class="book" id="book">
            <div class="hard" id="ti_labibia"> <h1>LA BIBLIA </h1> </div>
            <div class="hard" id="tit_libro"></div>
            <div class="hoja_bil" id="tex_cap_ver1"> 
             <div class="columns">
                    
                   <div class="item">
                       <h2>titulos</h2>
                       <div class="num_cap">1</div>
                       los mezcló de tal <b>1</b>manera que logró hacer un libro de textos especimen. <b>2</b>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                       los mezcló de tal <b>1</b>manera que logró hacer un libro de textos especimen. <b>2</b>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                      los mezcló de tal <b>1</b>manera que logró hacer un libro de textos especimen. <b>2</b>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                   </div>
                   <div class="item">
                       <h2>titulos</h2>
                       <div class="num_cap">1</div>
                       los mezcló de tal <b>1</b>manera que logró hacer un libro de textos especimen. <b>2</b>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                       los mezcló de tal <b>1</b>manera que logró hacer un libro de textos especimen. <b>2</b>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                      los mezcló de tal <b>1</b>manera que logró hacer un libro de textos especimen. <b>2</b>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                   </div>
                   
                 
             </div>
                
                
            </div>
   
           
            <div class="hard">FIN</div>
            <div class="hard">DIOS TE AMA</div>
        </div>
    </div>
        </div>
        </section>

    <footer>
        <div id="prueba"></div>
    </footer>
    
    
    
    
    <script type="text/javascript">

(function () {
                $("#tit_libro").fitText(2);
		$(".hoja_bil").fitText(1);
		/*$("#fittext3").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });*/
    
    window.onload = function()
            {
                new ElasticColumnsDemo();
            };
    'use strict';

    var module = {
        ratio: 1.38,
        init: function (id) {
            var me = this;

            // if older browser then don't run javascript
            if (document.addEventListener) {
                this.el = document.getElementById(id);
                this.resize();
                this.plugins();

                // on window resize, update the plugin size
                window.addEventListener('resize', function (e) {
                    var size = me.resize();
                    $(me.el).turn('size', size.width, size.height);
                });
            }
        },
        resize: function () {
            // reset the width and height to the css defaults
            this.el.style.width = '';
            this.el.style.height = '';

            var width = this.el.clientWidth,
                height = Math.round(width / this.ratio),
                padded = Math.round(document.body.clientHeight * 0.9);

            // if the height is too big for the window, constrain it
            if (height > padded) {
                height = padded;
                width = Math.round(height * this.ratio);
            }

            // set the width and height matching the aspect ratio
            this.el.style.width = width + 'px';
            this.el.style.height = height + 'px';

            return {
                width: width,
                height: height
            };
        },
        plugins: function () {
            // run the plugin
            $(this.el).turn({
                gradients: true,
                acceleration: true
            });
            // hide the body overflow
            document.body.className = 'hide-overflow';
        }
    };

    module.init('book');
}());
        
      
        
   </script>


<!-- /////////////////////////////////  modalll ////////////////////-->
<div id="mod_login" class="model" >
    <div  id="clos_login" class="clos" >x</div>
        <div id="from_us">
            <div id="usu_name" data-tooltip="#usu_name_tull" class="tipped text_cajas" contentEditable="true"> Usuario</div>
            
            <div id="usu_pasw" data-tooltip="#login_tull" class="tipped text_cajas"  contentEditable="true"> Contraseña</div>
            
            <div class="buto bord" id="ingre_usu" >Ingresar</div>
            <h6 id="info_log"></h6>
        </div>
    </div>
<!--tulltisss-->
<div id ="html-content" style="display:none;">
    <h2>wow <strong>such content</strong> very html</h2>
    <img src="http://bit.ly/18VOk3C">
</div>

<div id ="login_tull" style="display:none;">
   Tu contraseña			    	
</div>

<div id ="usu_name_tull" style="display:none;">
  Tu nombre de usuario 
</div>

<div id ="login_open_tull" style="display:none; font-size: 20px;">
  Usuarios
</div>

</body>
</html>
