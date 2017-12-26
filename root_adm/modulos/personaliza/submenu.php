	<span class="label label-important"></span></a>
	<ul>
    	<li <?=(strpos($action,"index") !== false && $modulo == "personaliza" && $_GET['p'] == 'personaliza')? 'class="active"':'';?>>
    		<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>&p=personaliza">Personaliza</a>
    	</li>
    	<li <?=(strpos($action,"index") !== false && $modulo == "personaliza" && $_GET['p'] == 'personaliza_italia')? 'class="active"':'';?>>
    		<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>&p=personaliza_italia">Edificio Italia</a>
    	</li>
    	<li <?=(strpos($action,"index") !== false && $modulo == "personaliza" && $_GET['p'] == 'personaliza_villanueva')? 'class="active"':'';?>>
    		<a href="<?=BASEURL."index.php?load=".$m['codigo'];?>&p=personaliza_villanueva">Villanueva</a>
    	</li>
    </ul>