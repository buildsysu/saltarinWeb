<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'mod/includes.php'; ?>
    <title>Saltarin - Registro</title>
    <meta charset = "utf-8">
    <script src="script/js/index.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <?php include 'mod/nav.php'; ?>
    <div class="registerForm">
        <div class="form-group">
            <form id="registerForm" action="script/php/register.php" method="POST">

                <h3>Crea una cuenta</h3>
                <br />
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <!--Nombre Usuario-->
                            <label for="username">Nombre de Usuario:</label><br>
                            <input type="text" name="username" maxlength="45" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <!--Password-->
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" maxlength="45" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <!--Password-->
                            <label for="name">Nombre:</label><br>
                            <input type="text" name="name" maxlength="45" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <!--Password-->
                            <label for="lastname">Apellido:</label><br>
                            <input type="text" name="lastname" maxlength="45" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <!--Password-->
                            <label for="email">E-mail:</label><br>
                            <input type="text" name="email" maxlength="45" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <!--Password-->
                            <label for="phone">Teléfono:</label><br>
                            <input type="text" name="phone" maxlength="45" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br /><br/><br/>
                <button type="submit" name="submit" class="btn btn-success" onclick="registerUser()"><span class="fa fa-user-plus"></span> Registrarme</button>
                <button type="reset" name="clear" class="btn btn-warning"><span class="fas fa-backspace"></span> Borrar</button>

            </form>
        </div>
    </div>
</body>
</html>
