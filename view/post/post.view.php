<!--array de imagenes para prueba-->
<?php
$imagenes=array('img/teques1.jpg','img/teques2.jpg','img/teques3.jpg','img/teques4.jpg');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <?php include 'mod/includes.php';?>
    <title>Post</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="css/post/post.css">
    
</head>
<body>

    <?php include 'mod/outnav.php'; ?>
    <?php include "mod/conector.php"; ?>
    <?php include "mod/datosPost.php";?>
    <br>
    <br>
    <div class="container">
        <div class="col-md-12">
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
            <div class="datos-post">
                <h2>Caracteristicas</h2>
                <i class="fa fa-user-times icono" aria-hidden="true"></i> <?php echo $registros['capacity'];?> huespedes<br><br>
                <i class="fas fa-bath" icono></i> <?php echo $registros['baths']?> baños<br><br>
                <i class="fas fa-dollar-sign icono"></i><?php echo $registros['offSeasonPrice']. ".00 por noche";?><br><br>
                <?php if($registros['noInt']!=null):?>
                           <i class="fas fa-map-marker-alt icono"></i><?php echo $registros['address']." #".$registros['noExt'].", interior ".$registros['noInt']." codigo postal: ".$registros['postalCode'];?>
                            <?php else:?>
                            <i class="fas fa-map-marker-alt icono"></i><?php echo $registros['address']." #".$registros['noExt']." codigo postal: ".$registros['postalCode'];?>
                             <?php endif;?>
                <hr>
                <h2>Descripcion</h2><p><?php echo $registros['description']?></p>
                <hr>
                <h2>Servicios</h2>
                <table>              
                <tr class="border_bottom"><td>Agua: </td>                 <td class="Cpor"><?php echo $s1;?></td>
                <tr class="border_bottom"><td>Gas: </td>                  <td class="Cpor"><?php echo $s2;?></td>
                <tr class="border_bottom"><td>Telefono: </td>             <td class="Cpor"><?php echo $s3;?></td>
                <tr class="border_bottom"><td>Cable:</td>                 <td class="Cpor"><?php echo $s4;?></td>    
                <tr class="border_bottom"><td>Wc(Toallas, jabon, papel):  </td><td class="Cpor"><?php echo $s5;?></td>
                <tr class="border_bottom"><td>Wifi:</td>                  <td class="Cpor"><?php echo $s6 ;?></td>
                <tr class="border_bottom"><td>Champo:</td>                <td class="Cpor"><?php echo $s7 ;?></td>
                <tr class="border_bottom"><td>Armario:</td>               <td class="Cpor"><?php echo $s8 ;?></td>
                <tr class="border_bottom"><td>TV:</td>                    <td class="Cpor"><?php echo $s9 ;?></td>
                <tr class="border_bottom"><td>Calefaccion:</td>           <td class="Cpor"><?php echo $s10;?></td>
                <tr class="border_bottom"><td>Aire acondicionado:</td>    <td class="Cpor"><?php echo $s11;?></td>
                <tr class="border_bottom"><td>Desayuno:</td>              <td class="Cpor"><?php echo $s12;?></td>
                <tr class="border_bottom"><td>Escritorio:</td>            <td class="Cpor"><?php echo $s13;?></td>
                <tr class="border_bottom"><td>Chimenea:</td>              <td class="Cpor"><?php echo $s14;?></td>
                <tr class="border_bottom"><td>Plancha:</td>               <td class="Cpor"><?php echo $s15;?></td>
                <tr class="border_bottom"><td>Secador de pelo:</td>       <td class="Cpor"><?php echo $s16;?></td>
                <tr class="border_bottom"><td>Entrada:</td>               <td class="Cpor"><?php echo $s17;?></td>
                <tr class="border_bottom"><td>Piscina:</td>               <td class="Cpor"><?php echo $s18;?></td>
                <tr class="border_bottom"><td>Cocina:</td>                <td class="Cpor"><?php echo $s19;?></td>
                <tr class="border_bottom"><td>Lavadora:</td>              <td class="Cpor"><?php echo $s20;?></td>
                <tr class="border_bottom"><td>Secadora:</td>              <td class="Cpor"><?php echo $s21;?></td>
                <tr class="border_bottom"><td>Estacionamiento:</td>       <td class="Cpor"><?php echo $s22;?></td>
                <tr class="border_bottom"><td>Ascensor:</td>              <td class="Cpor"><?php echo $s23;?></td>
                <tr class="border_bottom"><td>Jacuzzi:</td>               <td class="Cpor"><?php echo $s24;?></td>
                <tr class="border_bottom"><td>Gimnasio:</td>              <td class="Cpor"><?php echo $s25;?></td>
                </table>
                <hr>    
                <input type="hidden" id="address"    value="Tequesquitengo guadalupe victoria" />
                
                   <h2>Mapa</h2>
                <div id="map">
                
                </div>
                
                
                <script src="script/post/mapa.js" ></script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCn2wINQM98UYPx2oQkv-MPvGvMf0_BqM&callback=initMap"></script>
                <br>
                <input type="submit" name="submit" class="submit btn btn-success" value="Reservar" id="submit_data" />
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>