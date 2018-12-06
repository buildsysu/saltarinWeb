<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <?php include 'mod/includes.php';?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style type="text/css">
   #regiration_form fieldset:not(:first-of-type) {
       display: none;
   }
 </style>
 <link rel="stylesheet" href="css/agregarCasa/agregarCasa.css">
 <title>Agregar una casa</title>
</head>
<body>
    <?php include 'mod/outnav.php'; ?>
    <?php include "mod/conector.php"; ?>
    <br>
    <br>
 <div class="container">
   <h1></h1>
   <div class="progress">
       <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
   </div>
   
   <form id="regiration_form" novalidate action="view/agregarCasa/action.php"  method="post">
   <!--Direccion de casa-->
   <fieldset>
       <h2>Paso 1: Direccion de la casa</h2>
       <div class="form-group">
       <label for="text">Direccion</label>
       <input type="text" class="form-control" id="direccion" name="data[direccion]" placeholder="ej. Rodrigo cifuentes col. san jose insurgentes">
     </div>
     <div class="form-group">
       <label for="text">Numero Exterior</label>
       <input type="text" class="form-control" id="noExt"name="data[noExt]" placeholder="34">
     </div>
     <div class="form-group">
       <label for="text">Numero Interior</label>
       <input type="text" class="form-control" id="noInt"name="data[noInt]" placeholder="11">
     </div>
     <div class="form-group">
       <label for="text">Codigo postal</label>
       <input type="text" class="form-control" id="postalCode"name="data[postalCode]" placeholder="03900">
     </div>
       <input type="button"  class="next btn btn-info" value="Siguiente" />
   </fieldset>
<!--Caracteristicas de casa-->
   <fieldset>
       <h2> Paso 2: Caracteristicas</h2>
    <div class="form-group">
       <label for="text">Numero de recamaras</label>
       <input type="text" class="form-control" name="data[rooms]" id="rooms" placeholder="ej. 4">
     </div>
     <div class="form-group">
       <label for="text">Numero de baños</label>
       <input type="text" class="form-control" name="data[baths]" id="baths" placeholder="ej. 2">
     </div>
     <div class="form-group">
       <label for="text">Descripcion</label>
       <textarea rows="5" class="form-control" name="data[descripcion]" id="descripcion" placeholder="ej. Bonita casa, amplia con 4 habitaciones y vista al lago"></textarea>
     </div>
       <input type="button" name="previous" class="previous btn btn-default" value="Anterior" />
       <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
   </fieldset>

<!--Servicios de casa-->
   <fieldset>
       <h2>Paso 3: Servicios</h2>
       <!--valor por defaul de checkbox-->
        <input type="hidden" name="servicios[wc]"           value="0" />
        <input type="hidden" name="servicios[wifi]"         value="0" />
        <input type="hidden" name="servicios[champu]"       value="0" />
        <input type="hidden" name="servicios[armario]"      value="0" />
        <input type="hidden" name="servicios[tv]"           value="0" />
        <input type="hidden" name="servicios[calefaccion]"  value="0" />
        <input type="hidden" name="servicios[aire]"         value="0" />
        <input type="hidden" name="servicios[desayuno]"     value="0" />
        <input type="hidden" name="servicios[escritorio]"   value="0" />
        <input type="hidden" name="servicios[chimenea]"     value="0" />
        <input type="hidden" name="servicios[plancha]"      value="0" />
        <input type="hidden" name="servicios[secadorPelo]"  value="0" />
        <input type="hidden" name="servicios[entrada]"      value="0" />
        <input type="hidden" name="servicios[piscina]"      value="0" />
        <input type="hidden" name="servicios[cocina]"       value="0" />
        <input type="hidden" name="servicios[lavadora]"     value="0" />
        <input type="hidden" name="servicios[secadora]"     value="0" />
        <input type="hidden" name="servicios[aparcamiento]" value="0" />
        <input type="hidden" name="servicios[ascensor]"     value="0" />
        <input type="hidden" name="servicios[jacuzzi]"      value="0" />
        <input type="hidden" name="servicios[gimnasio]"     value="0" />


        <input type="checkbox" name="servicios[wc]"             value="1"> Wc(Toallas, jabon, papel) <br>
        <input type="checkbox" name="servicios[wifi]"           value="1"> Wifi<br>
        <input type="checkbox" name="servicios[champu]"         value="1"> Champo<br>
        <input type="checkbox" name="servicios[armario]"        value="1"> Armario<br>
        <input type="checkbox" name="servicios[tv]"             value="1"> TV<br>
        <input type="checkbox" name="servicios[calefaccion]"    value="1"> Calefaccion<br>
        <input type="checkbox" name="servicios[aire]"           value="1"> Aire acondicionado<br>
        <input type="checkbox" name="servicios[desayuno]"       value="1"> Desayuno<br>
        <input type="checkbox" name="servicios[escritorio]"     value="1"> Escritorio<br>
        <input type="checkbox" name="servicios[chimenea]"       value="1"> Chimenea<br>
        <input type="checkbox" name="servicios[plancha]"        value="1"> Plancha<br>
        <input type="checkbox" name="servicios[secadorPelo]"    value="1"> Secador de pelo<br>
        <input type="checkbox" name="servicios[entrada]"        value="1"> Entrada<br>
        <input type="checkbox" name="servicios[piscina]"        value="1"> Piscina<br>
        <input type="checkbox" name="servicios[cocina]"         value="1"> Cocina<br>
        <input type="checkbox" name="servicios[lavadora]"       value="1"> Lavadora<br>
        <input type="checkbox" name="servicios[secadora]"       value="1"> Secadora<br>
        <input type="checkbox" name="servicios[aparcamiento]"   value="1"> Estacionamiento<br>
        <input type="checkbox" name="servicios[ascensor]"       value="1"> Ascensor<br>
        <input type="checkbox" name="servicios[jacuzzi]"        value="1"> Jacuzzi<br>
        <input type="checkbox" name="servicios[gimnasio]"       value="1"> Gimnasio<br>



       <input type="button" name="previous" class="previous btn btn-default" value="Anterior" />
       <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
   </fieldset>
   <!--Imagenes-->
   <fieldset>
       <h2>Step 4: Subir imagenes</h2>
       <div class="form-group">
       <label for="mob">Subir imagen</label>
       <input type="file" name="file[]" multiple>
     </div>
     
       <input type="button" name="previous" class="previous btn btn-default" value="Anterior" />
       <input type="submit" name="submit" class="submit btn btn-success" value="Postear casa" id="submit_data" />
   </fieldset>
   </form>
 </div>
</body>
</html>
<!--script para seccionar-->
<script type="text/javascript">
$(document).ready(function(){
   var current = 1,current_step,next_step,steps;
   steps = $("fieldset").length;
   $(".next").click(function(){
       current_step = $(this).parent();
       next_step = $(this).parent().next();
       next_step.show();
       current_step.hide();
       setProgressBar(++current);
   });
   $(".previous").click(function(){
       current_step = $(this).parent();
       next_step = $(this).parent().prev();
       next_step.show();
       current_step.hide();
       setProgressBar(--current);
   });
   setProgressBar(current);
   // Change progress bar action
   function setProgressBar(curStep){
       var percent = parseFloat(100 / steps) * curStep;
       percent = percent.toFixed();
       $(".progress-bar")
           .css("width",percent+"%")
           .html(percent+"%");		
   }
});
</script>