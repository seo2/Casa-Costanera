<?php 
	// Cargar Archivos
	require_once("../../adm_R.php");

	$identificador 	= $_POST['identificador'];

	switch ($_POST['modo']) {
		
		case 'form':
?>
		<div class="span12" style="padding:5px; padding-left:0px;">
			<h4>Subir archivos</h4>

		    <div id="fileform">
				<div class="control-group">
	                <label class="control-label" style="font-size:12px !important;">Archivo</label>
	                <div class="controls">
	                    <input type="file" name="file_name" id="file_name" />
	                    <input type="hidden" name="file_parent" id="file_parent" value="<?=$_POST['folder_parent']?>" />
	                </div>
	            </div>
	            <a href="#" onclick="subir_archivo('<?=$identificador;?>'); return false;" class="btn btn-success">Subir Archivo</a>
	        </div>

	        <div id="fileload" class="hide">
	        	Subiendo archivo...
                <br /><br />
                <div class="progress progress-striped active span10">
                    <div class="bar" style="width: 100%;"></div>
                </div>
	        </div>

            <br /><br />
            <div class="span11" style="margin-left:0px;">
            	<!--Puede editar carpetas u organizar sus archivos de manera independiente desde el<br />
            	<b><a href="<?=BASEURL?>repositorio"><i class="icon-paper-clip"></i> Repositorio de Archivos</a></b>.-->
            </div>
		</div>
<?php
		break;

	}
?>