<!--array de imagenes para prueba-->
<?php
$imagenes=array('img/teques1.jpg','img/teques2.jpg','img/teques3.jpg','img/teques4.jpg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'mod/includes.php';?>
    <title>Post</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="css/post/post.css">
</head>
<body>
    <?php include 'mod/outnav.php'; ?>
    <?php include "mod/conector.php"; ?>
    <br>
    <br>
    <div class="container">
    <div class"col-md-12">
    <!--bolitas jijiji-->
      <div id="carousel-1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php $cnt=0; foreach($imagenes as $img):?>
          <li data-target="#carrousel-1" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
          <?php $cnt++; endforeach; ?>
        </ol>
        <!--imagenes-->
        <div class="carousel-inner" role="listbox">

           <?php $cnt=0; foreach($imagenes as $img):?>
          <div class="item <?php if($cnt==0){ echo 'active'; }?>">
             <img src="<?php echo $img;?>" class="img-responsive" alt="">
          </div>
          <?php $cnt++; endforeach; ?>
        <!--controles-->
          <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>

        </div>
      </div>
    </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>