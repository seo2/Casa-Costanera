<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Inco - Home</title>

	<?php include'include/header.php' ?>
	
  	<!-- SISTEMA -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<link rel="stylesheet" href="validador/validador.css">
	<script src="validador/mdv_formengine.js"></script>
	<script src="validador/fx.js"></script>
	
	
</head>
<body class="contacto">
	<?php require 'include/nav.php'; ?>
	<div class="wrap-full contacto-bg"  style="background: #F7F9F8;">
     <section class="cont">
			<div class="container-ms padd-90">
				<div class="col-md-6  wow fadeInLeft">
					<h2>conversemos</h2>
					<p>Queremos ofrecerte el mejor proyecto para ti. Cuéntanos que estas buscando.</p><br><a href="https://gquest.tgapps.net/inmobiliaria/103-68-0-4-0-0-30-1 " class="btn-w btn-primary btn-lg btn-nm" style="float:initial;" target="_blank">Cuéntanos ></a><br><br>
					 <img src="img/empresa.gif" alt="" class="trazo-ani" style="    top: -71px;
    width: 232px;
    height: 160px;
    left: 11px;">
					<h3>Inmobiliaria Nueva Costanera  </h3>
					<p>Av. Nueva Costanera 3802</p>
					<p>Vitacura | Santiago | Chile · T: (56-2) 2246 9363</p>
				<br><br>
				
				<br><br><br>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 wow fadeInRight">
					<p>Si tienes preguntas no dudes en escribirnos, nos interesa tener una conversación contigo de lo que buscas.<p>
					
					
<form class="contacto" role="form" name="form_contacto" action="resultado-contacto.php" method="POST" data-status="standby" id="form_contacto" accept-charset="UTF-8" >
 
  <div class="form-group">
    <input type="text" class="form-control" name="nombre" required="required" id="name" data-valid="1"  tabindex="1" minlength="3" data-message="Ingrese su nombre"  maxlength="180" placeholder="Nombre y Apellidos(*):">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" required="required" id="correo" tabindex="4" minlength="3" maxlength="200" placeholder="Email(*):" data-valid="1;2" data-message="Ingrese su E-mail;Ingrese un e-mail v&aacute;lido">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" name="fono" required="required" id="telefono" tabindex="3" minlength="3" maxlength="10" placeholder="Teléfono:" data-valid="1;3" data-message="Ingrese su Tel&eacute;fono;Ingrese solo caracteres alfanum&eacute;ricos">
  </div>
  <div class="form-group">
  	<textarea class="form-control" rows="4" name="consulta" maxlength="400" required="required" id="consulta" placeholder="Mensaje:" data-valid="1;3"></textarea>
  </div>

 <input class="btn-w btn-primary btn-lg" type="submit"  name="enviar" tabindex="7" value="Enviar">
</form>


				</div>
			</div>

		</section>
		
<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop=""><source src="img/video/contacto.mp4" type="video/mp4"></video>
</div>

	<?php include'include/footer.php' ?>
	<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="js/validator.js"></script>	
</body>
</html>