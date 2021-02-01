<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            PET-FINDER
        </title>
        <link rel="stylesheet" type="text/css" href="../includes/style3.css">
    </head>
    <body style="background-image: url('../Recursos/background.jpg');">
        <div id="div_general">
            <h1>PET-FINDER</h1>
            <form id="id_global" action="../database/verificauser.php" method="POST">
                <input class="user" type="text" name="email" placeholder="Ingrese usuario" required>
                <input class="user" type="text" name="password" placeholder="Ingrese contraseña" required>
                <input id="boton_is" type="submit" value="Iniciar Sesión">
                <a id="registro">Registrarse</a>
            </form>
        </div>
    </body>
</html>