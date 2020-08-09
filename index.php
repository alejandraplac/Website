<!DOCTYPE html>
<html class="no-js" lang="">
   <head>
      <meta charset="utf-8">
        <title>Alejandra Placenti | DG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,300;0,700;1,200;1,700&display=swap" rel="stylesheet">


      <!-- Favicon -->
      <link rel="shortcut icon" href="favicon2.png">


      <!-- Fancybox -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>


        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

    </head>


        <body id="index" data-spy="scroll" data-target=".navbar" data-offset="60">


        <!-- Navbar -->

        <nav class="navbar navbar-expand-md navbar-light sticky-top">
          <div class="container">
            <a href="#index">Alejandra Placenti</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#sobremi">Sobre mi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>


<!-- Secciones #1 Sobre mi -->
<div id="sobremi">
<div class="container text-center">
   <div>
      <img src="img/yo1.jpg" alt="..." class="avatar col-4">
      </div>
  <h2 class="titulos">Sobre mi</h2>
      <hr class="light">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center">
¡Hola! Me llamo Alejandra. Soy diseñadora gráfica e ilustradora. Cursé la carrera de Diseño Gráfico en la Universidad de Buenos Aires (2015-2019). ¡Este es mi primer proyecto web! También realicé workshops de UX Design e Ilustración Botánica.
Siempre me gustó mucho dibujar pero en esta pandemia aproveché el tiempo desarrollando diseño UI y UX :)
     </p>
    </div>
  </div>
   </div>
    </div>

<!-- Secciones #2 Portfolio -->
<div id="portfolio">
<div class="container-fluid bg-3 text-center slideanim">    
  <h2 class="titulos text-center">Portfolio</h2>
  <div class="container"> 
    <hr class="light">
  <div class="row">
    <div class="col-sm-6">
      <div class="container-img">
        <a href="https://www.behance.net/alejandrap61f7" target="_blank">
      <img src="img/behance.jpg" class="img-responsive" style="width:100%" alt="Image">
      <div class="middle">
        <i class="fab fa-behance"></i>
      </a>
  </div>
    </div>
    </div>
    <div class="col-sm-6"> 
      <div class="container-img">
        <a href="https://www.instagram.com/ale.dibus/" target="_blank">
      <img src="img/ilu3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <div class="middle">
      <i class="fab fa-instagram"></i></a>
    </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- Secciones #3 Skills -->
<div id="skills" class="container-fluid">
<div class="container padding slideanim">
      <h2 class="titulos text-center">Skills</h2>
      <hr class="light">
      <div class="container row text-center padding">
        <div class="col-sm-12 col-md-4">
         <i class="fab fa-html5"></i>
          <h4>HTML</h4>
        </div>

        <div class="col-sm-12 col-md-4">
          <i class="fab fa-css3-alt"></i>
          <h4>CSS</h4>
        </div>

        <div class="col-sm-12 col-md-4">
          <i class="fab fa-js"></i>
          <h4>JavaScript</h4>
        </div>
        
    </div>
</div>
</div>

<!-- Secciones #4 Contacto -->
<div id="contacto">
<div class="container padding slideanim">
  <h2 class="text-center">Contacto</h2>
    <hr class="light">
  <div class="row">
    <div class="col-sm-5">
      <p>¿Encargos? ¿Consultas? ¡No dudes en escribirme!</p>
      <p><i class="fas fa-map-marker-alt"></i> Buenos Aires, AR</p>
      <p><i class="fab fa-whatsapp"></i></span> +54 1162609645</p>
      <p><i class="fas fa-envelope"></i></span> alejandraplacenti@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form action="enviar.php" method="POST">
          <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    



<!-- Footer -->
<footer>
  <div class="container-fluid">
      <div class="row text-center padding">
        <div class="col-12">
          <p class="social">Follow me</p>
        </div>
        <div class="redes col-12 social padding">
        <a href="https://github.com/alejandraplac" target="_blank"><i class="fab fa-github"></i></a> 
        <a href="https://www.behance.net/alejandrap61f7" target="_blank"><i class="fab fa-behance"></i></a>
        <a href="https://www.linkedin.com/in/alejandra-placenti/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      </div>
      </div>
    </div>
    <div class="text-center">
      <div class="col-md-12">
        <p>Alejandra Placenti &copy <script>document.write(new Date().getFullYear())</script></p>
        <a href="#index">
          <i class="fas fa-arrow-circle-up"></i>
        </a>

        </div>  
    </div>
</footer>
       
        
        
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- JS -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
  src="js/smooth-scrolling.js"></script>


<!-- CLICK DERECHO BLOQUEO--> 

<script>$('img').bind('contextmenu', function(e) { return false; });
</script>


</body>
</html>