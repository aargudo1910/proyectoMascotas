<!DOCTYPE html>
<html>
    <head>
        <title>
            MOSTRAR MASCOTAS
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style2.css">
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
            include("../database/db_mostrar_mascotas.php");
            ?>
        </table>
    </body>
</html>