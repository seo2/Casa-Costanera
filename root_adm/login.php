<?php 
    require_once("functions.php");
    
    define("BASEURL","http://www.nuevacostanera.cl/root_adm/");
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title><?=web_title();?></title><meta charset="UTF-8" />
        
        <?=call_css("login");?>

    </head>
    
    <style>
    	.btn-success {
	    	width: 200px !important;
	    	display: block  !important;
	    	margin: 0 auto  !important;
	    	border-radius: 0 !important;
	    	background: #485DA1;
    	}
    	.logo {
	    	width: 290px;
	    	margin: 60px 0;
    	}
    	#loginbox .main_input_box .add-on {
	    	width: 20px;
    	}
    </style>
    
    <body style="background: #c7c7c7;">
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="index.php" autocomplete="off">
				<div class="control-group normal_text">
                    <div style="float:left; text-align:center; width:100%; line-height:30px; font-size:28px; color:#FFF; letter-spacing:4px;">
                       <img src="http://www.nuevacostanera.cl/img/logo2.svg" class="logo" alt="">
                    </div>
                </div>

                <p class="normal_text" id="err_mss" style="display:none;">
                    Completa ambos campos para ingresar
                </p>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">

                            <span class="add-on bg_lg">
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="user" id="user" placeholder="Usuario" />

                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">

                            <span class="add-on bg_ly">
                                <i class="icon-lock"></i>
                            </span>
                            <input type="password" name="pass" id="pass" placeholder="Contraseña" />

                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <!--<span class="pull-left">
                        <a href="#" class="flip-link btn btn-info" id="to-recover">Recuperar Contraseña</a>
                    </span>-->
                    <span class="pull-right">
                        <a type="submit" href="#" onclick="trytolog();" class="btn btn-success" /> Ingreso</a>
                    </span>

                </div>
            </form>

            <form id="recoverform" action="#" class="form-vertical">

                <p class="normal_text" id="err_rec" >
                    Ingrese su e-mail para enviar las instrucciones de recuperación de contraseña
                </p>
                
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo">
                                <i class="icon-envelope"></i></span>
                                <input type="text" name="email" id="email" placeholder="Dirección de e-mail o Usuario" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left">
                        <a href="#" class="flip-link btn btn-success" id="to-login">
                            &laquo; Ingresar
                        </a></span>
                    <span class="pull-right">
                        <a class="btn btn-info" onclick="trytorecover();">Recuperar</a>
                    </span>
                </div>
            </form>
        </div>

        <?php
            require_once("js.php");
            require_once("modulos/login/js.php");
        ?>
    </body>

</html>
