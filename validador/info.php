<?php 
	require_once("../root_adm/adm_R.php");
	
	$first	= Datos_u("viviendas","id = '$_POST[vivienda]'","*");
?>

<div class="border">
	<div class="col-md-8">
			<a class="fancybox" href="uploads/<?=$first['imagenes']?>" data-fancybox-group="gallery" title="">
				<div class="btn_zoom"><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span></div>
				<img src="uploads/<?=$first['imagenes']?>" alt="" class="img-responsive">
			</a>
	</div>

	<div class="col-md-4 inner-detail">
		<h2><?=$first['nombre'];?></h2>
		<?=d($first['descripcion']);?>
	</div>
</div>