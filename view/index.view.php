<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_SESSION['rooms'])){
    
}
else{$_SESSION['rooms'] = $_POST['rooms'];}
if (isset($_SESSION['baths'])){
    
}else{
    $_SESSION['baths'] = $_POST['baths'];
}



?>
<head>
    <?php include 'mod/includes.php'; ?>
    <title>Saltarin</title>
    <meta charset = "utf-8">
    
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include 'mod/nav.php'; ?>
    <br>
    <br>
    <?php
        include "mod/conector.php";
        include "mod/paguinador.php"; 
        include "mod/rating.php";       
    ?>
    <div class="contenido">
        <main>
            <!--comienza cada post-->
        <?php 
            if($totalregistros>=1):
            foreach ($registros as $reg):?>
                <article>            
                    
                    <div class="imagen">                        
                        <img src="img/teques1.jpg" class="img-thumbnail" alt="Cinque Terre">                       
                    </div>
                    <div class="text-center">
                    <?php Rating($reg['rating']);?>
                    </div>
                    <table class="datos">
                        <tr class="border_bottom">
                            <td><i class="fa fa-user-times icono" aria-hidden="true"></i></td><td> <h3><?php echo $reg['capacity'];?> huespedes</h3></td>
                        </tr>                        
                        <tr class="border_bottom">
                            <td><i class="fas fa-dollar-sign icono"></i></td><td> <h3><?php echo $reg['offSeasonPrice']. ".00 por noche";?></h3></td>
                        </tr>
                        <tr class="border_bottom">
                            <?php if($reg['noInt']!=null):?>
                            <td><i class="fas fa-map-marker-alt icono"></i></td><td> <h3><?php echo $reg['address']." #".$reg['noExt'].", interior ".$reg['noInt']." codigo postal: ".$reg['postalCode'];?></h3></td>
                            <?php else:?>
                            <td><i class="fas fa-map-marker-alt icono"></i></td><td> <h3><?php echo $reg['address']." #".$reg['noExt']." codigo postal: ".$reg['postalCode'];?></h3></td>
                             <?php endif;?>
                        </tr>
                        <tr class="border_bottom">
                            <td><i class="fas fa-info-circle icono"></i></td><td> <h3><?php echo $reg['description'];?></h3></td>
                        </tr>  
                        
                    </table>    
                                 <br>     
                    <a href="post.php?id=<?php echo $reg['idHouses'];?>" class="btn btn-info" >ver detalles</a>
                    
                </article>
        <?php 
            endforeach;
            else:
        ?>
            <p><h1>No hay registros</h1><p>
        <?php endif;?>
<!--Comienza el paguinador-->
        <?php if($totalregistros>=1): ?> 
        <div class="pager" class="text-center">
        <ul class="">
            <?php if($pagina==1): ?>
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php else: ?>
            <li>
                <a href="index.php?pagina=<?php echo $pagina-1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php 
                endif;

                for($i=1; $i<=$numeropaginas; $i++){
                    if($pagina==$i){
                        echo '<li class="active">
                            <a href="index.php?pagina='.$i.'">'.$i.'</a>
                        </li>';
                    }else{
                        echo '<li>
                            <a href="index.php?pagina='.$i.'">'.$i.'</a>
                        </li>';
                    }
                }

                if($pagina==$numeropaginas): 
            ?>
            <li class="disabled">
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <?php else: ?>
            <li>
                <a href="index.php?pagina=<?php echo $pagina+1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
                </div>
    <?php endif; ?>          
        </main>


    
    
    <!--comienza el aside filtros-->
        <aside class="sidebar">
            
            <h2>Filtros</h2>
                
                <div class="filtros">
                    <form action="" method="post">
                    <h4>Precio</h4>De
                    <input class="precio" type="number" min="0" name="from" placeholder="500" step="200" >
                    
                    <input class="precio" type="number" min="0" name="to" placeholder="1000" step="200">
                    <h4>Huespedes</h4>
                    <input class="huespedes" type="number" min="1" name="host" placeholder="3">
                    <h4>baños</h4>
                    <input class="baños" type="number" min="1" name="baths" value="<?php echo $_SESSION['baths'];?>" placeholder="2">
                    <h4>Recamaras</h4>
                    <input class="recamaras" type="number" min="1" name="rooms" value="<?php echo $_SESSION['rooms'];?>"  placeholder="2">
                    <br>
                    
                    <input type="submit"> 
                    
                    </form>  
                </div>

        </aside>
    </div> <!--contenido-->
</body>
</html>
