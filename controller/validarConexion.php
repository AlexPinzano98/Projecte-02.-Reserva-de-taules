<?php 
session_start();
if (!isset($_SESSION['camarero'])){
    header('Location: ../index.php');
}
?>