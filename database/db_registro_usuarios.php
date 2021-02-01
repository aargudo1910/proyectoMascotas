<?php 
include("../db.php");
$sql_registro_usuarios = "INSERT INTO users (username, email, usertype, password) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[usertype]', '$_POST[password]')";
	if ($db->query($sql_registro_usuarios) === TRUE) {
        include '../admin.php';
    } else {
        echo "Error: " . $sql_registro_usuarios . "<br>" . $db->error;
    }

    $db->close();
?>