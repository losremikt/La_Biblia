<?php

/*
conexion proyecto de la biblia 
 * 25/02/2014
 */
abstract class Conexion {
    //variables de conexion
    protected $manejador = "mysql";
    private static $servidor = "localhost";
    private static $usurio = "root";
    private static $contra = "";
    protected $db = "a4047406_bi";
    protected $conex;
    
    
    protected function getConexion()
    {
        try
            {
                $this->conex = new PDO($this->manejador.":host=".self::$servidor.";dbname=".$this->db,self::$usurio,self::$contra,array(PDO::ATTR_EMULATE_PREPARES=>TRUE));
                return $this->conex;
        }
            catch (PODExeption $ex)
            {
            echo 'Conexion Error'.$ex->getMessage();
            }
    }












    /* private $servidor;
            private $usuarios;
            private $contrasena;
            private $dasedatos;
            private $conectar;
            
            
            function Conexion($servi,$usuario,$contra,$db)
            {
                
                $this->servidor = $servi;
                $this->usuarios = $usuario;
                $this->contrasena = $contra;
                $this->dasedatos = $db;
                
                $this->Conexiondb();
                $this->Seleccdb();
                
            }
            
            private function Conexiondb()
            {
                $this->conectar = mysql_connect($this->servidor,  $this->usuarios,  $this->contrasena)or die(mysql_errno());
            }
            
            private function Seleccdb()
            {
                mysql_db_name($this->dasedatos)or die(mysql_errno());
            }
            
            public function Consultar($sql)
            {
                $resultado = mysql_query($sql,  $this->conectar);
                return $resultado;
            }
            public function Nomfilas($sql)
            {
                return mysql_num_rows($sql);
            }
            
            public function NomColum($sql)
            {
                return mysql_num_fields($sql);
            }
            public function NomCampo($sql)
            {
                return mysql_field_name($sql,$i);
            }*/
}

?>
