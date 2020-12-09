<?php
    require_once '../model/claseIncidencia.php';
    require_once '../model/incidenciasDAO.php';

    if(isset($_POST['id_mesa'])){
        $inc = new Incidencias();
        $inc->setId_mesa($_POST['id_mesa']);
        $inc->setDescrip($_POST['descrip']); 
        $inc->setDispo($_POST['dispo']);

        $incDAO= new IncidenciasDAO();

        $incDAO->actualizarTablaInc($inc);
        
    }

    header ('Location: ../view/incidencias.php'); 
 