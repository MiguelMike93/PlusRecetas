<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="./estilos.css" type="text/css" media="all" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title id="title">Nombre Receta</title>

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
</head>

<body class="recipe-body">

  
                   
  <div id="fb-root"></div>
         
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
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


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="index.html">Inicio</a></li>
                 <!--li ><a href="#menu">Menú</a></li>
                 <li ><a href="#foods">Recetas</a></li>
                 <!--<li ><a href="#partners">Partners</a></li>-->
                 <!--<li ><a href="#contact">Contact</a></li>-->
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<div id="menu"  class="container spacer about">
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
  
  </p>
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
  <div class="image_block" id="image"> <img src=<?php echo $imagen;?> alt="logo"></div>
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
    <h2><i class="fa fa-camera-retro"></i> Preparación</h2>
    <p id="preparacion" >
     <?php 
          echo '<p>'.$preparacion.'</p>';
          ?>
        </p>
  </div>

<div id="comentarios">
<form id="contact_form" action="coments.php" method="POST">
  <div class="row">
    <label for="enunciado"><h3>Deja aquí tu comentario!</h3></label><br />
    <label for="etiqueta_nombre">Tu nombre:</label><br />
    <input id="name" class="input" name="Comentario[usuario]" type="text" value="" size="30" /><br />
<!--<input id="id" type="hidden" name="idreceta" value=1>-->
    <input id="receta" class="input" type="hidden" name="Comentario[receta]" value="<?php echo (isset($_GET['variable']))?$_GET['variable']:'' ?>" />
    <label for="message">Tu mensaje:</label><br />
    <textarea id="com" class="input" name="Comentario[descripcion]" cols="28" rows="10"></textarea>
   
  </div>
  <input id="submit_button" type="submit" name="enviar" value="Enviar" />
</form>
   <?php
$var=$_GET['variable'];
   $host = "sql313.epizy.com";
    $username = "epiz_19830617";
    $db = "epiz_19830617_recetasPlusdb";
    $pass = "miguel1993";
// Create connection
$conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
mysql_select_db($db, $conn) or die("No canciona");
$registro=mysql_query("SELECT NOMBRE_USUARIO, DESCRIPCION FROM COMENTARIOS where id_receta=".$var) or die("No funnciona" .mysql_error());
while($reg=mysql_fetch_array($registro)){
  $name=$reg['NOMBRE_USUARIO'];
  $descripcion=$reg['DESCRIPCION'];
  ?>
  <div class="receta">
    <label for="usuario_nombre"><?php echo $name; ?> comentó</label><br />
    <label for="comentario_desc"><?php echo $descripcion; ?></label><br />
    <hr>
     
  </div>
<?php } ?>
<br />
</div>
</div>
</div>



  <!-- Footer Starts -->
  <div class="footer text-center spacer">
  
  Copyright 2017 DevStudio. All rights reserved.
  </div>
  <!-- # Footer Ends -->
</body>
</html>