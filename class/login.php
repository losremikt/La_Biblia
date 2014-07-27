<?php
/*

 class usuarios 
 */
session_start();

require_once 'conf/Conexion.php';


class Usuarios extends Conexion
{
    private $usu;
    
        function __construct() {
        $this->getConexion();
        }
    public function ListarUsu()
    {                
            
            $sql = "SELECT * FROM usuario";
            $resul = $this->conex->query($sql) or die($sql);           
            return $resul;
    }
     public function login($usu_, $pas){          
            $sql = "SELECT * FROM usuario WHERE con_usu = $pas AND nom_usu = '$usu_'";
            $resul = $this->conex->query($sql);// or die($sql);         
            if($resul == "0")
            {              
                 echo 'no  es usuario ';
            }
            else 
            {
              $_SESSION["admit"]=$usu_;
               echo '<script>
                    window.location="admi.php";
                    </script>';
            }
           
    }
    
    public function clos_login() {
                session_destroy();
                echo '1';
           }

    public function getUsu() {
        return $this->usu;
    }

    public function getContra() {
        return $this->contra;
    }

    public function setUsu($usu) {
        $this->usu = $usu;
    }

    public function setContra($contra) {
        $this->contra = $contra;
    }


    
}




?>
