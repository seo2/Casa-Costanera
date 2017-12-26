<?php 
	require_once("root_adm/adm_R.php");
	require_once("validador/fx.php");
	envio_contacto($_POST);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Inco - Home</title>

	<?php include'include/header.php' ?>
	
</head>
<body class="contacto">
	<?php require 'include/nav.php'; ?>
	<div class="wrap-full contacto-bg" style="background: none">
     <section class="cont">
			<div class="container-ms padd-90">
				<div class="col-md-7  wow fadeInLeft">
					<h2>conversemos</h2>
					 <img src="img/empresa.gif" alt="" class="trazo-ani" style="    top: -71px;
    width: 232px;
    height: 160px;
    left: 11px;">
					<h3>Inmobiliaria Nueva Costanera  </h3>
					<p>Av. Nueva Costanera 3802</p>
					<p>Vitacura | Santiago | Chile · T: (56-2) 2246 9363</p>
				<br><br>
				<p>Queremos ofrecerte el mejor proyecto para ti. Cuéntanos que estas buscando. </p>
				<br>
				<a href="" class="btn-w btn-primary btn-lg" style="float:initial;">Cuéntanos ></a><br><br><br>
				</div>
				<div class="col-md-5 wow fadeInRight">
					<p>Gracias . Nos interesa tener una conversación contigo de lo que buscas. <p>
				</div>
			</div>

		</section>
		
<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop=""><source src="img/video/contacto.mp4" type="video/mp4"></video>
</div>

	<?php include'include/footer.php' ?>	
</body>
</html>