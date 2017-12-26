<div id="content-header">
  	<div id="breadcrumb">
  		<a href="<?=$mod_root;?>" class="current">Cotizaciones</a> 
    </div>
  	<h1>Cotizaciones</h1>
</div>

<?php 
    $objects  = Datos("cotizaciones_2","1 order by id DESC","*");
?>

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">

              <div class="widget-title"> 
                  <span class="icon"> <i class="icon-th"></i> </span>
                  <h5>Cotizaciones</h5>
              </div>

              <?php 
                  if(mysql_num_rows($objects) > 0)
                  {
              ?>
              <div class="widget-content nopadding">

                  <form action="#" class="form-horizontal">
                        <div class="form-actions">
                            <a href="../root_adm/modulos/cotizaciones_oficinas/export.php" class="btn btn-success">
                                <span class="icon"> <i class="icon-folder-open"></i> </span>
                                Exportar listado a Excel
                            </a>
                        </div>
                  </form>

              </div>
              <?php 
                  }
              ?>

              <div class="widget-content">
                  
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>                              
                              <th width="15%">Fecha</th>
                              <th>RUT</th>
                              <th width="20%">Nombre</th>
                              <th>E-mail</th>
                              <th>Teléfono</th>
                              <th>Modelos</th>
                              <?php 
                              if($_SESSION['USR']['NICK'] != "fdi")
                              {
                              ?>
                                  <th width="8%">Opciones</th>
                              <?php 
                              }
                              ?>
                          </tr>
                          
                      </thead>

                      <tbody>
                          <?php                               
                              while($o = mysql_fetch_assoc($objects))
                              {

                                $cotizada   = mysql_fetch_assoc(Datos("viviendas_2","id = ".$o['depto'],"*"));
                          ?>
                          
                              <tr class="odd gradeX" id="row_<?=$o['id'];?>">

                                  <td><?=d($o['fecha_reg']);?></td>
                                  <td><?=d($o['rut']);?></td>
                                  <td><?=d($o['nombre']." ".$o['apellido']);?></td>
                                  <td><?=d($o['email']);?></td>
                                  <td><?=d($o['telefono']);?></td>
                                  <td style="text-align:center;"><?=d($cotizada['nombre']);?></td>

                                  <?php 
                                    if($_SESSION['USR']['NICK'] != "fdi")
                                    {
                                  ?>
                                  <td class="center">
                                      <div class="pull-right">

                                          <a class="tip" href="#delete" title="Eliminar" data-toggle="modal"
                                              onclick="confirm_borrar('registro',<?=$o['id'];?>);">
                                              <i class="icon-remove"></i>
                                          </a>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                      </div>
                                  </td>
                                  <?php 
                                    }
                                  ?>
                              
                              </tr>
                          
                          <?php
                              }
                          ?>

                          <?php
                              if(mysql_num_rows($objects) == 0)
                              {
                          ?>
                              
                              <tr>                                  
                                  <td colspan="6">
                                      <?='<h5>Aún no hay solicitudes de cotización registradas</h5>';?>
                                  </td>
                              </tr>

                          <?php 
                              }
                          ?>
                                                          
                      </tbody>
                  </table>

              </div>

              <?=modal_delete();?>

          </div>

        </div>
    </div>
</div>