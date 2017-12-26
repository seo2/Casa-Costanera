<div id="content-header">
  	<div id="breadcrumb"> 
  		<a href="<?=$mod_root;?>" class="current">Solicitudes de PostVenta</a> 
  	</div>
  	<h1>Solicitudes de PostVenta</h1>
</div>

<?php
    $me             = "index.php?load=postventa";

    $objects 		= Datos("postventa","1 order by id DESC","*");

    if(mysql_num_rows($objects) > 0)
    {

        $active_page    = (isset($_GET['p']))? $_GET['p'] : '' ;

        $paginador      = paginate(mysql_num_rows($objects),30,$active_page,$me);

        $objects        = Datos("postventa",
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
                  <h5>Solicitudes</h5>
              </div>
              
              <div class="widget-content">                    
              		<a href="<?=BASEURL;?>modulos/postventa/export.php" class="btn btn-success" target="_blank">Exportar a Excel</a>
              </div>

              <div class="widget-content">
              
              	  <?=$paginador['html'];?>
                  <br />
                  
                  <table id="mensajes" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>RUT</th>
                              <th>E-mail</th>
                              <th>Fono</th>
                              <th>Proyecto / Casa</th>
                              <th>Detalle</th>
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
                                  <td><?=d($o['rut']);?></td>
                                  <td><?=d($o['email']);?></td>
                                  <td><?=d($o['fono']);?></td>
                                  <td><?=d($o['proyecto'])."<br>Casa:".$o['casa'];?></td>
                                  <td>
	                              <?php 
		                              $pro	= explode(";",$o['problemas']);
		                              
		                              for($p = 0; $p <= count($pro); $p++)
		                              {
		                              	if($pro[$p] != '')
		                              	{
			                              	echo "- ".$pro[$p]."<br>";
		                              	}
		                              }
	                              ?>
                                  </td>
                                  <td style="text-align:center;">
                                    <?=date("Y-m-d",strtotime($o['fecha']));?>
                                  </td>

                                  <td class="center" style="text-align:center;">  
                                      <a class="tip" href="#delete" title="Eliminar" data-toggle="modal"
                                          onclick="confirm_borrar('postventa',<?=$o['id'];?>);">
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