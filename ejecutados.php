<?php
	if($_GET['lang']){
		$txt1 = 'EXCELLENCE  ';
		$txt2 = 'INNOVATION';
		$txt3 = 'Company';
		$txt4 = 'SEE PROJECTS';
	}else{
		$txt1 = 'Innovación por';
		$txt2 = 'excelencia';
		$txt3 = 'Empresa';
		$txt4 = 'Ver proyectos';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Nueva Costanera - Proyectos ejecutador</title>

<?php include'include/header.php' ?>
</head>
<body class="center-p pad2">
<?php $activa = "realizados"; require 'include/nav.php'; ?>
<div class="wrap-full ejecutados relative-bg enventa-bg" style="background: none;">
<section class="cont text-center padd">
 <div class="title-center">
	<h1 class="text-back wow fadeInDown"><strong><?php echo $txt1; ?></strong><br><?php echo $txt2; ?></h1>
 </div>
</section>
<a href="" class="anchorLink2 " data-atr="bajar" title="bajar">
	
	<img src="img/arrow.gif" alt="" class="down hidden-xs">
</a>
<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop=""><source src="img/video/realizado.mp4" type="video/mp4"></video>
</div>
</div>


<div id="bajar"></div>
<section class="text-cont">
</div> <div class="container">
<section class="proy-realizados">

	<div class="col-md-3 col-xs-6 padd-0">
		<a class="example-image-link" href="lightbox/casa-costanera.jpg" data-lightbox="example-set2a" data-title="">
			<img src="img/reali2/casa-costanera-realizado.jpg" alt="" class="img-responsive">
		</a>
		<a href="lightbox/casa-costanera2.jpg" data-lightbox="example-set2a" style="display:none; visibility: hidden;"></a>
		<a href="img/realizados/casacostanera1.jpg" data-lightbox="example-set2a" style="display:none; visibility: hidden;"></a>
		<a href="img/realizados/casacostanera2.jpg" data-lightbox="example-set2a" style="display:none; visibility: hidden;"></a>
		<a href="img/realizados/casacostanera3.jpg" data-lightbox="example-set2a" style="display:none; visibility: hidden;"></a>
		<!-- <img src="img/realizados/aguas-claras-1-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">
			Mall Casacostanera 
		</div>
		

		<div class="info-r" id="info-r1">
			<ul>
				
				<li>Ubicación: Vitacura, Santiago</li>
				<li>m<sup>2</sup> Construidos: 62.000 </li>
				<li style="color:#999;">.</li>
				
				<!-- <li>Fecha de inicio del proyecto: Enero 2014</li>
				<li>Fecha de término del proyecto: Octubre 2015</li> -->
			</ul>
		</div>
	</div>
	<!-- <div class="col-md-3 col-xs-6 padd-0">
		<img src="img/reali2/espacio-tres-b.jpg" alt="" class="img-responsive">
		<div class="info_proy">
			Espacio Tres  Stripcenter 
		</div>
		

		<div class="info-r" id="info-r2">
			<ul>
				<li>Ubicación: San Joaquín, Santiago </li>
				<li>Nº Locales: 20 </li>
				<li>m<sup>2</sup> Construidos: 2.199 </li>
			</ul>
		</div>
	</div> -->
	<div class="col-md-3 col-xs-6 padd-0">


		<a class="example-image-link" href="lightbox/espacio-tres-3-b.jpg" data-lightbox="example-set2b" data-title="">
			<img src="img/reali2/espacio-tres-b.jpg" alt="" class="img-responsive">
		</a>
		<!-- <img src="img/realizados/borde-bahia-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">
			Espacio Tres  Torre A
		</div>
		

		<div class="info-r" id="info-r3">
			<ul>
				
<li>Ubicación: San Joaquín, Santiago </li>
				<!-- <li>Fecha de inicio del proyecto: Ago. 2007</li>
				<li>Fecha de término del proyecto: Feb. 2010 </li> -->
				<li>Nº Departamentos: 286 </li>
				<li>m2 Construidos: 32.200 </li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/edificio-torre-baron-2.jpg" data-lightbox="example-set2c" data-title="">
		<img src="img/reali2/torre-baron-II-b.jpg" alt="" class="img-responsive">
	</a>

		<a href="lightbox/torrebaronII_01.jpg" data-lightbox="example-set2c" style="display:none; visibility: hidden;"></a>
		<!-- <a href="lightbox/torrebaronII_02.jpg" data-lightbox="example-set2c" style="display:none; visibility: hidden;"></a> -->
		<!-- <img src="img/realizados/casacostanera-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">
			Torre Barón 2 
		</div>
		

		<div class="info-r" id="info-r4">
			<ul>
				<li>Ubicación: Cerro Barón, Valparaíso </li>
				<!-- <li>Fecha de inicio del proyecto: Mar. 2013 </li>
				<li>Fecha de término del proyecto: Jun. 2014 </li> -->
				<li>Nº Departamentos: 24 </li>
				<li>m2 Construidos: 21.044 </li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/espacio-tres-3-a.jpg" data-lightbox="example-set2d" data-title="">
		<img src="img/reali2/espacio-3-a_hover.jpg" alt="" class="img-responsive">
		</a>
		<!-- <img src="img/realizados/contralmirante-fernandez-vial-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">
			Espacio Tres · Torre B
		</div>
		

		<div class="info-r" id="info-r5">
			<ul>
				<li>Ubicación: San Joaquín, Santiago</li>
				<!-- <li>Fecha de inicio del proyecto: Jun. 2013 </li>
				<li>Fecha de término del proyecto: Jun. 2015 </li> -->
	<li>Nº Departamentos: 285 </li>
<li>m2 Construidos: 19.756 </li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/borde-bahia.jpg" data-lightbox="example-set2e" data-title="">
		<img src="img/reali2/borde-bahia-b.jpg" alt="" class="img-responsive">
	</a>
	<a href="lightbox/bordebahia1.jpg" data-lightbox="example-set2e" style="display:none; visibility: hidden;"></a>
		<a href="lightbox/bordebahia2.jpg" data-lightbox="example-set2e" style="display:none; visibility: hidden;"></a>
		<!-- <img src="img/realizados/espacio3-ii-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Borde Bahía </div>
		

		<div class="info-r" id="info-r6">
			<ul>
				<li>Ubicación: Playa Ancha, Valparaíso</li>
				<!-- <li>Fecha de inicio del proyecto: Ene. 2007</li>
				<li>Fecha de término del proyecto:Mar. 2009 </li> -->
				<li>Nº Departamentos: 194 </li>
				<li>m2 Construidos: 17.486 </li>
			</ul>
		</div>
	</div>



		<div class="col-md-3 col-xs-6 padd-0">
		<a class="example-image-link" href="lightbox/rocas-de-costa-brava.jpg" data-lightbox="example-set2f" data-title="">
		<img src="img/reali2/costa-brava-b.jpg" alt="" class="img-responsive">
		</a>
		
		<!-- <a href="lightbox/costabrava2.jpg" data-lightbox="example-set2f" style="display:none; visibility: hidden;"></a> -->
		<a href="lightbox/costabrava4.jpg" data-lightbox="example-set2f" style="display:none; visibility: hidden;"></a>
		<!-- <img src="img/realizados/mirador-santaanita-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Rocas de Costa Brava</div>
		

		<div class="info-r" id="info-r1">
			<ul>
				<li>Ubicación: Con-Con, Valparaíso</li>
				<li>m2 Construidos: 10.000 </li>
				
<!-- <li>Fecha de inicio del proyecto: May. 2006 </li></li>
<li>Fecha de término del proyecto: Mar. 2008 </li> -->
<li>Nº Departamentos: 56</li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
		<a class="example-image-link" href="lightbox/mirador-santa-anita.jpg" data-lightbox="example-set2g" data-title="">
			<img src="img/reali2/mirador-santa-anita-b.jpg" alt="" class="img-responsive">
		</a>
		<a href="lightbox/santaanita1.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>
		<a href="lightbox/santaanita2.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>
		<a href="lightbox/santaanita3.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>
		<a href="lightbox/santaanita5.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>	
		<a href="lightbox/santaanita7.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>
		<a href="lightbox/santaanita9.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>	

		<a href="img/realizados/santa_anita1.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>	
		<a href="img/realizados/santa_anita2.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>	
		<a href="img/realizados/santa_anita3.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>	
		<a href="img/realizados/santa_anita4.jpg" data-lightbox="example-set2g" style="display:none; visibility: hidden;"></a>		
		<!-- <img src="img/realizados/aguas-claras-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">
		Mirador Santa Anita</div>
		

		<div class="info-r" id="info-r2">
			<ul>
				<li>Ubicación:La Dehesa, Santiago </li>
				<!-- <li>Fecha de inicio del proyecto: Nov. 2006 </li>
				<li>Fecha de término del proyecto: Jul. 2012 </li> -->
				<li>Nº Departamentos:72 </li>
				<li>m2 Construidos: 46.131 </li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	 <a class="example-image-link" href="lightbox/aguas-claras.jpg" data-lightbox="example-set2h" data-title="">
		<img src="img/reali2/aguas-claras-2.jpg" alt="" class="img-responsive">
	 </a>
	<!--  <a href="lightbox/aguasclarasII.jpg" data-lightbox="example-set2h" style="display:none; visibility: hidden;"></a> -->
	<a href="lightbox/aguasclarasII_2.jpg" data-lightbox="example-set2h" style="display:none; visibility: hidden;"></a>
		<!-- <img src="img/realizados/rocas-de-costabrava-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Aguas Claras II</div>
		

		<div class="info-r" id="info-r3">
			<ul>
				<!-- <li>Fecha de inicio del proyecto: Mar. 2005 </li>
				<li>Fecha de término del proyecto: Ene. 2007 </li> -->
				<li>Nº Departamentos: 12</li>
				<li>Ubicación: La Dehesa, Santiago </li>
				<li>m2 Construidos: 5.400 </li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/contralmirante.jpg" data-lightbox="example-set2i" data-title="">
		<img src="img/reali2/contraalmirante-b.jpg" alt="" class="img-responsive">
		</a>
		<a href="lightbox/cafv.jpg" data-lightbox="example-set2i" style="display:none; visibility: hidden;"></a>
		<!-- <img src="img/realizados/torre-baron-1-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Contralmirante Fernández Vial </div>
		

		<div class="info-r" id="info-r4">
			<ul>
				<li>Ubicación: La Dehesa, Santiago</li>
				<!-- <li>Fecha de inicio del proyecto: Jul. 2005</li>
				<li>Fecha de término del proyecto: Ene. 2007</li> -->
				<li>m2 Construidos: 4.571 </li>
				<li>Nº Departamentos: 16</li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/torrebaron21.png" data-lightbox="example-set2j" data-title="">
		<img src="img/reali2/baron3.jpg" alt="" class="img-responsive">
	</a>
	<a class="example-image-link" href="lightbox/torrebaron2.png" style="display:none; visibility: hidden;" data-lightbox="example-set2j" data-title=""></a>
		<!-- <img src="img/realizados/torre-baron-2-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Torre Barón</div>
		

		<div class="info-r" id="info-r5">
			<ul>
			<li>Ubicación: Valparaíso</li>
			<li>m2 Construidos: 13.000 </li>
<!-- <li>Fecha de inicio del proyecto: Jun. 2003 </li>
<li>Fecha de término del proyecto: Ene. 2005 </li> -->
<li>Nº Departamentos: 124</li>
			</ul>
		</div>
	</div>
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/aguas-claras-2.jpg" data-lightbox="example-set2k" data-title="">
		<img src="img/reali2/aguas-claras-1.jpg" alt="" class="img-responsive">
	</a>
	<a href="lightbox/aguasclarasi_01.jpg" data-lightbox="example-set2k" style="display:none; visibility: hidden;"></a>
	<!-- <a href="lightbox/aguasclarasi_02.jpg" data-lightbox="example-set2k" style="display:none; visibility: hidden;"></a>
	<a href="lightbox/aguasclarasi_03.jpg" data-lightbox="example-set2k" style="display:none; visibility: hidden;"></a> -->
	<a href="lightbox/aguasclarasi_04.jpg" data-lightbox="example-set2k" style="display:none; visibility: hidden;"></a>
		<!-- <img src="img/realizados/torre-valparaiso-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Aguas Claras </div>
		

		<div class="info-r" id="info-r6">
			<ul>
				<li>Ubicación: La Dehesa, Santiago </li>
<!-- <li>Fecha de inicio del proyecto: Ene. 2003 </li>
<li>Fecha de término del proyecto: Oct. 2004 </li> -->
<li>Nº Departamentos: 12 </li>
<li>m2 Construidos: 5.682 </li>
			</ul>
		</div>
	</div>
	<!-- <div class="col-md-3 col-xs-6 padd-0">
		<img src="img/realizados/torre-valparaiso-a.jpg" alt="" class="img-responsive">
		<div class="info_proy">Torre Valparaíso </div>
		

		<div class="info-r" id="info-r6">
			<ul>
				<li>Ubicación: Valparaíso </li>
<li>Nº Departamentos: 219 </li>
<li>m2 Construidos: 25.000 </li>
			</ul>
		</div>
	</div> -->
	<div class="col-md-3 col-xs-6 padd-0">
	<a class="example-image-link" href="lightbox/via-aurora.jpg" data-lightbox="example-set2l" data-title="">
		<img src="img/reali2/via-aurora-b.jpg" alt="" class="img-responsive">
	</a>
		<!-- <img src="img/realizados/torre-valparaiso-b.jpg" alt="" class="img-responsive img_hover"> -->
		<div class="info_proy">Vía Aurora</div>
		<div class="info-r" id="info-r6">
			<ul>
			<li>	Ubicación: Lo Curro, Santiago </li>
<!-- <li>Fecha de inicio del proyecto: Oct. 2000 </li>
<li>Fecha de término del proyecto: Dic. 2001 </li> -->
<li>Nº Departamentos: 8 </li>
<li>m2 Construidos: 3.200 </li>
			</ul>
		</div>
	</div>
</section>
</div>
</section>

<div class="container"><a href="en-venta.php<?php echo $cola; ?>" class="btn-w text-center" style="width: 300px; margin: 90px auto; display: block;">
	 Ver proyectos en venta &gt;</a></div>

<script>
	document.querySelector("#btn1").addEventListener("click", function(){
    document.querySelector("#info-r1").style.display = "block";
});
</script>
<script>
	document.querySelector("#btn2").addEventListener("click", function(){
    document.querySelector("#info-r2").style.display = "block";
});
</script>
<script>
	document.querySelector("#btn3").addEventListener("click", function(){
    document.querySelector("#info-r3").style.display = "block";
});
</script>
<script>
	document.querySelector("#btn4").addEventListener("click", function(){
    document.querySelector("#info-r4").style.display = "block";
});
</script>
<script>
	document.querySelector("#btn5").addEventListener("click", function(){
    document.querySelector("#info-r5").style.display = "block";
});
</script>
<script>
	document.querySelector("#btn6").addEventListener("click", function(){
    document.querySelector("#info-r6").style.display = "block";
});
</script>



	<?php include'include/footer.php' ?>
</body>
</html>