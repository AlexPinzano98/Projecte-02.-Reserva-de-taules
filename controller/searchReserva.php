<?php 
// Aqui registranos al empleado
//require_once "../services/conexion.php";
// Recogemos los datos enviados del formulario
$fecha     = $_POST['fecha'];
$capacidad = $_POST['capacidad'];
$hora    = $_POST['hora'];
$sala      = $_POST['sala'];
echo "$fecha , $capacidad , $hora, $sala";

$query = "SELECT * FROM tbl_reservas WHERE dia_reserva='2020-12-14' " ;

$mesas = "SELECT * FROM tbl_mesas INNER JOIN tbl_reservas ON tbl_mesas.id_mesa=tbl_reservas.id_mesa";

// Consulta para saber que mesas estan registradas
$mesas2 = "SELECT tbl_mesas.id_mesa,tbl_mesas.id_sala,tbl_reservas.dia_reserva,tbl_reservas.hora_entrada_reserva 
FROM tbl_mesas INNER JOIN tbl_reservas ON tbl_mesas.id_mesa=tbl_reservas.id_mesa
WHERE tbl_reservas.dia_reserva = '2020-12-14'
AND tbl_mesas.id_sala = '3'
AND tbl_mesas.num_sillas_mesa >= 2
AND tbl_reservas.hora_entrada_reserva = '13:00' ";
// Hcer consulta de las mesas disponibles
// Comoprobar que hay reservas para ese dia y esa hora en esa sala
?>