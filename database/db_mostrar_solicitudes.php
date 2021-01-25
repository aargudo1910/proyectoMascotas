<?php include("../db.php");

    $sql = "SELECT idsolicitud, estado from solicitud";
    $result = $db-> query($sql);

    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row['idsolicitud'] ."</td><td>". $row['estado'] .
            "</td><td>
            <form action='../solicitud/verificar_solicitud.php' method='POST'>
            <input name='cedula' type='hidden' value='".$row['idsolicitud']."'>
            <select name='verificar'>
            <option selected='true' disabled='disabled'>Verifique</option>
            <option>ACEPTAR</option>
            <option>RECHAZAR</option>
            </select> 
            <input type='submit' value='Verificar'> 
            </form>
            </td>
            <td>"  ;
        }
    }
    else{
        echo "0 result";
    }
    $db-> close()
?>