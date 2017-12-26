<?php
session_start();

$mdv_admin["DBHOST"]	= "localhost";

// Usuario BD
$mdv_admin["DBUSER"] 	= "nuevacos__hz";

// Password BD
$mdv_admin["DBPWD"]		= "62032597";

// Nombre BD
$mdv_admin["DBNAME"]	= "nuevacos_inco_web";

// Ruta Base
$mdv_admin["ABPATH"] 	= "/";

// Ruta Archivos
$mdv_admin["PHPABPATH"] = $_SERVER['DOCUMENT_ROOT'].$mdv_admin["ABPATH"];

// Ruta Real
$mdv_admin["REAL_RUTE"]	= realpath("");

define("BASEURL","http://www.nuevacostanera.cl/root_adm/");
define("UPL_URL","http://www.nuevacostanera.cl/uploads/");
define("SITEURL","http://www.nuevacostanera.cl/");

define("UPLOAD_RUTE",realpath(""));

// Funciones de Acceso a Datos
require_once("dbaccess.php");

?>