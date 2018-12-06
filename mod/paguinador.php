<?php
    
    require_once('inc/config/Tools.php');
    
    require_once('inc/config/config.php');
    
    require_once('inc/controllers/HousesDto.php');
    
    $casasConn= new HousesDto();
    if (!isset($_GET['pagina'])){
        $_SESSION['rooms']=null;
        $_SESSION['baths']=null;
        header('Location: index.php?pagina=1');
    }
    
    $pagina=isset($_GET['pagina']) ? (int)$_GET['pagina']:1;    
    $regpagina=3;
    $inicio=($pagina>1) ? (($pagina * $regpagina)-$regpagina):0;
    
    $rooms=isset($_SESSION['rooms']) ? (int)$_SESSION['rooms']:-1;
    
    $from=isset($_SESSION['from']) ? (int)$_SESSION['from']:-1;
    $to=isset($_SESSION['to']) ? (int)$_SESSION['to']:-1;
    $baths=isset($_SESSION['baths']) ? (int)$_SESSION['baths']:-1;
    $nhost=isset($_SESSION['nhost']) ? (int)$_SESSION['nhost']:-1;
    
    //$registros=$pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM casas_ejemplo LIMIT $inicio , $regpagina");
    
    //$registros->execute();
   
    //$registros=$registros->fetchAll();    $ini,$fin,$rooms,$from,$to,$baths,$nhost
   /* if(isset($_GET['rooms'])){
        
        
    }
    else{
        $registros=$casasConn->readLimit($inicio,$regpagina);
        $totalregistros=$casasConn->foundRows($inicio,$regpagina);
    }*/
   // $registros=$casasConn->readLimit($inicio,$regpagina);
    $registros=$casasConn->readLimitFiltro($inicio,$regpagina,$rooms,$from,$to,$baths,$nhost);
    $totalregistros=$casasConn->foundRowsFiltro($inicio,$regpagina,$rooms,$from,$to,$bath,$nhost);
    //$totalregistros=$pdo->query("SELECT FOUND_ROWS() AS total");
    
    $totalregistros=$totalregistros->fetch()['total'];
    $numeropaginas=ceil($totalregistros/$regpagina);  
    
    //echo "<h5>hay :" .$totalregistros." Registros</h5>";
    
?>