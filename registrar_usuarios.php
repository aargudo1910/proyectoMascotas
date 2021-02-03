<!DOCTYPE html>
<html>
    <head>
        <title>
            Registrar usuarios
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style.css">
    </head>
    <body>
        <div class="form">
            <form action="../database/db_registro_usuarios.php" method="POST">
                <h2>REGISTRO DE USUARIOS</h2>
                <br>
                <p>Usuario</p>
                <input type="text" name="username" placeholder="Ingrese el usuario" required>
                <br>
                <p>Email</p>
                <input type="text" name="email" placeholder="Ingrese el email" required>
                <br>
                <p>Tipo de usuario</p>
                <input type="text" name="usertype" placeholder="Ingrese el tipo de usuario" required>
                <br>
                <p>Contraseña</p>
                <input type="password" name="password" placeholder="Ingrese la contraseña" required>
                <br>
                <p>Confirme su contraseña</p>
                <input type="password" name="confpassword" placeholder="Ingrese de nuevo la contraseña" required>
                <br>
                <br>
                <input type="submit" value="Crear usuario">
            </form>
            <a href="../admin.php"><input type="button" value="Atras"></a>
        </div>
    </body>
</html>