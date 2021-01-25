<!DOCTYPE html>
<html>
    <head>
        <title>
            MOSTRAR MASCOTAS
        </title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <h1>MASCOTAS DISPONIBLES</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Animal</th>
                <th>Raza</th>
                <th>Color</th>
            </tr>
            <?php 
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'registro_mascotas');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if($db->connect_error){
        die("connection failed: " . $db->connect_error);
    }

    $sql = "SELECT nombre, edad, animal, raza, color from datos_mascotas";
    $result = $db-> query($sql);

    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row['nombre'] ."</td><td>". $row['edad'] ."</td><td>". $row['animal'] ."</td><td>". $row['raza'] ."</td><td>". $row['color'] ."</td></tr>";
        }
        echo"</table>";
    }
    else{
        echo "0 result";
    }
    $db-> close()
?>
        </table>
    </body>
</html>