<?php 
require_once '../model/mesas.php'; 
require_once '../model/mesasDAO.php'; 
/*    
echo $_GET['id_mesa']."<br>"; // id de la mesa
echo $_GET['id_sala']; // id de la sala
*/

$mesas = new Mesas();
// if ($mesas->setId_sala($_GET['id_sala'])){
//     echo "Todo correcto";
// } else {
//     echo "Hay algun error";
// }
$mesas->setId_sala($_GET['id_sala']);
$mesas->setId_mesa($_GET['id_mesa']);
$mesasDAO = new MesasDao(); 
$mesasDAO->newAliberar($_GET['id_mesa']);

?>