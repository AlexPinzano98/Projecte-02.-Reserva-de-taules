<?php
class IncidenciasDao{
    private $pdo;

    public function __construct(){ 
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function mostrarTablaInc(){
        $query= "SELECT * FROM tbl_incidencias";
        $sentencia= $this->pdo->prepare($query);
        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizarTablaInc($inc){            
        $sentencia1=$this->pdo->prepare("INSERT INTO tbl_incidencias (id_mesa, descrip, dispo) VALUES (?,?,?)");
        $id_mesa= $inc->getId_mesa(); 
        $id_descrip= $inc->getDescrip();
        $id_dispo= $inc->getDispo();
        $sentencia1->bindParam(1,$id_mesa);
        $sentencia1->bindParam(2,$id_descrip);
        $sentencia1->bindParam(3,$id_dispo);
        $sentencia1->execute();            
    }
}

?>