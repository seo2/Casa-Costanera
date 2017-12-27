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
					<h2><?php echo $txt1; ?></h2>
					 <img src="img/empresa.gif" alt="" class="trazo-ani" style="    top: -71px;
    width: 232px;
    height: 160px;
    left: 11px;">
					<h3>Inmobiliaria Nueva Costanera  </h3>
					<p>Av. Nueva Costanera 3802</p>
					<p>Vitacura | Santiago | Chile · T: (56-2) 2246 9363</p>
				<br><br>
				<p><?php echo $txt2; ?></p>
				<br>
<!-- 				<a href="" class="btn-w btn-primary btn-lg" style="float:initial;">Cuéntanos ></a><br><br><br> -->
				</div>
				<div class="col-md-5 wow fadeInRight">
					<p><?php echo $form6; ?><p>
				</div>
			</div>

		</section>
		
<div class="fade-black"></div>
<video id="v1" class="videoifm hidden-sm hidden-xs" width="100%" height="" autoplay="" loop=""><source src="img/video/contacto.mp4" type="video/mp4"></video>
</div>

	<?php include'include/footer.php' ?>	
</body>
</html>