<?php
require_once '../model/salas.php';
require_once '../model/salasDAO.php'; 

if(isset($_POST['ubicacion']) || isset($_POST['num_mesas'])){        

    $salas = new Salas();
    $salas->setId_sala($_POST['ubicacion']);
    $salas->setNum_mesas($_POST['num_mesas']);
    $salasDAO = new SalasDao(); 

    $filter = $salasDAO->showRoms($salas);
       
}else{

    $salasDAO = new SalasDao();
    $filter = $salasDAO->showTotalBookings(); 
    
}

?>