<?php
	if($_GET['lang']){
		$txt1 = 'EXCELLENCE';
		$txt2 = 'DEVELOPMENTS';
		$txt3 = 'Company';
		$txt4 = 'SEE PROJECTS';
	}else{
		$txt1 = 'Desarrollos';
		$txt2 = 'de excelencia';
		$txt3 = 'Empresa';
		$txt4 = 'Ver proyectos';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Nueva Costanera - Empresa</title>

<?php include'include/header.php' ?>
</head>
<body class="center-p">
<?php $activa = "empresa"; require 'include/nav.php'; ?>




<!-- <div class="wrap-full" style="background: url('img/empresa.jpg');"> -->
<div class="wrap-full relative-bg emp-bg enventa-bg" style="background: #F7F9F8;">


<section class="cont text-center padd">
 <div class="title-center">
	<h1 class="text-back wow fadeInUp"><strong><?php echo $txt1; ?> </strong><br><?php echo $txt2; ?></h1>
	
	<!--
<img src="img/link-trazo-anim.gif" alt="" class="visible-xs"  style="width: 321px;
    margin: 0 auto;">
-->
 </div>
</section>
<a href="" class="anchorLink2 " data-atr="bajar" title="bajar">
	
	<img src="img/arrow.gif" alt="" class="down hidden-xs">
	
</a>
<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop=""><source src="img/video/empresa2.mp4" type="video/mp4"></video>
</div>
<div id="bajar"></div>
<section class="text-cont">
	 <div class="container">
	  <div class="col-md-6">
	  <h2><?php echo $txt3; ?></h2>
	  <img src="img/empresa.gif" alt="" class="trazo-ani" style="top: -64px;
    width: 222px;
    height: 155px;
    left: -312px;">
<?php
	if($_GET['lang']){
?>
		<p>With more than 20 years in the market, Inmobiliaria Nueva Costanera has established a trajectory of excellence and vanguard in Santiago and the V Region, positioning itself as developers of iconic and high standard projects.</p>
		<p>The experience of its team has allowed the development of projects in the commercial area, apartments and offices with an urban focus, besides being one of the main operators of the Nueva Costanera neighborhood.</p>
		<p>Wherever it is present, its commitment is to provide the best proposal, focused on high quality details, unique locations, and constant innovation. </p>
<?php		
	}else{
?>
		<p>Con mas de 20 años en el mercado, Inmobiliaria Nueva Costanera ha consolidado una trayectoria de excelencia y vanguardia en Santiago y la V Región, posicionándose como desarrolladores de proyectos icónicos y de alto standing.</p>

	<p>La experiencia de su equipo ha permitido el desarrollo de proyectos en el área comercial, departamentos, oficinas y con foco urbano, además de ser uno de los principales gestores del barrio Nueva Costanera.</p>

	<p>Su compromiso es entregar la mejor propuesta donde estén presentes, enfocados en la alta calidad de los detalles, ubicaciones únicas y la constante innovación.</p>
<?php		
	}
?>	

	<img src="img/final-cuerpotexto.gif" alt=""><br><br>
	<img src="img/logo.jpg" alt="" class="img-responsive" width="260px;">
	<br><a href="en-venta.php" class="btn-w"><?php echo $txt4; ?> ></a>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-5">
		<!-- <div class="fill" style="background: url('img/logo.jpg');"></div> -->
		<!-- <img src="img/logo.jpg" alt="" class="img-responsive"> -->
	</div>
	</div>
</section>




	<?php include'include/footer.php' ?>
</body>
</html>