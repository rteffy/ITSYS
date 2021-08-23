<?php
include_once("../../config.php")
class Conexion{
    private $host   =$host_config;
    private $usuario=$usuario_config;
    private $clave  =$clave_config;
    private $db     =$db_config;
    public $conexion;

    public function __construct(){        

        $this->conexion = new mysqli ($this->host, $this->usuario, $this->clave,$this->db);
        
        
        
    }


    public function query($query){

        $resultado=$this->conexion->query($query);        
        if($resultado){
            return $resultado; 
        }
            
        

    }

    public function getArray($query){

        $resultado=$this->conexion->query($query);        
        if($resultado){
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

    }

}



?>