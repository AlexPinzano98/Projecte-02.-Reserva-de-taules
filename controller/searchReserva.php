<?php 
// Aqui registranos al empleado
require_once "../../services/conexion.php";
// Recogemos los datos enviados del formulario
echo "<br><br><br><br><br>";
$fecha     = $_POST['fecha'];
$capacidad = $_POST['capacidad'];
$hora    = $_POST['hora'];
$sala      = $_POST['sala'];

$query = "SELECT * FROM tbl_mesas WHERE id_sala='$sala' AND num_sillas_mesa>='$capacidad'";
$sentencia = $pdo->prepare($query);
$sentencia->execute();
$mesas = $sentencia->fetchAll();
//print_r($mesas); 
echo "<br>";
?>
<div style="background-color: cyan;">
    <p>Dia: <?php echo $fecha ?></p>
    <p>Capacidad: <?php echo $capacidad ?></p>
    <p>Hora: <?php echo $hora ?></p>
    <p>Sala: <?php echo $sala ?></p>
</div>
<?php
foreach ($mesas as $mesa) {
   $id = $mesa['id_mesa'];
   // Comprobar por cada mesa si existe reserva
   $query = "SELECT * FROM tbl_reservas 
   WHERE dia_reserva = '$fecha'
   AND id_mesa = '$id'
   AND hora_entrada_reserva = '$hora' ";

   $sentencia = $pdo->prepare($query);
   $sentencia->execute();
   $reservas = $sentencia->rowCount();

   // Comprovamos si no existen reservas
   if ($reservas == 0) {    ?>
        <div>
            <form action='../../controller/hacerReserva.php' method='POST'>
                <p>Mesa disponible:<?php echo $mesa['id_mesa'] ?>  </p>
                <p>Capacidad: <?php echo $mesa['num_sillas_mesa'] ?> </p>
                <img src="../../img/mesa1.png" style="width: 15%;" />
                <input id='fecha' name='fecha' type='hidden' value='<?php echo $fecha ?>'> 
                <input id='hora' name='hora' type='hidden' value='<?php echo $hora ?>'> 
                <input id='id_mesa' name='id_mesa' type='hidden' value='<?php echo $mesa['id_mesa'] ?>'>     
                <button type='submit'>RESERVAR</button>
            </form>
        </div>
<?php } 
}
?> 