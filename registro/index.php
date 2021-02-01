<!DOCTYPE html>
<html>
    <head>
        <title>
            INGRESO DE MASCOTAS
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style.css">
    </head>
    <body>
        <div class="form">
            <form action="../database/db_registro.php" method="POST">
                <h2>REGISTRO DE MASCOTAS</h2>
                <br>
                <p>Nombre</p>
                <input type="text" name="nombre" placeholder="Ingrese el nombre de la mascota" required>
                <br>
                <p>Edad</p>
                <input type="text" name="edad" placeholder="Ingrese la edad de la mascota" required>
                <br>
                <p>Animal</p>
                <input type="text" name="animal" placeholder="Ingrese que animal es su mascota" required>
                <br>
                <p>Raza</p>
                <input type="text" name="raza" placeholder="Ingrese que raza es su mascota" required>
                <br>
                <p>Color</p>
                <input type="text" name="color" placeholder="Ingrese de que color es su mascota" required>
                <br>
                <br>
                <input type="submit" value="Enviar">
            </form>
            <a href="../admin.php"><input type="button" value="Atras"></a>
        </div>
    </body>
</html>