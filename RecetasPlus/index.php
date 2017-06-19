<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Recetas,Comida,Recetasplus,Bebidas,Postres,Entradas">
<meta name="description" content="pagina de recetas donde puedes contarnos tu experiencia">
<meta name="robots" content="index, follow">
<meta http-equiv="content-language" content="es">
<meta http-equiv="revisit-after" content="1 days">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>RecetasPlusssssss</title>

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
<link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
  $(function() {
  var availableTags = [
    "ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++",
    "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran",
    "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl",
    "PHP", "Python", "Ruby", "Scala", "Scheme"
  ];
  
  $("#input").autocomplete({
    source: 'buscador.php',
    select: function(event, ui){
      $("#buscar").on("click",function(){
        location.href="recipe1.php?variable=" +ui.item.idUsuario;
        document.getElementById('input').innerHTML = '';
      });
    }
  });
});
</script>

<link rel="stylesheet" href="assets/style.css">
<script type='text/javascript'>
window.__lo_site_id = 83921;

  (function() {
    var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
    wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
    })();
  </script>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9&appId=1881515535507230";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Inicia sesión';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1881515535507230',
    //cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.
    
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  function logOut(){
    FB.logout(function(response) {
       alert('Se ha cerrado la sesión');
       location.reload();
       document.getElementById('user').value = '';
       document.getElementById('face').style.display = 'inline';
    });
  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('user').value = response.name;
      document.getElementById('user').title = 'Usuario de Facebook';
      document.getElementById('face').style.display = 'none';
      document.getElementById('status').innerHTML =
        'Gracias por ingresar, ' + response.name + '!';
    });
  }
</script>

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
                 <li ><a href="#" onclick="logOut()">Cerrar sesión</a></li>
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
          <p>
            
          </p>
          <div class="col-sm-4 col-sm-offset-7 col-sm-12">
          <div class="input-group">
            <input id="input" type="text" class="form-control" placeholder="Busca tu receta..." name="input">
              <span class="input-group-btn">
                <button id="buscar" class="btn btn-default" name="buscar" onclick="">Buscar</button>
              </span>
            </div>
          </div>
          <div id="recetas"></div>
            <div class="caption-wrapper">
              <div class="caption-info">
              <i class="fa fa-coffee fa-5x animated bounceInDown"></i>
              <h1 class="animated bounceInUp">¡Aprende Con Nosotros!</h1>
              <p class="animated bounceInLeft">Miles de pruebas a un solo click, ven y comparte tu experiencia con nosotros.</p>
              <p id="status" class="animated bounceInLeft"></p>
              <!--<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email" onlogin="checkLoginState();"></div>-->

              <fb:login-button id="face" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
              <fb:logout-button scope="public_profile,email" onlogin="logout();"></fb:logout-button>
             <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
              </div>
            </div>
          </div>
</div>
<!-- #Slider Ends -->
</div>


<!-- Recetas nuevas -->
<div id="menu"  class="container spacer about" STYLE="opacity:0.9">
<h1 class="text-center wowload fadeInUp" STYLE="background-color:#F5EAFC">Recetas Nuevas</h1>

<p>



</p>
  <div class="row">
  <div class="col-sm-4 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> Recetas Nuevas </h4>
    <?php
    $host = "sql313.epizy.com";
    $username = "epiz_19830617";
    $db = "epiz_19830617_recetasPlusdb";
    $pass = "miguel1993";
    // Create connection
    $cont=0;
    $conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
    mysql_select_db($db, $conn) or die("No canciona");
    $registro=mysql_query("SELECT ID_RECETA,IMAGEN_RECETA,NOMBRE_RECETA FROM RECETAS LIMIT 20 OFFSET 4") or die("No canciona" .mysql_error());
    while($reg=mysql_fetch_array($registro)){ ?>
          
        <a href="recipe1.php?variable=<?php echo $reg['ID_RECETA']; ?>">
          <div class="w3-content" style="max-width:400px" >
            <img class="mySlides" src="<?php echo $reg['IMAGEN_RECETA']; ?>" style="width:100%">
          </div>
          </a>
          
    <?php }
    mysql_close($conn);
    ?>
  </div>

       <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1} 
        x[slideIndex-1].style.display = "block"; 
        setTimeout(carousel, 3000); 
    }
    </script>

  <!--
  <div class="col-sm-12 wowload fadeInLeft">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    $host = "sql313.epizy.com";
    $username = "epiz_19830617";
    $db = "epiz_19830617_recetasPlusdb";
    $pass = "miguel1993";
    $check = true;
    // Create connection
    $conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
    mysql_select_db($db, $conn) or die("No canciona");
    $registro=mysql_query("SELECT ID_RECETA, NOMBRE_RECETA, IMAGEN_RECETA FROM RECETAS LIMIT 20 OFFSET 4") or die("No canciona" .mysql_error());
    while($reg=mysql_fetch_array($registro)){ ?>
      <div class="col-sm-6 wowload fadeInLeft">
      <div class="item row">
        <a href="recipe1.php?variable=<?php echo $reg['ID_RECETA']; ?>">
          <div class="animated slideInLeft col-sm-12"><img src=<?php echo $reg['IMAGEN_RECETA']?> class="img-responsive"></div>
          <div class="carousel-caption">
            <h3><?php echo $reg['NOMBRE_RECETA']; ?></h3>
          </div>
        </a>
      </div>
      </div>
    <?php }
    ?>
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
  </div>
  -->
<!-- Categorías -->
  <div class="col-sm-6 wowload fadeInRight">
     <p class="nombreReceta" STYLE="background-color:#F5EAFC;opacity:0.8" >¿Buscando ideas? Síguenos, encontrarás las mejores recetas, fáciles de preparar y con los mejores consejos.</p>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a href="categories.php?variable=Plato principal">
         Platos Principales
        </a>
      </h4>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a href="categories.php?variable=Entrada">
        Entradas
        </a>
      </h4>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a href="categories.php?variable=Bebida">
        Bebidas
        </a>
      </h4>
    </div>
  </div>

  <div class="panel panel-info">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a href="categories.php?variable=Postre">
        Postres
        </a>
      </h4>
    </div>
  </div>

</div>
</div>
</div>
</div>

<!-- works -->
<div id="foods"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Mojito de Naranja</h2>
            <p>¿Te interesa? Síguenos...<br>
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
         <input class="form-control" type="text" pattern="^[a-zA-Záéíóúñüàè\s]*$" name="usuario" placeholder="Nombre de usuario" id="user" title="Inicia sesión con Facebook" readonly required>
        <input class="form-control" type="text" pattern="^[a-zA-Záéíóúñüàè\s]*$" name="receta" placeholder="Nombre de la receta" required>
        <input class="form-control" type="text" name="imagen" placeholder="URL de imagen de la receta" required>
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
<a href="#home" class="gototop "><img src="images/faviconRP.ico"><i class="fa fa-angle-up  fa-3x"></i></a>





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
<script src="assets/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


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

  