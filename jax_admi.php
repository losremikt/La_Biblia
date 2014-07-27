<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

///session_start();
//if(isset($_SESSION["admit"])){}else{header("Location: ../index.php"); }
try {
    include_once 'class/libros.php';
    include_once 'class/login.php';
    
 
} catch (Exception $o) {
    error_log($o);
}

$libros = new libros();

$paso = isset($_POST["paso"])?$_POST["paso"]:$_GET["paso"];

if ($paso == '1') {
   $nom_libro = utf8_decode($_POST["nom_libro"]);
   $text_libro =utf8_decode($_POST["text_libro"]);
   $libros->insert_libro($nom_libro,$text_libro);
}
else if ($paso == '2') {
   // echo $paso;
    echo $libros->select_libro();
}
else if ($paso == '3') {
   $num_cap = $_POST["num_cap"];
   $num_cap_lib = $_POST["num_cap_lib"];
   $libros->insert_capitu($num_cap,$num_cap_lib);
}
else if ($paso == '4') {
      $num_cap_lib = $_POST["num_cap_lib"];
    echo $libros->select_capi($num_cap_lib);
}
else if ($paso == '5') {
      $text_versi = utf8_decode($_POST["text_versi"]);
      $num_versi = $_POST["num_versi"];
      $num_pac = $_POST["num_pac"];
    echo $libros->insert_versiculo($text_versi,$num_versi,$num_pac);
}
else if ($paso == '6') {
    $usu = new Usuarios();
    echo $usu->clos_login();
}
else if ($paso == '7') {
    $num_pac = $_POST["num_pac"];
    echo $libros->select_versiculo($num_pac);
}
else if ($paso == '8') {
    $num_cap_lib = $_POST["num_cap_lib"];
    $num_pac = $_POST["num_pac"];
    $num_versi = $_POST["num_versi"];
    $text_titulo = utf8_decode($_POST["text_titulo"]);
    echo $libros->insert_titulos($num_cap_lib,$num_pac,$num_versi,$text_titulo);
}
else if ($paso == '9') {
     $num_cap_lib = $_POST["num_cap_lib"];  
    echo $libros->capi_one_final_lib($num_cap_lib);
}
else if ($paso == '10') {
     $num_none_ca = $_POST["num_none_ca"];  
    echo $libros->ver_one_final_cap($num_none_ca);
}


        
      //  $ = $_POST[""];
?>
