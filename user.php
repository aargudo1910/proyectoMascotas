<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            PET-FINDER
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style5.css">
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
        <a class="b" id="salir" href="/solicitud/index.php"><input type="button" id="p" value="Crear Solicitud"></a>
        <a href="../index.php"><input type="button" value="Cerrar sesión"></a>
    </body>
</html>