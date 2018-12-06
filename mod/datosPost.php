<?php

require_once('inc/config/Tools.php');
    
require_once('inc/config/config.php');

require_once('inc/controllers/HousesDto.php');

$casasConn= new HousesDto();
    
    $id=$_GET['id'];    
    

    
    //$registros=$pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM casas_ejemplo LIMIT $inicio , $regpagina");
    
    //$registros->execute();
   
    //$registros=$registros->fetchAll();
    $registros=$casasConn->readbyid($id);
    
    $address=$registros['address']." #".$registros['noExt'].", interior ".$registros['noInt']." codigo postal: ".$registros['postalCode'];
    $servicios=$casasConn->readServicesbyid($registros['fk_idServices']);
    //$totalregistros=$pdo->query("SELECT FOUND_ROWS() AS total");
    
    
    $s1 =SioNo($servicios[1]);
    $s2 =SioNo($servicios[2]);
    $s3 =SioNo($servicios[3]);
    $s4 =SioNo($servicios[4]);
    $s5 =SioNo($servicios[5]);
    $s6 =SioNo($servicios[6]);
    $s7 =SioNo($servicios[7]);
    $s8 =SioNo($servicios[8]);
    $s9 =SioNo($servicios[9]);
    $s10=SioNo($servicios[10]);
    $s11=SioNo($servicios[11]);
    $s12=SioNo($servicios[12]);
    $s13=SioNo($servicios[13]);
    $s14=SioNo($servicios[14]);
    $s15=SioNo($servicios[15]);
    $s16=SioNo($servicios[16]);
    $s17=SioNo($servicios[17]);
    $s18=SioNo($servicios[18]);
    $s19=SioNo($servicios[19]);
    $s20=SioNo($servicios[20]);
    $s21=SioNo($servicios[21]);
    $s22=SioNo($servicios[22]);
    $s23=SioNo($servicios[23]);
    $s24=SioNo($servicios[24]);
    $s25=SioNo($servicios[25]);

    
   
    
   function SioNo($servicio)
   {
       if ($servicio==1){
        $valor='<i class="fas fa-check-circle"></i>';
       }
       else{
        $valor='<i class="fas fa-times-circle"></i>';
       }
       
       return $valor;
   }
    
?>