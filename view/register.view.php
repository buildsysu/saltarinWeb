<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'mod/outincludes.php'; ?>
    <title>Saltarin - Registro</title>
    <meta charset = "utf-8">
    <script src="script/js/register.js"></script>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

    <?php include 'mod/outnav.php'; ?>
    <div class="registerForm">
        <div class="form-group">
            <form id="registerForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="register">
                <h3>Comienza tu viaje</h3>
                <br />
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                            <input type="text" name="username" maxlength="45" placeholder="Usuario" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" maxlength="45" placeholder="Contraseña" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-quote-left"></i></span>
                            <input type="text" name="name" maxlength="45" placeholder="Nombre" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="input-group">
                            <!--Password-->
                            <span class="input-group-addon"><i class="fas fa-quote-left"></i></span>
                            <input type="text" name="lastname" maxlength="45" placeholder="Apellido" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="input-group">
                            <!--Password-->
                            <span class="input-group-addon"><i class="fas fa-at"></i></span>
                            <input type="text" name="email" maxlength="45" placeholder="E-mail" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="input-group">
                            <!--Password-->
                            <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                            <input type="text" name="phone" maxlength="45" placeholder="Teléfono" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <button type="submit" name="submit" class="btn btn-success" onclick="register.User()"><span class="fa fa-user-plus"></span> Registrarme</button>
                            </div>
                            <div class="btn-group">
                                <button type="reset" name="clear" class="btn btn-warning"><span class="fas fa-backspace"></span> Borrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php if(!empty($errores)): ?>
                    <div class="alert alert-warning">
                        <ul class="text-center">
                            <?php echo $errores; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                </form>
                <h5 class="text-center">¿Ya tienes cuenta? <a href="index.php">Inicia Sesión</a></h4>
            </div>
        </div>
    </body>
    </html>
