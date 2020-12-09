<?php   
require_once '../model/incidenciasDAO.php';
$incidenciasVar= new incidenciasDAO;
// print_r($filter);

echo "<thead>";

    echo "<tr>";           
             
        echo "<th COLSPAN=5 id='idSala' class='text-center'>Incidencias</th>";                                           
    
    echo "</tr>";            

    echo "<tr>"; 

        echo "<th class='text-center'>ID Incidencia</th>";
        echo "<th class='text-center'>Número de Mesa</th>";
        echo "<th class='text-center'>Descripción</th>"; 
        echo "<th class='text-center'>Disponibilidad</th>";
        echo "<th class='text-center'>Eliminar Incidencia</th>"; 

    echo "</tr>";

echo "</thead>";                      

echo "<tbody>";

foreach($incidenciasVar->mostrarTablaInc() as $incid){
        echo "<tr>";
                echo "<td class='text-center'>{$incid['id_inc']}</td>";                        
                echo "<td class='text-center'>{$incid['id_mesa']}</td>";
                echo "<td class='text-center'>{$incid['descrip']}</td>";
                echo "<td class='text-center'>{$incid['dispo']}</td>";
                echo "<td class='text-center'><a href='../controller/eliminarController.php?id_mesa={$incid['id_mesa']} '>Eliminar</a></td>";                        
        echo "</tr>";            
};

echo"</tbody>";

?>
