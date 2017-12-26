<?php 
    // Proyectos
    $tag['valle Las Pircas']  = "Valle las Pircas";
    $tag['Parque Ingles III']  	= "Parque ingles III";
    $tag['Parque Ingles IV']  	= "Parque ingles IV";

    $codigo             = $_GET['p'];
?>
<div id="content-header">
  	<div id="breadcrumb">
  		<a href="<?=$mod_root;?>" class="current">Cotizaciones</a> 
    </div>
  	<h1>Cotizaciones</h1>
</div>

<?php 
	if($_POST['desde'] != '' && $_POST['hasta'] != '')
	{
		$desde		= date("Y-m-d H:i",strtotime($_POST['desde']));
		$hasta		= date("Y-m-d H:i",strtotime($_POST['hasta']));
		$objects  	= Datos("cotizaciones","proyecto = '$codigo' and fecha_reg >= '$desde' and fecha_reg <= '$hasta' order by id DESC","*");
	}
	else
	{
    	$objects  = Datos("cotizaciones","proyecto = '$codigo' order by id DESC","*");
    }
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

                  <form method="POST" class="form-horizontal">
                        <div class="form-actions">
                        	
                        	<div class="span2">
                        		<b>Desde</b><br>
                        		<input type="text" name="desde" id="desde" class="span12 datepicker" data-date="<?=date('d-m-Y');?>" data-date-format="dd-mm-yyyy" 
                                	value="<?=$_POST['desde'];?>">
                        	</div>
                            
                            <div class="span2">    
	                            <b>Hasta</b><br>
	                            <input type="text" name="hasta" id="hasta" class="span12 datepicker" data-date="<?=date('d-m-Y');?>" data-date-format="dd-mm-yyyy" 
                                	value="<?=$_POST['hasta'];?>">
                            </div>
                            
                            <div class="span1">
                            	<br>
	                            <input type="submit" value="Filtrar" class="btn btn-success span12">
                            </div>
                        	
                        	<div class="span2">
                        		<br>
	                            <a href="../root_adm/modulos/cotizaciones/export.php?p=<?=$codigo;?>&d=<?=$_POST['desde']?>&h=<?=$_POST['hasta'];?>" class="btn btn-success">
	                                <span class="icon"> <i class="icon-folder-open"></i> </span>
	                                Exportar listado a Excel
	                            </a>
                        	</div>
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
                              <th>Modelo</th>
                              <th>Proyecto</th>
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

                                $cotizada   = mysql_fetch_assoc(Datos("viviendas","id = ".$o['depto'],"*"));
                          ?>
                          
                              <tr class="odd gradeX" id="row_<?=$o['id'];?>">

                                  <td><?=d($o['fecha_reg']);?></td>
                                  <td><?=d($o['rut']);?></td>
                                  <td><?=d($o['nombre']." ".$o['apellido']);?></td>
                                  <td><?=d($o['email']);?></td>
                                  <td><?=d($o['telefono']);?></td>
                                  <td style="text-align:center;"><?=d($o['depto']);?></td>
                                  <td style="text-align:center;"><?=d($o['proyecto']);?></td>

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