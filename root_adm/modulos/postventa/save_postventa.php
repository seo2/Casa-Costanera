<?php

	require_once("../../adm_R.php");

	if (isset($_POST['modo'])){

		$id_obj 				= $_POST["id"];

		// Recibir datos
		$_POST['nombre']		= e($_POST['nombre']);

		$tabla					= "postventa";
		$slug 					= "Ayuda ";
		$txt_mod				= "modificada";
		$txt_new				= "creada";

		$art_this				= "esta ";
		$art_new				= "nueva ";
		$txt_obj 				= "respuesta";

		$ruta_new				= "new_respuesta";
		$ruta_mod				= "edit_respuesta";
		$ruta_volver			= "mensaje";

		switch($_POST["modo"])
		{	

			case "borrar":

				Eliminar($tabla,"id = ".$id_obj) ;

				break;

		}	
	} 
?>