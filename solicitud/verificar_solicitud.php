<?php 
include("../db.php");
$sql = "SELECT idsolicitud from solicitud";
    $result = $db-> query($sql);

    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            if($_POST['cedula'] == $row['idsolicitud']){
                $sql_solicitud = "UPDATE `fundacion`.`solicitud` SET `estado` = '$_POST[verificar]' WHERE (`idsolicitud` = '$row[idsolicitud]')";
                if ($db->query($sql_solicitud) === TRUE) {
                    echo "Se ha verificado la solicitud";
                    header('Location:mostrar_solicitud.php');
                } else {
                    echo "Error: " . $sql_solicitud . "<br>" . $db->error;
                }
            }
        }
    }
    else{
        echo "0 result";
    }

    $db->close();
?>