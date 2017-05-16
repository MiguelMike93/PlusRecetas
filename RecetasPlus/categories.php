<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
</head>
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
              <li class="active"><a href="index.php">Inicio</a></li>
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
  <div class="container spacer about">
  <div class="row">
  <div class="col-sm-12 wowload fadeInLeft">
    <?php
    $var=$_GET['variable'];
    $host = "sql313.epizy.com";
    $username = "epiz_19830617";
    $db = "epiz_19830617_recetasPlusdb";
    $pass = "miguel1993";
    // Create connection
    $conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
    mysql_select_db($db, $conn) or die("No canciona");
    $registro=mysql_query("SELECT ID_RECETA, NOMBRE_RECETA, IMAGEN_RECETA FROM RECETAS WHERE TIPO_RECETA = '$var'") or die("No canciona" .mysql_error());?> 
    <p>
      
    </p>
    <h1 class="animated bounceInUp" align="center"><?php echo $var; ?></h1>
    <p>
      
    </p><?php 
    while($reg=mysql_fetch_array($registro)){ ?>
     <div class="col-sm-4 wowload fadeInLeft">
      <div class="thumbnail slideInRight">
        <a href="recipe1.php?variable=<?php echo $reg['ID_RECETA']; ?>">
          <img class="animated slideInRight" src="<?php echo $reg['IMAGEN_RECETA']?>">
           <div class="caption">
            <p class="nombreReceta"><?php echo $reg['NOMBRE_RECETA']; ?></p>
          </div>
        </a>
      </div>
     </div>
    <?php }
    ?>
    </div>
    </div>
    <!--

    
    <div class="row">
      <div class="col-md-6">
        <div class="thumbnail">
          <a href="images/portfolio/1.jpg" target="_blank">
            <img class="animated slideInRight" src="images/portfolio/1.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="thumbnail animated bounceInUp">
          <a href="images/portfolio/2.jpg" target="_blank">
            <img src="images/portfolio/2.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="thumbnail animated bounceInUp">
          <a href="images/portfolio/3.jpg" target="_blank">
            <img src="images/portfolio/3.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="thumbnail animated bounceInUp">
          <a href="images/portfolio/3.jpg" target="_blank">
            <img src="images/portfolio/3.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="thumbnail animated bounceInUp">
          <a href="images/portfolio/3.jpg" target="_blank">
            <img src="images/portfolio/3.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="thumbnail animated bounceInUp">
          <a href="images/portfolio/3.jpg" target="_blank">
            <img src="images/portfolio/3.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="thumbnail animated bounceInUp">
          <a href="images/portfolio/3.jpg" target="_blank">
            <img src="images/portfolio/3.jpg">
            <div class="caption">
              <p class="nombreReceta">Nombre receta</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
-->
  <!-- Footer Starts -->
  <div class="footer text-center spacer">
  Copyright 2017 DevStudio. All rights reserved.
  </div>
  <!-- # Footer Ends -->
</body>
</html>