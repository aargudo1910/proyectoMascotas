<!DOCTYPE html>
<html>
    <head>
        <title>
            INGRESO DE MASCOTAS
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style.css">
    </head>
    <body>
        <div class="form2">
            <form action="../database/db_solicitud.php" method="POST">
                <h2>SOLICITUD DE ADOPCIÓN</h2>
                <br>
                <p>Cedula</p>
                <input type="text" name="cedula" placeholder="Ingrese el nombre de la mascota" required>
                <br>
                <p>Nombre</p>
                <input type="text" name="nombre" placeholder="Ingrese el nombre de la mascota" required>
                <br>
                <p>Apellido</p>
                <input type="text" name="apellido" placeholder="Ingrese la edad de la mascota" required>
                <br>
                <p>Correo</p>
                <input type="text" name="correo" placeholder="Ingrese que animal es su mascota" required>
                <br>
                <p>Número de teléfono</p>
                <input type="text" name="telefono" placeholder="Ingrese que raza es su mascota" required>
                <br>
                <p>Ciudad</p>
                <input type="text" name="ciudad" placeholder="Ingrese de que color es su mascota" required>
                <br>
                <p>Direccion</p>
                <input type="text" name="direccion" placeholder="Ingrese de que color es su mascota" required>
                <br>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>