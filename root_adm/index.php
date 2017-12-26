<?php
    // MDV Admin Config
    require_once("adm_R.php");
    
    // Funciones del sitio
    require_once("functions.php");

    // Sesiones
    require_once("sessions.php");

    ini_set("display_errors",0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=web_title();?></title>

    <?=call_css("mdv_admin");?>

</head>
<body>

<!-- Head -->
<div id="header">
    <div style="width: 180px;">
        <img src="http://www.nuevacostanera.cl/img/logo2.svg" class="logo" alt="">
    </div>
</div>
<!--/Head -->

<?php
    // Via .htaccess se llama al módulo correspondiente
    $modulo     = "mensaje";
    $action     = "index";
    $query      = null;
         
    if (isset($_GET['load']))
    {
        $params = array();
        $params = explode("/", $_GET['load']);
         
        $modulo = $params[0];

        if(isset($params[1]))
        {
            // Reescribe
            $w  = "../";
            $in = "";
        }else{
            // Reescribe
            $w  = "";            
            $in = $modulo."/";
        }
             
        if (isset($params[1]) && !empty($params[1]))
        {
            $action = $params[1];
        }else{
            $action = "index";
        }
             
        if (isset($params[2]) && !empty($params[2]))
        {
            $query  = $params[2];
        }

        if (isset($params[3]) && !empty($params[3]))
        {
            $d_id   = $params[3];
        }        

    }

    $mod_root       = BASEURL."index.php?load=".$modulo."/";

    $data_modulo    = Datos_u("mdv_modulos","codigo = '".$modulo."'","icon,nombre");
    $icono          = $data_modulo['icon'];
    $mod_name       = d($data_modulo['nombre']);

?>


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">

    <li  class="dropdown" id="profile-messages" >
        <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
            <i class="icon icon-user"></i>  
            <span class="text">Saludos, <?=primer_nombre();?></span></a>
    </li>

    <li class="hide">
        <a title="" href="#modal_help" data-toggle="modal" onclick="cargar_ayuda(0);">
            <i class="icon icon-question-sign"></i> 
            <span class="text">Ayuda</span>
        </a>
    </li>

    <li class="">
        <a title="" href="<?=BASEURL;?>logout.php">
            <i class="icon icon-share-alt"></i> 
            <span class="text">Salir</span>
        </a>
    </li>       

  </ul>
</div>
<!--close-top-Header-menu-->


<!--sidebar-menu-->
<div id="sidebar">
    <?php 
        require_once("menu.php");
    ?>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    
    <?php
        if($modulo == "d")
        {
            
            if($query == "new")
            {
                require_once("modulos/d/new.php");
            }else if($query == "edit"){
                require_once("modulos/d/edit.php");
            }else{
                require_once("modulos/d/index.php");
            }

        }else{
            // Archivo del módulo
            if(file_exists ("modulos/".$modulo."/".$action.".php"))
            {
                require_once("modulos/".$modulo."/".$action.".php");
            }else{
                // ERROR
                require_once("modulos/err/404.php");
            }
        }
        
    ?>

</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">
      <!--2013 &copy; MDV Admin | Una solución <a href="http://multidev.cl" target="_blank">Multidev</a> -->
  </div>
</div>

<!--end-Footer-part-->

<?=modal_help();?>

<!-- JS basics -->
<?php
    require_once("js.php");

    // Archivos JS
    if(file_exists ("modulos/".$modulo."/js.php"))
    {
        require_once("modulos/".$modulo."/js.php");
    }
?>



<script type="text/javascript">
    $(document).ready(function() {
        // Check Menu
        <?php 
            if($modulo == "d")
            {
        ?>
                $("#<?=strtolower($action);?>").addClass("active");
        <?php
            }else{
        ?>
                $("#<?=strtolower($modulo);?>").addClass("active");
        <?php
            }
        ?>        
    });
</script>

<!--/JS basics -->

</body>
</html>
