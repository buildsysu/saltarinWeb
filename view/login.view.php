<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'mod/outincludes.php';
        echo isset($_SESSION['username'])
    ?>
    <title>Saltarin - Registro</title>
    <meta charset = "utf-8">
    <script src="script/js/login.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php include 'mod/outnav.php'; ?>
    <div class="loginForm">
        <div class="form-group">
            <form id="loginForm" action="" method="POST">
                <h3>Inicia sesión</h3>
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
                            <div class="input-group-btn">
                                <button class="btn btn-warning" type="submit">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if(!empty($errores)): ?>
                    <div class="alert alert-warning">
                        <ul>
                            <?php echo $errores; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </form>
            <h5 class="text-center">¿No tienes cuenta? <a href="register.php">Únete</a></h4>
        </div>
    </div>
</body>
</html>
