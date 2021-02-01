<!DOCTYPE html>
<html>
    <head>
        <title>
            MOSTRAR SOLICITUDES
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style2.css">
    </head>
    <body>
        <h1>SOLICITUDES EN PROCESO</h1>
        
        <table>
            <tr>
                <th name="cedula">Cedula </th>
                <th>Estado</th>
            </tr>
            <?php 
            include("../database/db_mostrar_solicitudes.php");
            ?>
        </table>
        <a href="../admin.php"><input type="button" value="Atras"></a>
    </body>
</html>