<?php
	if($_GET['lang']){
		$txt1 = 'LET’S TALK  ';
		$txt2 = 'We want to offer the best project for you. Tell us what you are looking for.';
		$txt3 = 'Tell us';
		$txt4 = 'If you have questions, feel free to contact us, we are interested in having a conversation with you. ';
		$form1 = 'Name and Last Name';
		$form2 = 'E-mail';
		$form3 = 'Telephone';
		$form4 = 'Message';
		$form5 = 'Send';
		$error1 = 'Fill your name';
		$error2 = 'Fill with a valid e-mail';
		$error3 = 'Fill with a valid phone numberas';
		$error4 = '';
		$form6 = 'Thank you . We are interested in having a conversation with you about what you are looking for.';
	}else{
		$txt1 = 'conversemos';
		$txt2 = 'Queremos ofrecerte el mejor proyecto para ti. Cuéntanos qué estas buscando.';
		$txt3 = 'Cuéntanos';
		$txt4 = 'Si tienes preguntas no dudes en escribirnos, nos interesa tener una conversación contigo de lo que buscas.';
		$form1 = 'Nombre y Apellidos';
		$form2 = 'Email';
		$form3 = 'Teléfono';
		$form4 = 'Mensaje';
		$form5 = 'Enviar';
		$error1 = 'Ingrese su nombre';
		$error2 = 'Ingrese su E-mail;Ingrese un e-mail v&aacute;lido';
		$error3 = 'Ingrese su Tel&eacute;fono;Ingrese solo caracteres alfanum&eacute;ricos';
		$error4 = '';
		$form6 = 'Gracias . Nos interesa tener una conversación contigo de lo que buscas.';
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inmobiliaria Nueva Costanera - Contacto</title>

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
					<h2 style="padding-top:0; margin-top: -5px;"><?php echo $txt1; ?></h2>
					<p><?php echo $txt2; ?></p><br><a href="https://gquest.tgapps.net/inmobiliaria/103-68-0-4-0-0-30-1 " class="btn-w btn-primary btn-lg btn-nm" style="float:initial;" target="_blank"><?php echo $txt3; ?> ></a><br><br>
					 <img src="img/empresa.gif" alt="" class="trazo-ani" style="    top: -71px;
    width: 232px;
    height: 160px;
    left: 11px;">
					<h3>Inmobiliaria Nueva Costanera  </h3>
					<p>Av. Nueva Costanera 3802</p>
					<p>Vitacura | Santiago | Chile · T: (56-2) 2246 9363</p>
					<p>contacto@nuevacostanera.cl</p>
				<br><br>
				
				<br><br><br>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 wow fadeInRight">
					<p><?php echo $txt4; ?><p>
					
					
<form class="contacto" role="form" name="form_contacto" action="resultado-contacto.php<?php echo $cola; ?>" method="POST" data-status="standby" id="form_contacto" accept-charset="UTF-8" >
 
  <div class="form-group">
    <input type="text" class="form-control" name="nombre" required="required" id="name" data-valid="1"  tabindex="1" minlength="3" data-message="<?php echo $error1; ?>"  maxlength="180" placeholder="<?php echo $form1; ?>(*):">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" required="required" id="correo" tabindex="4" minlength="3" maxlength="200" placeholder="<?php echo $form2; ?>(*):" data-valid="1;2" data-message="<?php echo $error2; ?>">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" name="fono" required="required" id="telefono" tabindex="3" minlength="3" maxlength="10" placeholder="<?php echo $form3; ?>:" data-valid="1;3" data-message="<?php echo $error3; ?>">
  </div>
  <div class="form-group">
  	<textarea class="form-control" rows="4" name="consulta" maxlength="400" required="required" id="consulta" placeholder="<?php echo $form4; ?>:" data-valid="1;3"></textarea>
  </div>

 <input class="btn-w btn-primary btn-lg" type="submit"  name="enviar" tabindex="7" value="<?php echo $form5; ?>">
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