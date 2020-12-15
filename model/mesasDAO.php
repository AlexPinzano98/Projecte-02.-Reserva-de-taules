<?php
class MesasDao{
    private $pdo;

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    }

    public function newReservar($id_mesa){

        $query="INSERT INTO tbl_reservas (id_mesa,dia_reserva,hora_entrada_reserva) VALUES (?,?,?)";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindValue(1,$id_mesa);
        $sentencia->bindValue(2,date('Y-m-d'));
        $sentencia->bindValue(3,date('H:i'));
        $sentencia->execute();

        $query="UPDATE tbl_mesas SET disponibilidad_mesa = ? WHERE id_mesa = ?";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindValue(1,"no disponible");
        $sentencia->bindValue(2,$id_mesa);
        $sentencia->execute();
        
        header("Location: ../view/Camarero/mostrarMesas.php?id={$_GET['id_sala']}");
    }

    public function newAliberar($id_mesa){

        $query="UPDATE tbl_reservas SET hora_salida_reserva = ? WHERE id_mesa = ?";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindValue(1,date('H:i')); // date(H:i) coge la hora actual (horas:minutos)
        $sentencia->bindValue(2,$id_mesa); // idmesa
        $sentencia->execute();

        $query="UPDATE tbl_mesas SET disponibilidad_mesa = ? WHERE id_mesa = ?";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindValue(1,"disponible");
        $sentencia->bindValue(2,$id_mesa);
        $sentencia->execute();

        header("Location: ../view/Camarero/mostrarMesas.php?id={$_GET['id_sala']}");
    }

    public function deleteUser($id){
        try{
            $this->pdo->beginTransaction();             

            $query1 = "DELETE FROM tbl_incidencias  where id_mesa=?";
            $sentencia1 = $this->pdo->prepare($query1);            
            $sentencia1->bindParam(1,$id);    
            $sentencia1->execute();           
           
            $this->pdo->commit();           
        
        } catch (Exception $ex) {
            /* Reconocer un error y revertir los cambios */
            $this->pdo->rollback();
            echo $ex->getMessage();   
        }
        
    }


}

?>