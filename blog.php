<?php 
require_once("admi/conexion.php");
 $conexion = new Conexion();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel La Galerie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Habitaciones</a></li>
          <li class="nav-item"><a href="services.php" class="nav-link">Restaurante</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Acerca de </a></li>
           <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contactenos</a></li>
           <li class="nav-item"><a href="admi/login.php" class="nav-link">Iniciar sesion</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  

     <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderblog' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/bg_2.jpg".');" data-stellar-background-ratio="0.5">';
 }

?> 
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Blog</span>
              <h2 class="heading">Noticias &amp; Eventos</h2>
        </div>
      </div>
    </div>
  </div>


  <div class=" site-section bg-light" id="blog">
    
    <div class="container">
      <div class="row">

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento1' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  </a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento1.jpg".');" > </a>';
 }

?>  
            <div class="text">
              <h2 class="heading"><a href="#"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento1titulo' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></a></h2>
              <p class="meta"><em><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento1texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></em>  </p>
              
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento2' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" > </a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento1.jpg".');" >  </a>';
 }

?>
             <div class="text">
              <h2 class="heading"><a href="#"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento2titulo' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></a></h2>
              <p class="meta"><em><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento2texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></em>  </p>
             
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  </a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento3.jpg".');" >  </a>';
 }

?>
            <div class="text">
              <h2 class="heading"><a href="#"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento3titulo' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></a></h2>
              <p class="meta"><em><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento3texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></em>  </p>
             
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento4' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  </a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento1.jpg".');" > </a>';
 }

?>
            <div class="text">
              <h2 class="heading"><a href="#"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento4titulo' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></a></h2>
              <p class="meta"><em><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento4texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></em>  </p>
             
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento5' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  </a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento5.jpg".');" >  </a>';
 }

?>
            <div class="text">
              <h2 class="heading"><a href="#"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento5titulo' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></a></h2>
              <p class="meta"><em><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento5texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></em>  </p>
              
            </div>
          </div>  
        </div>


      </div>

     <!--  <div class="row mt-5">
                <div class="col-md-12 pt-5">
                  <ul class="pagination custom-pagination">
                    <li class="page-item prev"><a class="page-link" href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                    <li class="page-item active"><a class="page-linkx href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
                  </ul>


                </div>
              </div> -->
  </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Acerca de nosotros</h3>
          <p class="mb-5">Somos un hotel responsable y comprometido con nuestros cleintes para que reciban un servicio de calidad por eso cada dia mejoramos con el fin de que nuestros clientes les traiga una estadia excelente.</p>
       
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Eventos importantes</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_1.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Visita del presidente</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Abril 29, 2019</a></div>
                
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Visita de Orlando sotela</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Abril 29, 2019</a></div>
            
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_3.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Visita de harol lopez</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Abril 29, 2019</a></div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contacto</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">200 mts Norte del antiguo colegio de Ciudad Cortes, Osa Puntarenas</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+506 47026429</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Osaacademialasartes@gmail.com.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Lunes &mdash; Domingo 9:00am - 10:00pm</span></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>