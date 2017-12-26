	<span class="label label-important"></span></a>
	<ul>
    	<li <?=(strpos($action,"parametro") !== false)? 'class="active"':'';?>>
    		<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>/parametros">Parámetros de Sistema</a>
    	</li>        
        <li <?=(strpos($action,"usuario") !== false)? 'class="active"':'';?>>
        	<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>/usuarios">Usuarios</a>
        </li>
        <?php 
            if(is_god())
            {
        ?>
        <li <?=($action == "modulos" || strpos($action, "modulo") !== false  || 
                strpos($action, "field") !== false)? 'class="active"':'';?>>
            <a href="<?=BASEURL."index.php?load=".$m['codigo'];?>/modulos">Modulos</a>
        </li>
        <li <?=($action == "ayuda" || strpos($action, "tema") !== false 
                 || strpos($action, "item") !== false)? 'class="active"':'';?>>
            <a href="<?=BASEURL."index.php?load=".$m['codigo'];?>/ayuda">Ayuda</a>
        </li>
        <?php 
            }
        ?>
    </ul>