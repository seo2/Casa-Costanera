<?php

	/* Validación de Sesiones */

	$llave 		= md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

	if($_SESSION['USR']['LOGUEADO'] != "SI")
	{	
		// Remover variables de sesion
		session_unset();

		// Destruir la sesión
		session_destroy();

		// Debe iniciar sesión para continuar
		header("location:login.php?e=aut");

	}else{
	
		if($_SESSION['USR']['LLAVE'] != $llave)
		{
			// Datos de inicio de sesión inválidos
			header("location:login.php?e=inc");
		}
		
		$saved_access 	= $_SESSION['USR']['LAST_ACCESS'];
		$now 			= date("Y-n-j H:i:s");
		$the_time 		= (strtotime($now) - strtotime($saved_access));
			
		if($the_time >= 10800) {

			// Destruir sesión
			session_destroy();

			// Auntentíquese, invasor ...
			header("location:login.php?e=ses");

		}else{
			$_SESSION['USR']['LAST_ACCESS'] = $now;
		}

	}