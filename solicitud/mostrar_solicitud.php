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
                <th>Cedula</th>
                <th>Estado</th>
            </tr>
            <?php 
            include("../database/db_mostrar_solicitudes.php");
            ?>
        </table>
    </body>
</html>