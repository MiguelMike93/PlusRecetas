<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Recetas Plus 2</title>

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

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/Logo.png" alt="logo"></a>
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
                 <li class="active"><a href="#home">Inicio</a></li>
                 <li ><a href="#menu">Recetas nuevas</a></li>
                 <li ><a href="#foods">Recetas</a></li>
                 <!--<li ><a href="#partners">Partners</a></li>-->
                 <li ><a href="#contact">Envía tu receta</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<div class="banner">
          <img src="images/back.jpg" alt="banner" class="img-responsive">
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
              <i class="fa fa-coffee fa-5x animated bounceInDown"></i>
              <h1 class="animated bounceInUp">¡Aprende con Nosotros!</h1>
              <p class="animated bounceInLeft">Miles de recetas a un solo click, ven y comparte tu experiencia con nosotros.</p>
             <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
              </div>
            </div>
          </div>
</div>
<!-- #Slider Ends -->
</div>

<!-- Cirlce Starts -->
<div id="menu"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">RecetasPlus</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> Recetas Nuevas </h4>
    <?php
		
		include 'form.php';

    $form =new form();
    $registro = $form->returnRecipe();
		if ($registro==false) {
      trigger_error('wrong SQL:'. $query. 'Error: '. conn->error, E_USER_ERROR);
    }
    else {
      $rows_return= $registro->num_rows;
    }

    $registro->data_seek(0);
    while ($row=$registro->fetch_assoc()) {
		    <a href="recipe1.php?variable=<?php echo $row['ID_RECETA']; ?>">
		      <p>
		        <h4><?php echo $row['NOMBRE_RECETA']; ?></h4>
		      </p>
		    </a>
 	   }
    ?>  

  </div>
 
      <!-- menus -->



  </div>
  </div>

  
</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="foods"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Mojito de Naranja</h2>
            <p>¿Te interesa? Síguenos...<br>
              <?php
              $var="holiii";
              ?>
            <a href="recipe1.php?variable=1">Ver más </a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Alitas de Pollo</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe1.php?variable=2">Ver más</a></p> 
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Filetes Rusos</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe1.php?variable=3">Ver más</a></p> 
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Cheesecake de pasión</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe1.php?variable=4">Ver más</a></p> 
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Lomo al Horno</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe1.php?variable=5">Ver más</a></p> 
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Rollitos de pollo</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe1.php?variable=6">Ver más</a></p> 
        </figcaption>
    </figure>   
</div>

<!--Contact Starts-->

<div id="contact" class="spacer">
<div class="container contactform center">
<h2 class="text-left wowload fadeInUp">¿Tienes una receta? Cuéntanos...</h2>
  <div class="row wowload fadeInLeftBig">
  <div class="col-sm-6 col-sm-offset-0 col-sm-12">     
  <form method="POST" action="form.php">
        <input type="text" pattern="^[a-zA-Z\s]*$" name="usuario" placeholder="Nombre" required>
        <input type="text" pattern="^[a-zA-Z\s]*$" name="receta" placeholder="Nombre de la receta" required>
        <input type="text" name="imagen" placeholder="URL de imagen de la receta" required>
        <select class="form-control" name="categorias">
          <option>Plato principal</option>
          <option>Entrada</option>
          <option>Bebida</option>
          <option>Postre</option>
        </select><br>
        <textarea class="form-control" name="ingredientes" rows="2" style="resize: none;" placeholder="Ingredientes(separados por comas)" required></textarea>
        <textarea class="form-control" name="preparacion" rows="5" style="resize: none;" placeholder="Preparación" required></textarea>
        <button class="btn btn-primary" name="enviar">Enviar</button>
  </form>
  </div>
  </div>
</div>
</div>
<!--Contact Ends-->

<!-- Footer Starts -->
<div class="footer text-center spacer">

Copyright 2017 DevStudio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>