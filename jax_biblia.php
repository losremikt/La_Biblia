<?php
//session_start();
//if(isset($_SESSION["admit"])){}else{header("Location: ../index.php"); }
try {
    include_once 'class/login.php';
    include_once 'class/libros.php';
    
 
} catch (Exception $o) {
    error_log($o);
}

$usu = new Usuarios();
$libros = new libros();

$paso = isset($_POST["paso"])?$_POST["paso"]:$_GET["paso"];

if ($paso == '1') {
   $name_usu = isset($_POST["name_usu"])?$_POST["name_usu"]:$_GET["name_usu"];
   $contr_usu = isset($_POST["contr_usu"])?$_POST["contr_usu"]:$_GET["contr_usu"];  
  // echo ' '.$name_usu.' '.$contr_usu;
   $resul = $usu->login($name_usu, $contr_usu);
}
else if ($paso == '2') {
   $num_lib = isset($_POST["num_lib"]);  
  echo $libros->capitulos_versiculos($num_lib);
}



?>
