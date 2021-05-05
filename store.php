<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
	<link rel="stylesheet" type = "text/css" href="css/estilo_tienda.css">
	<script type = "text/javascript" src="js/store/slider.js"></script>
    <title>Baguettes of Iron - Tienda</title>
  </head>
  
  <body>
      <?php
        include_once('includes/reutilizables/header.php');
      ?>
	  
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="img/store/photo1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="img/store/photo2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="img/store/photo3.jpg" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="img/store/photo4.jpg" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="img/store/photo5.jpg" style="width:100%">
  </div>

</div>
<br>
<script>
  showSlides(slideIndex);
</script>

<!-- grid -->

<h2>PRODUCTOS:</h2>
<div class="btnContainer" id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Todos</button>
  <button class="btn" onclick="filterSelection('ropa')"> Ropa</button>
  <button class="btn" onclick="filterSelection('gorras')"> Gorras</button>
  <button class="btn" onclick="filterSelection('otros')"> Otros</button>
</div>
	<script type = "text/javascript" src="js/store/products.js"></script>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column ropa">
    <div class="content">
      <img src="img/store/camiseta.png" alt="Camiseta" style="width:100%">
      <h4>Camiseta BI</h4>
      <p>Camiseta clasica con nuestro logo.</p>
    </div>
  </div>
  <div class="column ropa">
    <div class="content">
      <img src="img/store/pantalon.png" alt="Pantalon" style="width:100%">
      <h4>Pantalon BI</h4>
      <p>Pantalon vaquero con nuestro logo.</p>
    </div>
  </div>
  <div class="column ropa">
    <div class="content">
      <img src="img/store/chaqueta.png" alt="Chaqueta" style="width:100%">
      <h4>Chaqueta BI</h4>
      <p>Chaqueta verde con nuestro logo.</p>
    </div>
  </div>

  <div class="column gorras">
    <div class="content">
      <img src="img/store/gorra1.png" alt="Gorra" style="width:100%">
      <h4>Gorra negra</h4>
      <p>Gorra negra con nuestro logo.</p>
    </div>
  </div>
  <div class="column gorras">
    <div class="content">
      <img src="img/store/gorra2.png" alt="Gorra 2" style="width:100%">
      <h4>Gorra marron</h4>
      <p>Gorra marron con nuestro logo.</p>
    </div>
  </div>

  <div class="column otros">
    <div class="content">
      <img src="img/store/gafas.png" alt="Gafas" style="width:100%">
      <h4>Gafas</h4>
      <p>Gafas sin cristal con nuestro logo.</p>
    </div>
  </div>

<script>
  filterSelection("all");
</script>

<!-- END GRID -->
</div>
  </body>
</html>
