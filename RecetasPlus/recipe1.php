<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="./estilos.css" type="text/css" media="all" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

  
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

  <!-- animate.css -->
  <link rel="stylesheet" href="assets/animate/animate.css" />
  <link rel="stylesheet" href="assets/animate/set.css" />

  <!-- gallery -->
  <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/faviconRP.ico" />
  <link rel="icon" href="images/faviconRP.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/style.css">
  <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script> 
  <script type='text/javascript'>
window.__lo_site_id = 83921;

  (function() {
    var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
    wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
    })();
  </script>
</head>

<body class="recipe-body">
<div id="contenedorto">
<div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="index.php"><img src="images/Logo.png" alt="logo"></a>
              <!-- #Logo Ends -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="index.html">Inicio</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->
<div id="menu"  class="container spacer about">
<div class="row">
<div class="col-md-4">
<p>
<?php
$var=$_GET['variable'];
  $host = "sql313.epizy.com";
$username = "epiz_19830617";
$db = "epiz_19830617_recetasPlusdb";
$pass = "miguel1993";
// Create connection
$conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
mysql_select_db($db, $conn) or die("No funciona");
$registro=mysql_query("SELECT NOMBRE_RECETA,INGREDIENTE,PREPARACION,IMAGEN_RECETA FROM RECETAS where id_receta=".$var) or die("No canciona" .mysql_error());
$name=$registro['NOMBRE_RECETA'];
while($reg=mysql_fetch_array($registro)){
  //echo $reg['NOMBRE_RECETA'];
  $name=$reg['NOMBRE_RECETA'];
  $Ingredientes=$reg['INGREDIENTE'];
  $preparacion=$reg['PREPARACION'];
  $imagen=$reg['IMAGEN_RECETA'];
}
?>
 <?php
  
  echo '<h2>'.$name.'</h2>';
  
  ?>
  <div class="image_block" id="image"> <img src=<?php echo $imagen;?> alt="logo"></div>
  </p>  

</div>
<div class="col-md-4">
<p align="justify">
 <div id="ingredientes">
     <h2>Ingredientes </h2>
      <nav>
      <ul>        
          <?php 
          $arrayNombre = explode(",", $Ingredientes);
          foreach ($arrayNombre as &$valor) {
           echo '<li>'.$valor.'</li>';
          }
          ?>        
        </ul>
      </nav>  
</div>
</p>
</div>
    <div class="col-md-4">
    <p align="justify">
    <div id="preparacion" STYLE="background-color:#F5EAFC;opacity:0.8">
    <h2 >Preparación</h2>    
     <?php 
          echo '<p align="justify" style=" font: Arial;font-weight: 600;">'.$preparacion.'</p>';
          ?>       
  </div>
  </p>
  </div>
  </div>
  <div class="row">
    <div class="col-md-4">
       <div id="recetasto">
       <label for="name"><h2>Comentarios</h2></label><br />
   <?php
$var=$_GET['variable'];
    $host = "sql313.epizy.com";
$username = "epiz_19830617";
$db = "epiz_19830617_recetasPlusdb";
$pass = "miguel1993";
$conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
mysql_select_db($db, $conn) or die("No canciona");
$registro=mysql_query("SELECT NOMBRE_USUARIO, DESCRIPCION FROM COMENTARIOS where id_receta=".$var) or die("No funnciona" .mysql_error());
while($reg=mysql_fetch_array($registro)){
  $name=$reg['NOMBRE_USUARIO'];
  $descripcion=$reg['DESCRIPCION'];
  ?>
  <div id="receta">
   <!-- <h2 class="usuario_nombre"><?php echo $name; ?> Comentó</h2>-->

    <label for="usuario_nombre"><?php echo $name; ?> comentó</label><br />
    <label for="comentario_desc"><?php echo $descripcion; ?></label><br />
    <hr>
  </div>
<?php } ?>
</div> 

    </div>
    <div class="col-md-4">
      <?php
$var=$_GET['variable'];
     $host = "sql313.epizy.com";
$username = "epiz_19830617";
$db = "epiz_19830617_recetasPlusdb";
$pass = "miguel1993";
// Create connection
$conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
mysql_select_db($db, $conn) or die("No canciona");
$registro=mysql_query("SELECT ETIQUETA_FACIL,ETIQUETA_DIFICIL, ETIQUETA_COSTOSO, ETIQUETA_ECONOMICO  FROM RECETAS where id_receta=".$var) or die("No funnciona" .mysql_error());
while($reg=mysql_fetch_array($registro)){
  $facil=$reg['ETIQUETA_FACIL'];
  $dificil=$reg['ETIQUETA_DIFICIL'];
  $economico=$reg['ETIQUETA_ECONOMICO'];
  $costoso=$reg['ETIQUETA_COSTOSO'];
  if($facil==NULL){
    $facil=0;
  }
  if($dificil==NULL){
    $dificil=0;
  }
  if($economico==NULL){
    $economico=0;
  }
  if($costoso==NULL){
    $costoso=0;
  }
  ?>
  <div id="receta">
  <label for="name"><h2>Reacciones</h2></label>
  <br></br>
    <label id="facil" for="facil"><?php echo $facil; ?> personas creen que esta receta es facil</label><br />
    <label id="dificil" for="dificil"><?php echo $dificil; ?> personas creen que esta receta es dificil</label><br />
    <label id="economico" for="economico"><?php echo $economico; ?> personas creen que esta receta es economica</label><br />
    <label id="costoso" for="costoso"><?php echo $costoso; ?> personas creen que esta receta es costosa</label><br />
    
    
  </div>

<?php } ?>
</div>
    <div class="col-md-5">
  <div class="right">
<div id="comentarios">
<form id="contact_form" action="coments.php" method="POST">
    <label id="deja" for="name">Deja aquí tu comentario y cuentanos tus reacciones</label>
    <br></br>
    <label id="dificultad" for="dificultad">Dificultad de aplicación</label><br>
    </br>
    <select id="select1" name="select1">
  <option id="difi" value="1" selected>Fácil</option> 
  <option id="difi" value="2" >Difícil</option><br>
  </select>
  <br></br>
  <label id="precio" for="precio">Precio</label>
  <br>
  <select name="select">
  <option value="3" selected>Económico</option> 
  <option value="4" >Costoso</option>

  </select>
  <br></br>
    <label for="name">Tu nombre:</label><br />
    <input id="name" class="input" name="Comentario[usuario]" type="text" value="" size="30" /><br />
<!--<input id="id" type="hidden" name="idreceta" value=1>-->
    <input id="receta" class="input" type="hidden" name="Comentario[receta]" value="<?php echo (isset($_GET['variable']))?$_GET['variable']:'' ?>" />
    <label for="message">Tu mensaje:</label><br />
    <textarea id="com" class="input" name="Comentario[descripcion]" cols="28" rows="10"></textarea>   
  <br>
  <input id="submit_button" type="submit" name="enviar" value="Enviar" />
</form>
</div>
</div>
    </div>
  </div>

 
  </div>
  
</div>
</div>
  <!-- Footer Starts -->
  <div class="footer text-center spacer">
  
  Copyright 2017 DevStudio. All rights reserved.
  </div>
  <!-- # Footer Ends -->
  </div>
</body>
</html>