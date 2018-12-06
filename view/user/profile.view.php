<!DOCTYPE html>

<html lang="en">

<head>
    <?php include '../mod/inincludes.php'; ?>
    <title>Saltarin - Registro</title>
    <meta charset = "utf-8">
    <script src="../script/user/profile.js"></script>
    <link rel="stylesheet" href="../css/user/profile.css">
</head>
<body>
    <?php include '../mod/innav.php'; ?>
    <br>
    <br>
    <div class="col-md-6 col-md-offset-3 container">
        <div class="row">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                <div class="col-md-4">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="profile-photo">
                            <img id="profilePhoto" src="<?php echo $profilePicture ?>" alt="">
                        </div>
                    </div>
                    <?php if($edition): ?>
                        <div class="col-md-10 col-md-offset-1">
                            <br>
                            <label for="photo"><i class="fas fa-upload"></i> <span id="photoName">Sube tu foto</span></label>
                            <span class="photo">
                                <input type="file" name="photo" id="photo" onchange="photoName()">
                            </span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1><span class="fas fa-user-circle"></span> <?php echo $user['name'] . " " . $user['lastname']; ?></h1>
                            <h3><?php echo $user['username']; ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <!--Password-->
                                <span class="input-group-addon"><i class="fas fa-at"></i></span>
                                <input type="text" id="email" name="email" maxlength="45" placeholder="E-mail" class="form-control"
                                value="<?php echo $user['email']; ?>" required
                                <?php if(!$edition): ?>
                                    disabled
                                <?php endif; ?>
                                >
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <!--Password-->
                                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                                <input type="text" name="phone" maxlength="45" placeholder="Teléfono" class="form-control"
                                value="<?php echo $user['phone']; ?>" required
                                <?php if(!$edition): ?>
                                    disabled
                                <?php endif; ?>
                                >
                            </div>
                        </div>
                    </div>
                    <?php if($edition): ?>
                        <br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="lastpass" maxlength="45" placeholder="Contraseña actual" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" maxlength="45" placeholder="Nueva contraseña" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-info btn-md"><span class="fas fa-user-edit"></span> Editar perfil</button>
                            </div>
                        </div>
                        <?php if(!empty($errores)): ?>
                            <br>
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    <ul>
                                        <?php echo $errores; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6 col-md-offset-3 container" style="margin-top: 20px;">
        <h4><i class="fas fa-home"></i> Casas registradas</h4>
        <ul>
            <li>No hay casas registradas.</li>
        </ul>
    </div>
    <div class="col-md-6 col-md-offset-3 container" style="margin-top: 20px; margin-bottom: 40px;">
        <h4><i class="fas fa-warehouse"></i> Casas rentadas</h4>
        <ul>
            <li>No hay casas rentadas.</li>
        </ul>
    </div>
</body>
</html>
