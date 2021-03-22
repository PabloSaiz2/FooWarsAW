<?php
    require_once('bootup.php');
    require_once('validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title>Baguettes of Iron</title>
  </head>
  
  <body>
      <?php
        include_once('header.php');
      ?>
      <section>
 <div class="wrapper">
    <div class="slider" id="slider">      
        <ul class="slides">       
            <li class="slide" id="slide1">
                <a href="#">
                    <img src="img/photo1.jpg" alt="photo 1">      
                </a>
            </li>
            <li class="slide" id="slide2">
                <a href="#">
                    <img src="img/photo2.jpg" alt="photo 2">      
                </a>
            </li>
            <li class="slide" id="slide3">
                <a href="#">
                    <img src="img/photo3.jpg" alt="photo 3">      
                </a>
            </li>
            <li class="slide" id="slide4">
                <a href="#">
                    <img src="img/photo4.jpg" alt="photo 4">      
                </a>
            </li>     
            <li class="slide" id="slide5">
                <a href="#">
                    <img src="img/photo5.jpg" alt="photo 5">      
                </a>
            </li>             
            <li class="slide">
                <a href="#">
                    <img src="img/photo1.jpg" alt="photo 1">      
                </a>
            </li>     
        </ul>
        <ul class="slider-controler">         
            <li><a href="#slide1">&bullet;</a></li>
            <li><a href="#slide2">&bullet;</a></li>
            <li><a href="#slide3">&bullet;</a></li>
            <li><a href="#slide4">&bullet;</a></li>
            <li><a href="#slide5">&bullet;</a></li>
        </ul>
    </div>
</div>
      </section>
  </body>
</html>
