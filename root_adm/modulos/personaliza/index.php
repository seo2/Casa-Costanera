<?php 
	$fuente 				= $_GET['p'];
	
	$titulo['personaliza']				= "Formulario General";
	$titulo['personaliza_italia']		= "Edificio Italia";
	$titulo['personaliza_villanueva']	= "Edificio Parque Villanueva";
?>
<div id="content-header">
  	<div id="breadcrumb"> 
  		<a href="<?=$mod_root;?>">Personaliza</a> 
  		<a href="<?=$mod_root;?>&p=<?=$fuente;?>" class="current"><?=$titulo[$fuente];?></a> 
  	</div>
  	<h1>Solicitudes</h1>
</div>

<?php
    $me             = "index.php?load=personaliza&p=".$fuente;

    $objects 		= Datos("contacto","proyecto = '$fuente' order by id DESC","*");

    if(mysql_num_rows($objects) > 0)
    {

        $active_page    = (isset($_GET['p']))? $_GET['p'] : '' ;

        $paginador      = paginate(mysql_num_rows($objects),30,$active_page,$me);

        $objects        = Datos("contacto",
                                "proyecto = '$fuente' order by id DESC limit ".$paginador['limitInf'].",".$paginador['tamPag'],
                                "*");
    }   
?>

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">

              <div class="widget-title"> 
                  <span class="icon"> <i class="<?=$icono;?>"></i> </span>
                  <h5>Solicitudes</h5>
              </div>
              
              <div class="widget-content">                    
              		<a href="<?=BASEURL;?>modulos/personaliza/export.php?p=<?=$fuente;?>" class="btn btn-success" target="_blank">Exportar a Excel</a>
              </div>

              <div class="widget-content">
              
              	  <?=$paginador['html'];?>
                  <br />
                  
                  <table id="mensajes" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>E-mail</th>
                              <th>Teléfono</th>
                              <th>RUT</th>
                              <th>Consulta</th>
                              <th>Fecha</th>
                              <th>Opciones</th>
                          </tr>
                          
                      </thead>

                      <tbody>
                          <?php
                              // Objetos
                              while($o = mysql_fetch_assoc($objects))
                              {
                                    $fecha  = explode("-",$o['fecha']);
                          ?>
                          
                              <tr class="odd gradeX" id="row_<?=$o['id'];?>">

                                  <td><?=d($o['nombre']);?></td>
                                  <td><?=d($o['email']);?></td>
                                  <td><?=d($o['telefono']);?></td>
                                  <td><?=d($o['rut']);?></td>
                                  <td><?=d($o['mensaje']);?></td>
                                  <td style="text-align:center;">
                                    <?=date("d-m-Y",strtotime($o['fecha']));?>
                                  </td>

                                  <td class="center" style="text-align:center;">  
                                      <a class="tip" href="#delete" title="Eliminar" data-toggle="modal"
                                          onclick="confirm_borrar('mensaje',<?=$o['id'];?>);">
                                          <i class="icon-remove"></i>
                                      </a>
                                  </td>
                              
                              </tr>
                          
                          <?php
                              }
                          ?>

                          <?php
                              if(mysql_num_rows($objects) == 0)
                              {
                          ?>
                              
                              <tr>                                  
                                  <td colspan="5">
                                      <?='<h5>Aún no  hay mensajes.</h5>';?>
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