<?php include("../db.php");

    $sql = "SELECT idsolicitud, estado from solicitud";
    $result = $db-> query($sql);

    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row['idsolicitud'] ."</td><td>". $row['estado'] ."</td><td>";
        }
        echo"</table>";
    }
    else{
        echo "0 result";
    }
    $db-> close()
?>