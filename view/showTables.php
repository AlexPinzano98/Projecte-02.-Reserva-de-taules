<?php
require_once '../services/conexion.php';

$id2=$_GET['id'];
$query="SELECT tbl_mesas.* FROM tbl_mesas INNER JOIN tbl_salas ON tbl_mesas.id_sala=tbl_salas.id_sala WHERE tbl_mesas.id_sala=?";
$sentencia=$pdo->prepare($query);
$sentencia->bindValue(1,$_GET['id']);
$sentencia->execute();
$mesas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

$i=1;echo "<div class='container-mesa-1'>";
foreach($mesas as $mesa){
    $id=$mesa['id_mesa'];
    echo "<div class='mesas' >";
    echo "<h3>MESA nº: {$mesa['id_mesa']} </h3>";
    echo "<img class='img-container-mesa1' src='../img/mesa2.png' alt=''>";
    echo "<h3>Sillas mesa: {$mesa['num_sillas_mesa']} </h3>";
    

    $query="SELECT tbl_mesas.*,tbl_incidencias.dispo FROM tbl_mesas INNER JOIN tbl_incidencias ON tbl_mesas.id_mesa=tbl_incidencias.id_mesa WHERE tbl_mesas.id_mesa=?";// Si hay incidencia -> Mesa no disponible
    $sentencia=$pdo->prepare($query);
    $sentencia->bindValue(1,$mesa['id_mesa']);
    $sentencia->execute();
    $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row){
        $array = array();
        if ($row['dispo']=='no'){
            echo "<h4>Mesa no disponible por INCIDENCIA</h4>";
            $array[$i-1]=2;
        }
    }
    //echo $array[$i-1];
    if(empty($array[$i-1])){
        echo "<h4>{$mesa['disponibilidad_mesa']} </h4>";
        if ($mesa['disponibilidad_mesa']=="disponible"){
            echo "<a href='../controller/validarReservar.php?id_mesa=$id&id_sala=$id2'><button type='submit'>RESERVAR</button></a>";
        } else {
            echo "<a href='../controller/validarAliberar.php?id_mesa=$id&id_sala=$id2'><button type='submit'>ALIBERAR</button></a>";
        }
    }
    
    echo "</div>";
    
    if ($i==3||$i==6){
        echo "</div>";
        echo "<div class='container-mesa-1'>";
    }
    $i++;
}

?>
