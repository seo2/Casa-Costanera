<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Nueva Costanera - Home</title>

<?php include'include/header.php' ?>
</head>
<body class="center-p index">
<header class="header  wow fadeIn">
<nav class="navbar navbar-inverse">
  <div class="navbar-header">
  <a href="index.php"><img src="img/logo2.svg" alt="" class="logo img-responsive"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>
      </div>
    <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbnav navbar-nav navbar-right">
    <li><a href="index.php" <?php if(strcmp($activa, "index") == 0) echo "class=\"activo\"";?>>Inicio</a></li>
      <li><a href="empresa.php" <?php if(strcmp($activa, "empresa") == 0) echo "class=\"activo\"";?>>Empresa</a></li>
      <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="en-venta.php" <?php if(strcmp($activa, "proyectos") == 0) echo "class=\"activo\"";?>>Proyectos en Venta</a></li>
            <li style=""><a href="ejecutados.php" <?php if(strcmp($activa, "ejecutado") == 0) echo "class=\"activo\"";?>>Proyectos ejecutados</a></li>
           
          </ul>
        </li>

      <li class="visible-xs"><a href="en-venta.php" <?php if(strcmp($activa, "proyectos") == 0) echo "class=\"activo\"";?>>Proyectos en Venta</a></li>
      <li class="visible-xs"><a href="ejecutados.php" <?php if(strcmp($activa, "realizados") == 0) echo "class=\"activo\"";?>>Proyectos ejecutados</a></li>

      <li><a href="contacto.php" <?php if(strcmp($activa, "contacto") == 0) echo "class=\"activo\"";?>>Conversemos</a></li>
<!--
      <li style="padding: 19px 2px 0;"><a href="en-venta.php" style="letter-spacing: 0; font-size: 12px;">EN /</a></li>
      <li style="padding: 19px 2px 0;"><a href="en-venta.php" style="letter-spacing: 0; font-size: 12px;">ES</a></li>
-->
    </ul>
  </div>
</nav>
</header>



<section class="cont text-center padd">
 
   <div class="title-center">
 <div id="myCarousel6" class="carousel slide hidden-xs carousel-fade" data-ride="carousel">
 <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active fade in">
     <h1 class="text-back" style="text-transform: uppercase; width: 600px;"><strong id="changeText">Proyectos de</strong><br><span id="changeText2" style="font-size: 21px;
    line-height: -1px;
    top: -10px;
    left: 2px;
    position: relative;">alto standing</span>	</h1>
    </div>

    <div class="item fade in">
      <h1 class="text-back" style="text-transform: uppercase; width: 600px;"><strong id="changeText">Ubicaciones</strong><br><span id="changeText2" style="font-size: 21px;
    line-height: -1px;
    top: -10px;
    left: 2px;
    position: relative;">únicas </span>	</h1>
    </div>

    
  </div>

  
</div>

<style>
	.carousel-fade .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
  opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-control {
  z-index: 2;
}
</style>




       <h1 class="text-back visible-xs" style="text-transform: uppercase;"><strong id="changeText">Proyectos de</strong><br><span id="changeText2" style="font-size: 21px;
    line-height: -1px;
    top: -10px;
    left: 2px;
    position: relative;">alto standing </span>	</h1>
   </div>
	
		
</section> 

<!-- <script>
	    var text = ['Proyectos de alto standing', 'Más que una ubicación, un estilo de vida.'];
        i = 0,
        $div = $('#myDiv');
    
    setInterval(function ()
    {
        $div.text(text[i++ % text.length]);
    }, 1000);
</script> -->



<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop="">
<source src="img/video/home2.webm" type="video/webm">
<source src="img/video/home.mp4" type="video/mp4">
	
</video>

</div>

	<?php include'include/footer2.php' ?>
</body>
</html>