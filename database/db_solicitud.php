<?php 
include("../db.php");
$sql_usuario = "INSERT INTO usuario (cedula,nombre, apellido, correo, num_telefono, ciudad, direccion) VALUES ('$_POST[cedula]','$_POST[nombre]', '$_POST[apellido]', '$_POST[correo]', '$_POST[telefono]', '$_POST[ciudad]', '$_POST[direccion]')";
	if ($db->query($sql_usuario) === TRUE) {
        echo "Ingreso exitoso tabla usuario<br>";
    } else {
        echo "Error: " . $sql_usuario . "<br>" . $db->error;
    }

$sql_solicitud = "INSERT INTO solicitud (idsolicitud,estado) VALUES ('$_POST[cedula]', 'PENDIENTE')";
	if ($db->query($sql_solicitud) === TRUE) {
        echo "Ingreso exitoso tabla solicitud";
    } else {
        echo "Error: " . $sql_solicitud . "<br>" . $db->error;
    }

    $db->close();
?>