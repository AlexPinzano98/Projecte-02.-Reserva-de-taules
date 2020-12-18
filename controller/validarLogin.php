<?php 
include '../model/camareros.php';
include '../model/camareroDAO.php';


$admin = new Camarero($_POST['email'], md5($_POST['psswd']));
$adminDAO = new CamareroDAO();
$adminDAO->login($admin);


?>