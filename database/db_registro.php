<?php 
include("../db.php");
$sql_registro = "INSERT INTO mascotas (nombre, edad, animal, raza, color) VALUES ('$_POST[nombre]', '$_POST[edad]', '$_POST[animal]', '$_POST[raza]', '$_POST[color]')";
	if ($db->query($sql_registro) === TRUE) {
        echo "Ingreso exitoso";
    } else {
        echo "Error: " . $sql_registro . "<br>" . $db->error;
    }

    $db->close();
?>