<?php
class SalasDao{ 
    private $pdo;

    public function __construct(){
        include '../../services/conexion.php';
        $this->pdo=$pdo;
    }

    public function showTotalBookings(){       
        
        $query = "SELECT tbl_salas.id_sala, tbl_salas.num_sillas, tbl_reservas.`id_reserva`, tbl_reservas.`id_mesa`, tbl_reservas.`dia_reserva`, tbl_reservas.`hora_entrada_reserva`, tbl_reservas.`hora_salida_reserva` FROM tbl_reservas INNER JOIN tbl_mesas ON  tbl_reservas.id_mesa = tbl_mesas.id_mesa  INNER JOIN tbl_salas ON tbl_mesas.id_sala = tbl_salas.id_sala GROUP BY tbl_reservas.`id_reserva`";
        $sentencia=$this->pdo->prepare($query);              
        $sentencia->execute();        
        
        // coge las filas en forma de array
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);     
        
    } 

    public function showRoms($salas){       
    
        $idSala=$salas->getId_sala();
        $num_mesa=$salas->getNum_mesas();
        $query = "SELECT tbl_salas.id_sala, tbl_salas.num_sillas, tbl_reservas.`id_reserva`, tbl_reservas.`id_mesa`, tbl_reservas.`dia_reserva`, tbl_reservas.`hora_entrada_reserva`, tbl_reservas.`hora_salida_reserva` FROM tbl_reservas INNER JOIN tbl_mesas ON  tbl_reservas.id_mesa = tbl_mesas.id_mesa  INNER JOIN tbl_salas ON tbl_mesas.id_sala = tbl_salas.id_sala WHERE tbl_salas.id_sala LIKE '%{$idSala}%' AND tbl_reservas.`id_mesa` LIKE '%{$num_mesa}%'";        
    
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
         // coge las filas en forma de array
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);  
        
    } 
}

?>