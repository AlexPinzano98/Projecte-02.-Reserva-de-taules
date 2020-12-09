<?php
include 'config.php';
try{
   $conexion=mysqli_connect('localhost','root','','bd_reserva_mesa');
   $servidor="mysql:dbname=".BD.";host=";SERVIDOR;
   $pdo=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
   //echo "<script> alert('conexion establecida') </script>";
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // Si no existen errores en esta parte de código el catch no se ejecuta
}catch(PDOException $e){
   echo "<script> alert('Error de conexion') </script>";
   echo $e->getMessage();
}
?>


