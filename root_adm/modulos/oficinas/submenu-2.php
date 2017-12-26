	<span class="label label-important"></span></a>
	<ul>
    	<li <?=(strpos($action,"index") !== false && $modulo == "viviendas")? 'class="active"':'';?>>
    		<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>">Viviendas</a>
    	</li>        
        <li <?=(strpos($action,"tipos") !== false)? 'class="active"':'';?>>
        	<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>/tipos">Tipos</a>
        </li>
    </ul>