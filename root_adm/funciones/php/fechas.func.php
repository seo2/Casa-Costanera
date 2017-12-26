<?php 
	/* FUNCIONES DE FECHA */

    // Fechas con formato AAAA/MM/DD
    function format_fecha($fecha)
    {
    	$new_fecha 	= substr($fecha, 8, 2)."-".substr($fecha,5,2)."-".substr($fecha,0,4);
    	return $new_fecha;
    }

    // Fechas con formato DD/MM/AAAA
    function format_fecha_rev($fecha)
    {
    	$new_fecha 	= substr($fecha, -4)."-".substr($fecha,3,2)."-".substr($fecha,0,2);
    	return $new_fecha;
    }

    // Fechas con formato dd/mm/aaaa
    function format_fecha_web($fecha,$idioma)
    {

        if(strlen($fecha) == 9)
        {
            $fecha      = "0".$fecha;
        }

        if($idioma == "spa")
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

            return $dia." de ".$mo[$mes]." de ".$ano;

        }else{

            $dia        = substr($fecha, 0,2);
            $mes        = substr($fecha, 3,2);
            $ano        = substr($fecha, 6,4);

            $mo['01']   = "January";
            $mo['02']   = "February";
            $mo['03']   = "March";
            $mo['04']   = "April";
            $mo['05']   = "May";
            $mo['06']   = "June";
            $mo['07']   = "July";
            $mo['08']   = "August";
            $mo['09']   = "September";
            $mo['10']   = "October";
            $mo['11']   = "November";
            $mo['12']   = "December";

            return $mo[$mes]." ".$dia.", ".$ano;

        }
    }

    /* Campo de Hora */

	function horario($name,$hr_fr,$min_fr,$hr_to,$min_to,$valor)
	{

		if($valor != "")
		{
			$hora		= substr($valor,0,2);
			$minutos	= substr($valor,3,2);
		}else{
			$hora 		= "";
			$minutos	= "";
		}

		$html 	= '<select name="'.$name.'_hr" id="'.$name.'_hr" style="width:8%">';

					for($hr = $hr_fr; $hr <= $hr_to; $hr++)
					{
						$hr 	= (strlen($hr) == 1)? "0".$hr : $hr;

						$html .= '<option value="'.$hr.'"';
						$html .= ($hora == $hr)? ' selected':'';
						$html .= '>'.$hr.'</option>';
					}

        $html  .= '</select><span style="line-height:28px;">&nbsp;:&nbsp;</span>';

        $html  .= '<select name="'.$name.'_min" id="'.$name.'_min" style="width:8%">';

					for($mi = $min_fr; $mi <= $min_to; $mi++)
					{						
						$mi 	= (strlen($mi) == 1)? "0".$mi : $mi;

						$html .= '<option value="'.$mi.'"';
						$html .= ($minutos == $mi)? ' selected':'';
						$html .= '>'.$mi.'</option>';
					}
					
        $html  .= '</select>';

        return $html;

	}
?>