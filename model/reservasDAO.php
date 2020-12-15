<?php
class ReservasDao{
    private $pdo;

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function hacerReserva($fecha, $hora, $mesa, $hora2){
        $sentencia1=$this->pdo->prepare("INSERT INTO tbl_reservas (id_mesa, dia_reserva, hora_entrada_reserva, hora_salida_reserva) VALUES (?,?,?,?)");
        $sentencia1->bindParam(1,$mesa);
        $sentencia1->bindParam(2,$fecha);
        $sentencia1->bindParam(3,$hora);
        $sentencia1->bindParam(4,$hora2);
        $sentencia1->execute();  
        header("Location: ../view/Camarero/buscarReserva.php");
    }     
  
}

?>