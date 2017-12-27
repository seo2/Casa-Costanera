<?php
	if($_GET['lang']){
		$menu1 = 'Home';
		$menu2 = 'Company';
		$menu3 = 'Projects';
		$menu4 = 'Projects for sale';
		$menu5 = 'Accomplished Projects';
		$menu6 = "Let's talk";
		$cola  = "?lang=en";
		$class = "class='current'";
		$clase = "";
	}else{
		$menu1 = 'Inicio';
		$menu2 = 'Empresa';
		$menu3 = 'Proyectos';
		$menu4 = 'Proyectos en Venta';
		$menu5 = 'Proyectos ejecutados';
		$menu6 = 'Conversemos';
		$cola  = "";
		$class = "";
		$clase = "class='current'";
	}
?>
<header class="header  wow fadeIn">
	<ul id="idiomas" class="hidden-xs">
		<li><a href="index.php" <?php echo $clase; ?>>ES</a></li>
		<li>|</li>
		<li><a href="index.php?lang=en" <?php echo $class; ?>>EN</a></li>
	</ul>
	<nav class="navbar navbar-inverse">
  <div class="navbar-header">
  <a href="index.php<?php echo $cola; ?>"><img src="img/logo2.svg" alt="" class="logo img-responsive"></a>
        
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>

  
      </div>
    <div id="navbar" class="navbar-collapse bajo">
    <ul class="nav navbnav navbar-nav navbar-right">
    <li><a href="index.php<?php echo $cola; ?>" <?php if(strcmp($activa, "index") == 0) echo "class=\"activo\"";?>><?php echo $menu1; ?></a></li>
      <li><a href="empresa.php<?php echo $cola; ?>" <?php if(strcmp($activa, "empresa") == 0) echo "class=\"activo\"";?>><?php echo $menu2; ?></a></li>
      <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $menu3; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="en-venta.php<?php echo $cola; ?>" <?php if(strcmp($activa, "proyectos") == 0) echo "class=\"activo\"";?>><?php echo $menu4; ?></a></li>
            <li style=""><a href="ejecutados.php<?php echo $cola; ?>" <?php if(strcmp($activa, "ejecutado") == 0) echo "class=\"activo\"";?>><?php echo $menu5; ?></a></li>
          </ul>
        </li>
        
      
      <li class="visible-xs"><a href="en-venta.php<?php echo $cola; ?>" <?php if(strcmp($activa, "proyectos") == 0) echo "class=\"activo\"";?>><?php echo $menu4; ?></a></li>
      <li class="visible-xs"><a href="ejecutados.php<?php echo $cola; ?>" <?php if(strcmp($activa, "realizados") == 0) echo "class=\"activo\"";?>><?php echo $menu5; ?></a></li>

      <li><a href="contacto.php<?php echo $cola; ?>" <?php if(strcmp($activa, "contacto") == 0) echo "class=\"activo\"";?>><?php echo $menu6; ?></a></li>
      <li class="visible-xs" id="idiomamob"><a href="index.php" <?php echo $clase; ?>>ES</a> | <a href="index.php?lang=en" <?php echo $class; ?>>EN</a></li>
      <!--
<li style="padding: 19px 2px 0;"><a href="en-venta.php" style="letter-spacing: 0; font-size: 12px;">EN /</a></li>
      <li style="padding: 19px 2px 0;"><a href="en-venta.php" style="letter-spacing: 0; font-size: 12px;">ES</a></li>
  
-->
    </ul>
      
  </div>
</nav>
</header>

<script>
  var width = $(window).width();
$(window).resize(function () {
    if (width >= '767px') {
        $('#navbar').addClass('collapse');
    }
});
</script>



