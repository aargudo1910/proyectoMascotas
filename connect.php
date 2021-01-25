<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'registro_mascotas');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    $sql = "INSERT INTO datos_mascotas (nombre, edad, animal, raza, color) VALUES ('$_POST[nombre]', '$_POST[edad]', '$_POST[animal]', '$_POST[raza]', '$_POST[color]')";
	if ($db->query($sql) === TRUE) {
        echo "Ingreso exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();

?>