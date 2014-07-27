<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of libros
 *
 * @author REMIKT
 */
//session_start();
//if(isset($_SESSION["admit"])){}else{header("Location: ../index.php"); }

require_once 'conf/Conexion.php';

class libros extends Conexion {
    function __construct() {
        $this->getConexion();
        }
        
        public function insert_libro($nom_libro,$text_libro){
            $sql = "INSERT INTO `a4047406_bi`.`libros` (`id_lib`, `nom_lib`, `txt_lib`) VALUES (NULL, '$nom_libro', '$text_libro');";
            $count = $this->conex->exec($sql);// or die($sql); 
            echo $count;
            }
            
        public function select_libro(){          
            $stmt =$this->conex->prepare('SELECT * FROM  `libros` ORDER BY nom_lib DESC');
            $stmt->execute(); 
            foreach($stmt as $row){
                $lis_libros[] = array(
                    "id_lib"=>$row['id_lib'],
                    "nom_lib"=>$row['nom_lib'],
                    "txt_lib"=> utf8_decode($row['txt_lib'])
                        );
                }
           echo json_encode($lis_libros);
           }
       
         public function insert_capitu($num_cap,$num_cap_lib){
            $sql = "INSERT INTO `a4047406_bi`.`capitulos` (`id_cap`, `num_cap`, `id_lib`) VALUES (NULL, '$num_cap', '$num_cap_lib');";
            $count = $this->conex->exec($sql);// or die($sql); 
            echo $count;
            }
            
         public function select_capi($num_cap_lib){
             $stmt =$this->conex->prepare("SELECT * FROM `capitulos` WHERE id_lib = $num_cap_lib ORDER BY id_cap DESC ");
             $stmt->execute(); 
             foreach($stmt as $row){
                 $lis_capitulo[] = array(
                     "id_cap"=>$row['id_cap'],
                     "num_cap"=>$row['num_cap'],
                     "id_lib"=>$row['id_lib'],
                         );
                }
             echo json_encode($lis_capitulo);
           }
          public function capi_one_final_lib($num_cap_lib){
             $stmt =$this->conex->prepare("SELECT * FROM `capitulos` WHERE id_lib = $num_cap_lib ORDER BY id_cap DESC LIMIT 1 ");
             $stmt->execute(); 
             foreach($stmt as $row){
                     $lis_capitulo_none[] = array(
                     "id_cap"=>$row['id_cap'],
                     "num_cap"=>$row['num_cap'],
                     "id_lib"=>$row['id_lib'],
                         );                 
                }
                echo json_encode($lis_capitulo_none);
           }
       
         public function insert_versiculo($text_versi,$num_versi,$num_pac){
            $sql = "INSERT INTO `a4047406_bi`.`versiculos` (`id_ver`, `id_cap`, `num_ver`, `tex_ver`) VALUES (NULL, '$num_pac', '$num_versi', '$text_versi');";
            $count = $this->conex->exec($sql);// or die($sql); 
            echo $count;
            }
       public function select_versiculo($num_pac){
           
            $stmt =$this->conex->prepare("SELECT * FROM `versiculos` WHERE `id_cap` = $num_pac");
            $stmt->execute(); 
            foreach($stmt as $row){
                $lis_capitulo[] = array(
                    "id_ver"=>$row['id_ver'],
                    "id_cap"=>$row['id_cap'],
                    "num_ver"=>$row['num_ver'],
                    "tex_ver"=>$row['tex_ver']
                        );
                }
           echo json_encode($lis_capitulo);
           }
       public function ver_one_final_cap($num_none_ca){
           
            $stmt =$this->conex->prepare("SELECT * FROM `versiculos` WHERE `id_cap` = $num_none_ca  ORDER BY id_ver DESC LIMIT 1");
            $stmt->execute(); 
            
            foreach($stmt as $row){
                $none_versiculo[] = array(
                    "id_ver"=>$row['id_ver'],
                    "id_cap"=>$row['id_cap'],
                    "num_ver"=>$row['num_ver'],
                    "tex_ver"=>$row['tex_ver']
                        );
                }
           echo json_encode($none_versiculo);
           }
       
       
       public function insert_titulos($num_cap_lib,$num_pac,$num_versi,$text_titulo){
            $sql = "INSERT INTO `a4047406_bi`.`titulos` (`id_tit`, `id_lib`, `id_cap`, `id_ver`, `tex_tit`) VALUES (NULL, '$num_cap_lib', '$num_pac', '$num_versi', '$text_titulo');";
            $count = $this->conex->exec($sql);// or die($sql); 
            echo $count;
            }
            
            
            
       public function capitulos_versiculos($num_lib){
          $stmt ="SELECT * FROM `capitulos` WHERE id_lib = $num_lib";
           $resul = $this->conex->query($stmt);
             
             foreach($resul as $row){
               $id_cap =$row['id_cap'];
               $sql_2 = "SELECT * FROM `versiculos` WHERE `id_cap` = $id_cap";
                $stmt_2 = $this->conex->query($sql_2);
                foreach($stmt_2 as $row_){
                    $lis_versiculo[] = array(
                        "id_ver"=>$row_['id_ver'],
                        "id_cap"=>$row_['id_cap'],
                        "num_ver"=>$row_['num_ver'],
                        "tex_ver"=>  utf8_encode($row_['tex_ver']),
                            );
                    }
                 $lis_capitulo[] = array(
                     "id_cap"=>$row['id_cap'],
                     "num_cap"=>$row['num_cap'],
                     "id_lib"=>$row['id_lib'],
                     "versiculos"=>$lis_versiculo,
                         );
                 
                 $lis_versiculo = NULL;
                }
          //se carga los titulos que contiene el capitulo       
          $stmt ="SELECT * FROM titulos WHERE id_lib= $num_lib";
           $resul = $this->conex->query($stmt);
             
             foreach($resul as $row){
             
                    $lis_titulos_libro[] = array(
                        "id_tit"=>$row['id_tit'],
                        "id_lib"=>$row['id_lib'],
                        "id_cap"=>$row['id_cap'],
                        "id_ver"=>$row['id_ver'],
                        "tex_tit"=>  utf8_encode($row['tex_tit']),
                          );
                    
               
                }
                $modulo_inicial = array(
                  "tilulos"=>  $lis_titulos_libro,
                  "contex"=>  $lis_capitulo
                );
                
                echo json_encode($modulo_inicial);
            
            }
     
            
            //capitulos_versiculo
            
       
       
}

            
            
?>
