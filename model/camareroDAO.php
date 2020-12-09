<?php
class CamareroDao{
    private $pdo;

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function login($admin){
        $query = "SELECT * FROM tbl_camareros WHERE Email=? AND Passwd=?";
        $sentencia=$this->pdo->prepare($query);

        $email=$admin->getEmail();
        $psswd=$admin->getPasswd();
        // El bindParam sirve para asignar los interrogantes de la consulta
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();

        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();

        if($numRow==1){
            $admin->setId($result['id_camarero']);
            session_start();
            $_SESSION['camarero']= $admin->getEmail();
            return true;
        }else {
            return false;
        }
    }    
  
}

?>