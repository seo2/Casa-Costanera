<header class="header  wow fadeIn">
<nav class="navbar navbar-inverse">
  <div class="navbar-header">
  <a href="index.php"><img src="img/logo2.svg" alt="" class="logo img-responsive"></a>
        
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>

  
      </div>
    <div id="navbar" class="navbar-collapse bajo">
    <ul class="nav navbnav navbar-nav navbar-right">
    <li><a href="index.php" <?php if(strcmp($activa, "index") == 0) echo "class=\"activo\"";?>>Inicio</a></li>
      <li><a href="empresa.php" <?php if(strcmp($activa, "empresa") == 0) echo "class=\"activo\"";?>>Empresa</a></li>
      <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="en-venta.php" <?php if(strcmp($activa, "proyectos") == 0) echo "class=\"activo\"";?>>Proyectos en Venta</a></li>
            <li style=""><a href="ejecutados.php" <?php if(strcmp($activa, "ejecutado") == 0) echo "class=\"activo\"";?>>Proyectos ejecutados</a></li>
           
          </ul>
        </li>
        
      
      <li class="visible-xs"><a href="en-venta.php" <?php if(strcmp($activa, "proyectos") == 0) echo "class=\"activo\"";?>>Proyectos en Venta</a></li>
      <li class="visible-xs"><a href="ejecutados.php" <?php if(strcmp($activa, "realizados") == 0) echo "class=\"activo\"";?>>Proyectos ejecutados</a></li>

      <li><a href="contacto.php" <?php if(strcmp($activa, "contacto") == 0) echo "class=\"activo\"";?>>Conversemos</a></li>
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



