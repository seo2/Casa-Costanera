<?php
	if($_GET['lang']){
		$txt1 = 'HIGH STANDARD';
		$txt2 = 'PROJECTS';
		$txt3 = 'UNIQUE';
		$txt4 = 'LOCATIONS';
	}else{
		$txt1 = 'Proyectos de';
		$txt2 = 'alto standing';
		$txt3 = 'Ubicaciones';
		$txt4 = 'únicas';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Nueva Costanera - Home</title>

<?php include'include/header.php' ?>
</head>
<body class="center-p index">

<?php 
	$activa = "index"; 
	require 'include/nav.php'; 
?>

<section class="cont text-center padd">
<div class="title-center">
 <div id="myCarousel6" class="carousel slide hidden-xs carousel-fade" data-ride="carousel">
 <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active fade in">
     <h1 class="text-back" style="text-transform: uppercase; width: 600px;"><strong id="changeText"><?php echo $txt1; ?></strong><br><span id="changeText2" style="font-size: 21px;
    line-height: -1px;
    top: -10px;
    left: 2px;
    position: relative;"><?php echo $txt2; ?></span>	</h1>
    </div>
	<div class="item fade in">
      <h1 class="text-back" style="text-transform: uppercase; width: 600px;"><strong id="changeText"><?php echo $txt3; ?></strong><br><span id="changeText2" style="font-size: 21px;
    line-height: -1px;
    top: -10px;
    left: 2px;
    position: relative;"><?php echo $txt4; ?> </span>	</h1>
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
.iframe {
  width: 100%;
  position: absolute;
  top: 0;
  height: 100%;
  left: 0;
}
</style>
<h1 class="text-back visible-xs" style="text-transform: uppercase;"><strong id="changeText"><?php echo $txt1; ?></strong><br><span id="changeText2" style="font-size: 21px;
    line-height: -1px;
    top: -10px;
    left: 2px;
    position: relative;"><?php echo $txt2; ?> </span>	</h1>
   </div>
</section> 
<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop="">

<source src="img/video/home2.webm" type="video/webm">
<source src="img/video/home.mp4" type="video/mp4">
	
</video>
<!-- <div class="videoWrapper hidden-sm hidden-xs">
<iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/lL8UpTQYUKY?modestbranding=1&rel=0&modestbranding=1&autohide=1&autoplay=1&vq=hd1080&rel=0&loop=1&playlist=lL8UpTQYUKY&amp;controls=0" frameborder="0" allowfullscreen></iframe>
</div> -->
</div>

	<?php include'include/footer2.php' ?>
</body>
</html>