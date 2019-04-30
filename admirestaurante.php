<?php
session_start();
if (isset($_SESSION['username'] ) && $_SESSION['tipo'] =="ADMINISTRADOR"){
 require_once("admi/conexion.php");
 $conexion = new Conexion();
}else{
  header('Location: admi/login.php');
}?>

<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
  
<script src="admi/js/funciones.js"></script>
  <script src="admi/js/jquery-2.0.3.js"></script>
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

<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img height="100" width="100" src="admi/img/profile.png"> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a  role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Administrador <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="index.php"><i class="fa fa-user-secret"></i>SITIO WEB</a></li>
                        <li><a href="admi/catalogo.php"><i class="fa fa-user-secret"></i>PANEL NAVEGACION</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>

<!-- /Header -->

<!-- Main -->

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <!--<li class="nav-header"></li>-->
        <li><a href="admi.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li ><a href="admiroom.php"><i class="fa fa-bed"></i> Room & reservaciones</a></li>
        <li class="active"><a href="admirestaurante.php"><i class="fa fa-cutlery"></i> Restaurante</a></li>
        <li><a href="admitour.php"><i class="fa fa-plane"></i>Reservaciones de Tour</a></li>  
         <li><a href="admiacerca.php"><i class="fa fa-lock"></i> Acerca de</a></li>
        <li><a href="admiblog.php"><i class="fa fa-newspaper-o"></i>Blog de noticias</a></li>
             <li><a href="admicontactenos.php"><i class="fa fa-phone"></i>Contactenos</a></li>

    </ul>
</div><!-- /span-3 -->
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->

    <a href="#"><strong><span class="fa fa-dashboard"></span>Pagina de Inicio</strong></a>
    <hr>

   
  <!-- END nav -->
  
  
      
    

 <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slider1restaurante' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
  
     
       echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/menu_1.jpg".');" data-stellar-background-ratio="0.5">';
 }

?> 


    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Restaurante</span>
              <h2 class="heading">Sazon Arte</h2>
              <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slider1restaurante">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
        </div>
      </div>
    </div>
  </div>


  

   <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Menus</span>
              <h2 class="heading">Restaurant Menu</h2>
            </div>
          </div>

        <div class="block-35">
          
          <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Desayuno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Almuerzo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cena</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderdesayuno1' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/comida_1.jpg" alt="Image placeholder"></a>';
 }

?> 
                          
                        </div>
                        <div class="text">

                          <textarea  onchange="cambiartexto('desayuno1')" class="form-control rounded-0" id="desayuno1" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno1' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('desayuno1texto')" class="form-control rounded-0" id="desayuno1texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno1texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="sliderdesayuno1">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                                   <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderdesayuno2' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/comida_2.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('desayuno2')" class="form-control rounded-0" id="desayuno2" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno2' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('desayuno2texto')" class="form-control rounded-0" id="desayuno2texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno2texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="sliderdesayuno2">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                                                           <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderdesayuno3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/comida_3.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                           <textarea  onchange="cambiartexto('desayuno3')" class="form-control rounded-0" id="desayuno3" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno3' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('desayuno3texto')" class="form-control rounded-0" id="desayuno3texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno3texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="sliderdesayuno3">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                         
                        </div>
                      </div>
                    </div>

                   


                  

               
                    
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                  
                      <div class="item">
                      <div class="block-34">
                        <div class="image">
                         <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slideralmuerzo1' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_1.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('almuerzo1')" class="form-control rounded-0" id="almuerzo1" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo1' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('almuerzo1texto')" class="form-control rounded-0" id="almuerzo1texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo1texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slideralmuerzo1">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                      
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slideralmuerzo2' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_2.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('almuerzo2')" class="form-control rounded-0" id="almuerzo2" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo2' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('almuerzo2texto')" class="form-control rounded-0" id="almuerzo2texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo2texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slideralmuerzo2">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                       
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                        <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slideralmuerzo3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_3.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('almuerzo3')" class="form-control rounded-0" id="almuerzo3" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo3' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('almuerzo3texto')" class="form-control rounded-0" id="almuerzo3texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo3texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slideralmuerzo3">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                    
                        </div>
                      </div>
                    </div>

                    



                    
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                   <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercena1' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_1.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('cena1')" class="form-control rounded-0" id="cena1" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena1' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('cena1texto')" class="form-control rounded-0" id="cena1texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena3texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slidercena1">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                      
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                   <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercena2' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_2.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('cena2')" class="form-control rounded-0" id="cena2" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena2' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('cena2texto')" class="form-control rounded-0" id="cena2texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena2texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slidercena2">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                       
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                    <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercena3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_3.jpg" alt="Image placeholder"></a>';
 }

?> 
                         
                        </div>
                        <div class="text">
                         <textarea  onchange="cambiartexto('cena3')" class="form-control rounded-0" id="cena3" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena3' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></textarea>
                           <textarea  onchange="cambiartexto('cena3texto')" class="form-control rounded-0" id="cena3texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena3texto' ");
                        $row = $conexion->extraer_registro(); echo $row[0];?></textarea>

                               <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="slidercena3">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
                    
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    
 <!--    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Even the all-powerful Pointing</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Blind texts it is an almost</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_7.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Pointing has no control about</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>`
            <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Even the all-powerful Pointing</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Blind texts it is an almost</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_7.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Pointing has no control about</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>`
      </div>
    </div> -->
    


        




        

       
    


  

  
</body>
<style type="text/css">.navbar-inverse
{
    background:#00796B;
    border-bottom-color: #004D40;
}
.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>.dropdown>a .caret
{
    color: #fff;
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus,
.navbar-nav>li>.dropdown-menu
{
    background:#4DB6AC;
}
.nav-pills>li>a,
{
    color: #303F9F;
}

.nav>li>a:hover, .nav>li>a:focus
{
    background-color: #EEEEEE;
}

.navbar > .container, .navbar > .container-fluid {
        display: inline;
}
</style>

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

   
</html>