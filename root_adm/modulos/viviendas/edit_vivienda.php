<div id="content-header">
  	<div id="breadcrumb"> 
        <a href="<?=$mod_root;?>" class="tip-bottom">Viviendas</a>
        <a href="<?=$mod_root;?>edit_vivienda/<?=$query;?>" class="current">Editar Vivienda</a>
    </div>
  	<h1>Editar Vivienda</h1>
</div>

<?php 
    $objeto   = mysql_fetch_assoc(Datos("viviendas","id = ".$query,"*"));
?>

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      	<div class="span12">

        	<div class="widget-box">
          		<div class="widget-title"> 
                  <span class="icon"> <i class="icon-align-justify"></i> </span>
                  <h5>Vivienda</h5>
              </div>

              <div class="widget-content nopadding" id="printhere">
                  
                  <form class="form-horizontal" method="post" action="#" 
                      name="vivienda" id="vivienda" novalidate="novalidate">

                      <?=error_msges();?>
                      
                      <input type="hidden" name="modo" value="edit" />
                      <input type="hidden" name="ruta" value="<?=$mod_root;?>" />
                      <input type="hidden" name="id" value="<?=$query;?>" />

                      <div class="control-group">
                          <label class="control-label">Nombre Vivienda</label>
                          <div class="controls">
                              <input type="text" name="nombre" id="nombre" class="span4 required"
                                value="<?=d($objeto['nombre']);?>">
                          </div>
                      </div>

                      <div class="control-group">
                          <label class="control-label">Descripción</label>
                          <div class="controls">
                              <textarea name="descripcion" id="descripcion" rows="12" 
                                class="span9 required textarea_editor"><?=d($objeto['descripcion']);?></textarea>
                          </div>
                      </div>

                      <div class="control-group">
                          <label class="control-label">Precio</label>
                          <div class="controls">
                              <div class="input-append">
                                  <input type="text" name="precio" id="precio" class="span10 required"
                                    value="<?=d($objeto['precio']);?>">
                                  <span class="add-on">UF</span>
                              </div>
                          </div>
                      </div>

                      <div class="control-group">
                          <label class="control-label">Imagen Principal</label>

                          <?=file_field("upload_file",$objeto['imagenes'],"foto");?>

                      </div>

                      <div class="form-actions">
                          <input type="submit" value="Guardar" class="btn btn-success">
                          &nbsp;&nbsp;
                          <a href="<?=$mod_root;?>" class="btn btn-danger">Cancelar</a>
                      </div>

                  </form>

                  <?=modal_field("upload_file","archivo_imagen","foto","midiv",2);?>
                  <?=modal_repositorie("upload_file","foto",2);?>

              </div>
       		</div>

        </div>
    </div>
</div>