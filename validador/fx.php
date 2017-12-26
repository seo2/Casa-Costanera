<?php 
	// Fechas con formato dd/mm/aaaa
    function format_fecha($fecha)
    {

        $dia        = substr($fecha, 0,2);
        $mes        = substr($fecha, 3,2);
        $ano        = substr($fecha, 6,4);

        $mo['01']   = "Enero";
        $mo['02']   = "Febrero";
        $mo['03']   = "Marzo";
        $mo['04']   = "Abril";
        $mo['05']   = "Mayo";
        $mo['06']   = "Junio";
        $mo['07']   = "Julio";
        $mo['08']   = "Agosto";
        $mo['09']   = "Septiembre";
        $mo['10']   = "Octube";
        $mo['11']   = "Noviembre";
        $mo['12']   = "Diciembre";

        return $dia." de ".$mo[$mes]." del ".$ano;
    }

    // Funciones de preparación de e-mails

    function abre_email()
    {
        $html   = ' <html>
                        <head>
                            <style type="text/css">
                                .Estilo5 { font-family: Helvetica, sans-serif; }
                                .Estilo6 { font-family: Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
                                #tabla { border:1px solid #CCC; padding:15px; }
                                .blanco { color:#FFF; font-family: Helvetica; line-height:30px; }
								.negro { color:#000; font-family: Helvetica; line-height:30px; }

                                .h2 { margin-bottom:3px; margin-top:5px; font-size:20px; }
                                .h3 { font-size:18px; font-weight:bold; font-family: Helvetica; }

                                .texto { color: #666; font-family: Helvetica; font-size:12px; }
                                .normal { font-weight:normal; }
                                .negrita { font-weight:bold; }

                                .celda { border:1px solid #FFF; padding:4px; width:50%; }
                                .celda_simple { border:1px solid #FFF; padding:4px; }

                                .gris_claro { background-color: #ddd;}
                                .gris_oscuro { background-color: #d1d1d1;}

                                .imagen { width:10%; text-align:center; }

                                .centrado { font-family:Helvetica; text-align:center; font-size:10px; color: #666; }
                            </style>
                        </head>
                        <body>
						
						';

        return $html;
    }

    function abre_tabla()
    {
		
        $html   = '<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" id="tabla">
		
		';

        return $html;
    }

	function abre_logo()
    {
        $html   = '
			<tr>
			<td colspan="7" width="600" height="80">
			<img src="http://www.nuevacostanera.cl/img/legal1.jpg" width="600" height="80" border="0"  style="display:block; padding:0; margin:0; border:0;">
			</td>
			</tr>
		
		';

        return $html;
    }
 
	function bajada_cotiza()
    {
        $html   = '
			<tr>
			<td colspan="7" width="600" height="80">
			<img src="http://prodelca.cl/php/cabecera.png" width="600" height="80" border="0"  style="display:block; padding:0; margin:0; border:0;">
			</td>
			</tr>
		
		';

        return $html;
    }

	function bajada_normal()
    {
        $html   = '
			<tr>
			<td colspan="7" width="600" height="80">
			<img src="http://www.nuevacostanera.cl/img/legal.jpg" width="600" height="80" border="0"  style="display:block; padding:0; margin:0; border:0;">
			</td>
			</tr>
		
		';

        return $html;
    }

    function cierra_tabla()
    {
        $html   = ' 
		<tr>
			<td colspan="7" width="600" height="80">
			<img src="http://www.nuevacostanera.cl/img/legal.jpg" width="600" height="80" border="0"  style="display:block; padding:0; margin:0; border:0;">
			</td>
			</tr>
		</table>
                        </body>
                        </html>';

        return $html;
    }

    function espaciador()
    {
        $html   = ' <tr bgcolor="#FFF">
                        <td colspan="8">&nbsp;</td>
                    </tr>';

        return $html;
    }

    function titulo($txt)
    {
        $html   = ' <tr>
                        <td colspan="8" class="negro"><h2 class="h2">'.$txt.'</h2></td>
                    </tr>';

        return $html;
    }

    function subtitulo($txt)
    {
        $html   = ' <tr>
                        <td colspan="8"><h3 class="h3">'.$txt.'</h2></td>
                    </tr>';

        return $html;
    }

    function texto($texto,$estilo)
    {
        $html   = ' <tr class="texto">
                        <td colspan="8"><span class="texto '.$estilo.'">'.$texto.'</span></td>
                    </tr>';

        return $html;
    }

    function centrado($texto)
    {
        $html   = ' <tr>
                        <td colspan="8" align="center"><span class="centrado">'.$texto.'</span></td>
                    </tr>';

        return $html;
    }

    function tabla_2col($r1,$r2,$color)
    {
        $html   = ' <tr class="texto">
                        <td colspan="4" class="celda" bgcolor="#'.$color.'">
                            <span class="texto">'.$r1.'</span>
                        </td>
                        <td colspan="4" class="celda" bgcolor="#'.$color.'">
                            <span class="texto">'.$r2.'</span>
                        </td>
                    </tr>';

        return $html;
    }

    function tabla_4col($r1,$r2,$r3,$r4,$color)
    {
        $html   = ' <tr class="texto">
                        <td width="1" class="celda_simple imagen" bgcolor="#'.$color.'">
                            '.$r1.'
                        </td>
                        <td colspan="5" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r2.'</span>
                        </td>                        
                        <td class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r3.'</span>
                        </td>                        
                        <td class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r4.'</span>
                        </td>
                    </tr>';

        return $html;
    }

    function tabla_3col($r1,$r2,$r3,$color)
    {
        $html   = ' <tr class="texto">
                        <td colspan="6" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r1.'</span>
                        </td>                        
                        <td colspan="1" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r2.'</span>
                        </td>                        
                        <td colspan="1" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r3.'</span>
                        </td>
                    </tr>';

        return $html;
    }
    
    // funciones de envio de e-mail
    function envio_contacto($data)
    {
	    if (isset($data['nombre']))
		{
			$data['nombre']			= trim($data['nombre']);
			$data['fono']			= trim($data['fono']);
			$data['fono']			= trim($data['fono']);
			$data['email']			= trim($data['email']);
			$data['consulta']	    = trim($data['consulta']);
		
			Insertar("mensaje",
				 	"nombre,email,rut,fono,mensaje,fecha",
				 	"'$data[nombre]','$data[email]','$data[rut]','$data[fono]','$data[consulta]','".date("Y-m-d H:i")."'");
		
		
			$content_mail	 = abre_email();
		
			$content_mail	.= abre_tabla();
			
			$content_mail	.= abre_logo();
		
			$content_mail	.= titulo("Mensaje de contacto.");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Estimado (a) Administrador","negrita");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Se han comunicado desde el formulario de contacto el d&iacute;a <b>".format_fecha(date("d/m/Y"))."</b> en <b>nuevacostanera.cl</b>","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("La solicitud ha quedado registrada bajo los siguientes datos:","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= tabla_2col("<b>Nombre</b>",$data['nombre'],"ededed");
			$content_mail	.= tabla_2col("<b>Tel&eacute;fono</b>",$data['fono'],"ededed");
			$content_mail	.= tabla_2col("<b>E-mail</b>",$data['email'],"ededed");
			$content_mail	.= tabla_2col("<b>Mensaje</b>",$data['consulta'],"ededed");
		
			$content_mail	.= espaciador();
		
		    $content_mail	.= texto("Atentamente,","normal");
		    $content_mail	.= texto("Servicio Autom&aacute;tico Web","normal");
		    $content_mail	.= texto("<b> www.nuevacostanera.cl </b>","negrita");
		
		    $content_mail	.= espaciador();
		    $content_mail	.= espaciador();
		
		    $content_mail	.= centrado("Este es un e-mail autogenerado por el Sistema, por favor no responder este mensaje.");
		
		    $content_mail	.= cierra_tabla();
		    
		    mail ("herbert.zapata19@gmail.com, herbert@radical.cl", "Mensaje de Contacto", $content_mail, 
		      		"From: no-responder@nuevacostanera.cl\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");
		    			      		
		}    
    }



    
    
?>