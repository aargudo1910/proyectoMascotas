<?php 
include("../db.php");
$sql_usuario = "INSERT INTO users (cedula,username,email) VALUES ('$_POST[cedula]','$_POST[nombre]', '$_POST[correo]')";
	if ($db->query($sql_usuario) === TRUE) {
        include '../user.php';
    } else {
        echo "Error: " . $sql_usuario . "<br>" . $db->error;
    }

$sql_solicitud = "INSERT INTO solicitud (idsolicitud,estado) VALUES ('$_POST[cedula]', 'PENDIENTE')";
	if ($db->query($sql_solicitud) === TRUE) {
        include '../user.php';
    } else {
        echo "Error: " . $sql_solicitud . "<br>" . $db->error;
    }

    $db->close();
?>