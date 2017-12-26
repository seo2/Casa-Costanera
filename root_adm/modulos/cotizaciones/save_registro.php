<?php

	require_once("../../adm_R.php");

	if (isset($_POST['modo'])){

		$id_obj 				= $_POST["id"];

		switch($_POST["modo"])
		{
			
			case "borrar":

				Eliminar("cotizaciones","id=".$id_obj);

				break;

		}	
	} 
?>