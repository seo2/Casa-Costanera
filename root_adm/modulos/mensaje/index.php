<div id="content-header">
  	<div id="breadcrumb"> 
  		<a href="<?=$mod_root;?>" class="current">Mensajes de Contacto</a> 
  	</div>
  	<h1>Mensajes de Contacto Nueva Costanera</h1>
</div>

<?php
    $me             = "index.php?load=mensaje";

    $objects 		= Datos("mensaje","1 order by id DESC","*");

    if(mysql_num_rows($objects) > 0)
    {

        $active_page    = (isset($_GET['p']))? $_GET['p'] : '' ;

        $paginador      = paginate(mysql_num_rows($objects),30,$active_page,$me);

        $objects        = Datos("mensaje",
                                "1 order by id DESC limit ".$paginador['limitInf'].",".$paginador['tamPag'],
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
                  <h5>Mensajes</h5>
              </div>
              
              <div class="widget-content">                    
              		<a href="<?=BASEURL;?>modulos/mensaje/export.php" class="btn btn-success" target="_blank">Exportar a Excel</a>
              </div>

              <div class="widget-content">
              
              	  <?=$paginador['html'];?>
                  <br />
                  
                  <table id="mensajes" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>Correo</th>
                              <th>Telefono</th>
                              <th>Mensaje / Consulta</th>
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
                                  <td><?=d($o['fono']);?></td>
                                  <td><?=d($o['mensaje']);?></td>
                                  <td style="text-align:center;">
                                    <?=$fecha[2]."/".$fecha[1]."/".$fecha[0];?>
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