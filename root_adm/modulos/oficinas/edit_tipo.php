<div id="content-header">
    <div id="breadcrumb">
        <a href="<?=$mod_root;?>" class="tip-bottom">Parque Ciudad del Niño</a>
      <a href="<?=$mod_root;?>tipos" class="tip-bottom">Tipos de Vivienda</a>        
      <a href="<?=$mod_root;?>edit_tipo/<?=$query;?>" class="current">Editar Tipo de Vivienda</a>
    </div>
    <h1>Editar Tipo de Vivienda</h1>
</div>

<?php 
    $objeto   = mysql_fetch_assoc(Datos("all_tipos","id = ".$query,"*"));
?>

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">
              <div class="widget-title"> 
                  <span class="icon"> <i class="icon-align-justify"></i> </span>
                  <h5>Tipo de Vivienda</h5>
              </div>

              <div class="widget-content nopadding" id="printhere">
                  
                  <form class="form-horizontal" method="post" action="#" 
                      name="tipo" id="tipo" novalidate="novalidate">

                      <?=error_msges();?>
                      
                      <input type="hidden" name="modo" value="edit" />
                      <input type="hidden" name="ruta" value="<?=$mod_root;?>" />
                      <input type="hidden" name="id" value="<?=$query;?>" />
                    
                      <div class="control-group">
                          <label class="control-label">Nombre</label>
                          <div class="controls">
                              <input type="text" name="nombre" id="nombre"
                                  value="<?=d($objeto['nombre']);?>">
                          </div>
                      </div>

                      <div class="form-actions">
                          <input type="submit" value="Guardar" class="btn btn-success">
                          &nbsp;&nbsp;
                          <a href="<?=$mod_root;?>tipos" class="btn btn-danger">Cancelar</a>
                      </div>

                  </form>

              </div>
          </div>

        </div>
    </div>
</div>