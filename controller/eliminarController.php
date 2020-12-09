<?php
 require_once '../model/mesasDao.php';
    
 $id_mesa = $_GET['id_mesa']; 
 
 $incidencia = new MesasDao();
 $incidencia->deleteUser($id_mesa);

 header('Location: ../view/incidencias.php');

?>