<?php
	$conectar = mysqli_connect("localhost","root","");
    if(!$conectar)
    {
        echo"Error al conectar con la base de datos";
    }
	
	$email = $_POST['email'];
	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];

    $datab="datos";
    $db=mysqli_select_db($conectar,$datab);

    if(!$db){
        echo"Hubo un error";
    }
    else{
        echo"";
        }
	
    $sql="INSERT INTO datos (email,nombre,pass)
     VALUES('$email','$nombre','$pass')";

    $ejecutar=mysqli_query($conectar,$sql);

    if(!$ejecutar){
        echo"Hubo un error";
    }
    else{
        echo"";
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title >Marvel</title>
  <link rel="shortcut icon" href="img/Marvel_Logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="iexedge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> 
  

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">   
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  
  
  <link rel='stylesheet' href="HE_BootstrapIcons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel='stylesheet' href="CSS/estilo.css">
    <link href="Index.html">
    <style>
    </style>
</head>

<body>

<!-- SECCION DE LA BARRA DE NAVEGACION -->
<header class="header">
  <nav class="navbar is-active" role="navigation" aria-label="main navigation">
      
    <div class="navbar-brand">
        <a class="navbar-item" href="Index.html">
          <img src="img/Marvel_Logo.png" style="width: 100%;">
        </a>
    
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="barradenavegacion">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    
      <div id="barradenavegacion" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="Index.html">
            INICIO
          </a>
    
          <a class="navbar-item" href="Galeria.html">
            GALERIA
          </a>
    
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link is is-arrowless">
              ACERCA DE
            </a>
  
            <div class="navbar-dropdown">
              <a class="navbar-item" href="Peliculas.html">
                PELICULAS y SERIES
              </a>
              <a class="navbar-item" href="Juegos.html">
                JUEGOS
              </a>
            </div>
          </div>
          <a class="navbar-item" href="Foro.html">
            FORO
            </a>
        </div>
      </div>
</nav>
</header>
    
<img src="img/marvel-poster.webp" alt="Poster Marvel"style="width: 100%;">

<!-- PARTE DE INFO -->
<div class="container-fluid text-justify">
  <section class="main1 row">    
      <article class=" align=text-right col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <div class="row justify-content-center">
          <div class="card" style="width: 110rem;">
            <div class="inner">
             <div class="contenedor">
                  <img src="img/mundoMarvel.jpeg" class="lazyfade picture article--img img-responsive lazyautosizes lazyloaded" alt="Mundo Marvel" width="100%"> 
                <div class="texto-encima"><h2>Bienvenido al mundo MARVEL</h2></div>
              </div>
           </div>
          </div>
          <div class="card" style="width: 90rem;">
            <div class="inner">
             <div class="contenedor">
                <a href="Juegos.html">
                  <img src="img/SpidermanGameNote.webp" class="lazyfade picture article--img img-responsive lazyautosizes lazyloaded" alt="MarvelSpiderman" width="100%"> 
                </a>
                <div class="texto-encima"><h3>Noticias GAMER</h3></div>
              </div>
           </div>
          </div>
        </div>
   </article>
      
   
   <aside class="col-xs-12 col-sm-8 col-md-3 col-lg-3">
      <p>
       <a id="dest">
        <h3>Destacado</h3>
       </a>
       
        <div style="text-align: center;">
          <h3>Proximos estrenos</h3>
          <h4>Moon Knight</h4>
          <div align="center">
            <div class="card" style="width: 20rem;">
              <div class="inner">
               <a href="https://www.youtube.com/watch?v=HebHYBeqGv0">
                 <img src="img/MoonKnPoster.jpg">
               </a>
             </div>
            </div>
          </div> 
          
          <h4>Miss Marvel</h4>
          <div align="center">
            <div class="card" style="width: 20rem;">
              <div class="inner">
               <a href="https://www.youtube.com/watch?v=fH3gc-kr8Rc">
                <img src="img/MissMarvAnuncio.jpg">
               </a>
             </div>
            </div>
          </div>
         
          <h4>She Hulk</h4>
          <div align="center">
            <div class="card" style="width: 20rem;">
              <div class="inner">
               <a href="https://www.youtube.com/watch?v=iIsmHDcG5Kg">
                <img src="img/SheHulk_poster.webp">
               </a>
             </div>
            </div>
          </div>
        </div>
     </p> 
   </aside>
  </section>
</div>



<!-- boton flotante -->
<div class="container2">
  <input type="checkbox" id="btn-mas">
  <div class="redes">
      <a href="https://www.facebook.com/disneyplusla/" class="fa fa-facebook"></a>
      <a href="https://twitter.com/disneyplusla" class="fa fa-twitter"></a>
      <a href="https://disneylatino.com/marvel-insider"> <img src="img/disneyPlus_logo.png" width="55px"></a>
  </div>
  <div class="btn-mas">
      <label for="btn-mas" class="fa fa-plus"></label>
  </div>
</div>

<!-- Pie de pagina -->
<footer class="pie-pagina">
  <div class="grupo-1">
      <div>
          <figure>
              <h1>Disneyland</h1> <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.008577751674!2d-117.92345887307806!3d33.81209171885101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd7d12b3b5e6b%3A0x2ef62f8418225cfa!2sDisneyland!5e0!3m2!1ses!2smx!4v1654712993342!5m2!1ses!2smx" 
              width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               <p>Disneyland Park, California, EE.UU.</p>
          </figure>
      </div>
      <div>
          <h1>SOBRE MI</h1> <br>
          <p>Alberto Ru??n Aldana - Ing.WEB</p><br>
          <p>ESTUDIANTE DE INGENIERIA TELEMATICA DEL IPN</p>

      </div>
      <div>
          <h1>SIGUEME EN</h1> <br>
          <div class="red-social">
              <a href="https://www.facebook.com/alberto.ruanaldana" class="fa fa-facebook"></a>
              <a href="https://www.instagram.com/albert_ra27/" class="fa fa-instagram"></a>
              <a href="https://twitter.com/Alberto_Ruan27" class="fa fa-twitter"></a>
          </div>
      </div>
  </div>
</footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
  </script>


</body> 
</html>