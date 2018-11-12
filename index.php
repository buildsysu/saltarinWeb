<!DOCTYPE html>

<html lang="en">

    <head>
        <?php include 'mod/includes.php'; ?>
        <title>Saltarin - Registro</title>
        <meta charset = "utf-8">
        <script src="script/js/index.js"></script>
    </head>
    <body>

        <?php include 'mod/nav.php'; ?>

        <form action="registrar-usuario.php" method="post">

            <hr />
            <h3>Crea una cuenta</h3>

            <!--Nombre Usuario-->
            <label for="nombre">Nombre de Usuario:</label><br>
            <input type="text" name="username" maxlength="32" required>
            <br/><br/>

            <!--Password-->
            <label for="pass">Password:</label><br>
            <input type="password" name="password" maxlength="8" required>

            <br/><br/>
            <input type="submit" name="submit" value="Registrarme">
            <input type="reset" name="clear" value="Borrar">

        </form>

        <hr /><br />


    </body>
</html>
