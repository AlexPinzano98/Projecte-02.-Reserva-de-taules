<?php 
include '../model/camareros.php';
include '../model/camareroDAO.php';


$admin = new Camarero($_POST['email'], md5($_POST['psswd']));
$adminDAO = new CamareroDAO();
if($adminDAO->login($admin)){
  //echo 'Login realizado con exito, iniciamos sesion <br>'; 
  header('Location: ../view/home.php');
}else {
  header('Location: ../index.php');
}


?>