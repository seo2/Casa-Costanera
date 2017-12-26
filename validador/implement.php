<?php
    /* IMPORTAR FUNCIONES COMUNES Y DE ACCESO */
    require_once("../root_adm/adm_R.php");

    function value($codigo)
    {
        $valor  = mysql_fetch_assoc(Datos("contenido","codigo = '".$codigo."'","valor"));

        return $valor['valor'];
    }

    function valida_rut($r)
    {
        $r    = strtoupper(ereg_replace('\.|,|-','',$r));
        $sub_rut= substr($r,0,strlen($r)-1);
        $sub_dv = substr($r,-1);
        $x    = 2;
        $s    = 0;
        for ( $i=strlen($sub_rut)-1;$i>=0;$i-- )
        {
          if ( $x >7 )
          {
            $x=2;
          }
          $s += $sub_rut[$i]*$x;
          $x++;
        }

       $dv=11-($s%11);

        if ( $dv==10 )
        {
          $dv='K';
        }

        if ( $dv==11 )
        {
          $dv='0';
        }

        if ( $dv==$sub_dv )
        {
          return true;
        }else{
          return false;
        }
    }

    

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
                        <body>';

        return $html;
    }

    function abre_tabla()
    {
        $html   = '<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" id="tabla">';

        return $html;
    }

    function cierra_tabla()
    {
        $html   = ' </table>
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
        $html   = ' <tr bgcolor="#698bba">
                        <td colspan="8" align="center" class="blanco"><h2 class="h2">'.$txt.'</h2></td>
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
?>