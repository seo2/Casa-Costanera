<div id="content-header">
  	<div id="breadcrumb">
        <a href="<?=$mod_root;?>" class="current">Oficinas</a> 
    </div>
  	<h1>Oficinas</h1>
</div>

<?php

    $me             = "index.php?load=".$modulo."/index";

    $objects        = Datos("viviendas_2","1 order by id DESC","*");

    if(mysql_num_rows($objects) > 0)
    {

        $active_page    = (isset($_GET['p']))? $_GET['p'] : '' ;

        $paginador      = paginate(mysql_num_rows($objects),15,$active_page,$me);

        $objects        = Datos("viviendas_2",
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
                    <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Oficinas</h5>

                </div>

                <div class="widget-content nopadding">

                    <form action="#" class="form-horizontal">
                        <div class="form-actions">
                            <a href="<?=$mod_root;?>new_vivienda" class="btn btn-success">+ Crear nueva oficina </a>
                        </div>
                    </form>

                </div>

                <div class="widget-content">

                    <?=$paginador['html'];?>
                    <br />
                  
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="12%">Imagen</th>
                                <th width="25%">Nombre</th>
                                <th>Información</th>
                                <!--<th>Precio</th>-->
                                <th width="8%">Opciones</th>
                            </tr>                          
                        </thead>

                        <tbody>

                            <?php
                            
                                while($obj = mysql_fetch_assoc($objects))
                                {

                                    // Inactivo
                                    $inac   = ($obj['estado'] == 1)? 'style="color:#b94a48; background-color:#f2dede;"':'';
                                    $center = ($inac != "")? substr($inac, 0, -1).'; text-align:center"': 'style="text-align:center;"';
                            ?>
                          
                                <tr class="odd gradeX" id="row_<?=$obj['id'];?>">

                                    <td <?=$center?>><?=d($obj['id']);?></td>
                                    <td <?=$center?>>
                                        <a class="lightbox_trigger" href="<?=UPL_URL.$obj['imagenes'];?>">
                                            <img src="<?=UPL_URL.$obj['imagenes'];?>" width="100%" />
                                        </a>
                                    </td>
                                    <td><?=d($obj['nombre']);?></td>
                                    <td <?=$inac?>>
                                        <?php 
                                            echo d(str_replace("\n","<br />",$obj['descripcion']));
                                        ?>
                                    </td>
                                    <!--<td <?=$inac?>>UF&nbsp;<?=d($obj['precio']);?></td>-->

                                    <td class="center" <?=$center?>>
                                            <a class="tip" href="<?=$mod_root;?>edit_vivienda/<?=$obj['id'];?>" title="Editar">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a class="tip" href="#delete" title="Eliminar" data-toggle="modal"
                                                onclick="confirm_borrar('vivienda',<?=$obj['id'];?>);">
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
                                    <td colspan="7">
                                        <?='<h5>Aún no se han ingresado viviendas al Sistema</h5>';?>
                                    </td>
                                </tr>

                            <?php 
                                }
                            ?>                           
                                                          
                        </tbody>

                    </table>

                    
                    <?=$paginador['html'];?>
                    

                </div>

                <?=modal_delete();?>

            </div>

        </div>
    </div>
</div>