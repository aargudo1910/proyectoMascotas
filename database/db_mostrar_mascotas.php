<?php include("../db.php");

    $sql = "SELECT nombre, edad, animal, raza, color from mascotas";
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