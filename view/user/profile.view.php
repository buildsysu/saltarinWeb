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
            <div class="col-md-4">
                <div class="profile-photo">
                    <img id="profilePhoto" src="<?php echo $profilePicture ?>" alt="">
                </div>
                <div class="text-center" id="upload">
                    <br>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                        <label class="photoButton" for="photo"><i class="fas fa-upload"></i> <span id="photoName">Sube tu foto</span></label>
                        <span class="photo">
                            <input type="file" name="photo" id="photo" onchange="photoName()">
                        </span>
                        <button type="submit" class="photoUpload"><span class="fas fa-arrow-up"></span></button>
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
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <h1><?php echo $user['name'] . " " . $user['lastname']; ?></h1>
                <article class="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </article>
            </div>
        </div>
    </div>
</body>
</html>
