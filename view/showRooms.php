<?php   
require_once '../controller/filterRooms.php';

// print_r($filter);

echo "<thead>";

    echo "<tr>";           
        
    if(isset($salas)){        
        echo "<th COLSPAN=6 id='idSala' class='text-center'> Sala {$salas->getId_sala()}</th>";
    }else{
        echo "<th COLSPAN=6 class='text-center'> Total de reservas</th>";
    }                                               
    
    echo "</tr>";            

    echo "<tr>"; 

        echo "<th class='text-center'>numero de reserva</th>";
        echo "<th class='text-center'>numero de mesa</th>";
        echo "<th class='text-center'>dia de reserva</th>";
        echo "<th class='text-center'>hora de entrada</th>";
        echo "<th class='text-center'>hora de salida</th>";        

    echo "</tr>";

echo "</thead>";                     

echo "<tbody>";

foreach($filter  as $reserva){
        echo "<tr>";
                echo "<td class='text-center'>{$reserva['id_reserva']}</td>";                        
                echo "<td class='text-center'>{$reserva['id_mesa']}</td>";
                echo "<td class='text-center'>{$reserva['dia_reserva']}</td>";
                echo "<td class='text-center'>{$reserva['hora_entrada_reserva']}</td>";
                echo "<td class='text-center'>{$reserva['hora_salida_reserva']}</td>";                                   
        echo "</tr>";            
};

echo"</tbody>";

?>