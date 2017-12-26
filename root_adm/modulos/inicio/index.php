    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="<?=$mod_root;?>" title="Ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a>
        </div>
        <h1>Bienvenido administrador Nueva Costanera</h1>
    </div>
    <!--End-breadcrumbs-->

    <style type="text/css">
        .deseo
        {
            color:#EEE;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 5px;
            cursor: pointer;
        }

        .deseo i
        {
            font-size: 28px;
            line-height: 40px;
            color:#FFF;
        }

        .deseo b
        {
            font-size: 16px;
            line-height: 20px;
            color:#FFF;
        }
    </style>

    <div class="container-fluid" >
    <hr>

        <h4 style="font-weight:normal; margin-bottom:30px;">
            ¿Qué deseas hacer a continuación, <?=primer_nombre();?>?
        </h4>

        <div class="row-fluid">

            <div class="deseo bg_lb span3" onclick="document.location.href='<?=BASEURL;?>index.php?load=mensaje'">
                <i class="icon-envelope"></i>
                <br />
                <b>Ir a Mensajes de Contacto</b><br />
                Administrar los Mensajes<br /> de tu web
                <br /><br />
            </div>
        </div>

       
        
    </div>