<div id="content-header">
  	<div id="breadcrumb">	
        <a href="<?=$mod_root;?>" class="tip-bottom">Parque Ciudad del Niño</a>      
        <a href="<?=$mod_root;?>tipos" class="current">Tipos de Vivienda</a>
    </div>
  	<h1>Tipos de Vivienda</h1>
</div>

<?php

    $me             = "index.php?load=".$modulo."/tipos";

    $objects        = Datos("all_tipos","1 order by nombre ASC","*");

    $active_page    = (isset($_GET['p']))? $_GET['p'] : '' ;

    $paginador      = paginate(mysql_num_rows($objects),25,$active_page,$me);

    $objects        = Datos("all_tipos",
                            "1 order by nombre ASC limit ".$paginador['limitInf'].",".$paginador['tamPag'],
                            "*");
?>

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">

            <div class="widget-box">

                <div class="widget-title"> 
                    <span class="icon"> <i class="icon-tag"></i> </span>
                    <h5>Tipos de Vivienda</h5>
                </div>

                <div class="widget-content nopadding">

                    <form action="#" class="form-horizontal">
                        <div class="form-actions">
                            <a href="<?=$mod_root;?>new_tipo" class="btn btn-success">+ Crear nuevo tipo</a>
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
                                <th>Nombre</th>
                                <th width="10%">Opciones</th>
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

                                    <td <?=$center;?>><?=d($obj['id']);?></td>
                                    <td <?=$inac;?>><?=d($obj['nombre']);?></td>

                                    <td class="center" <?=$inac;?>>
                                        <div class="pull-right">
                                        
                                            <a class="tip <?=($obj['estado'] == 0)? 'hide':'';?>" 
                                                href="#" id="act-<?=$obj['id'];?>"
                                                onclick="activar('tipo',<?=$obj['id'];?>);return false;" 
                                                title="Activar">
                                                <i class="icon-ok"></i>
                                            </a>
                                            <a class="tip <?=($obj['estado'] == 0)? '':'hide';?>" href="#"  
                                                id="desact-<?=$obj['id'];?>"
                                                onclick="desactivar('tipo',<?=$obj['id'];?>);return false;" 
                                                title="Desactivar">
                                                <i class="icon-remove-circle"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a class="tip" href="<?=$mod_root;?>edit_tipo/<?=$obj['id'];?>" title="Editar">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a class="tip" href="#delete" title="Eliminar" data-toggle="modal"
                                                onclick="confirm_borrar('tipo',<?=$obj['id'];?>);">
                                                <i class="icon-remove"></i>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;

                                        </div>
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
                                        <?='<h5>Aún no se han ingresado Tipos de Vivienda al Sistema</h5>';?>
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