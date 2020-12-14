<?php
class AdminDao{
    private $pdo;

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function usuarios(){
    
    }    
  
}

?>