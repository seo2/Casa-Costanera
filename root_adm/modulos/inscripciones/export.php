<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Global-Center.xls");

require_once("../../adm_R.php");

?>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Exportar resultados</title>

<style type="text/css">

<!–

.style1 {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-weight: bold;
}

.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}

–>

</style>

</head>

<body>

    <table id="tabla" style="width:150%;"> 
        <tr>
            <td align="center" colspan="26" style="width:150%;">
                <h1>Global Center - Mensajes de Contacto</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="26" style="width:150%;">
            </td>
        </tr>
    </table>

<?php
    $data   = Datos("mensaje","1 order by id DESC","*");
    
    if(Filas("mensaje","1 order by id DESC") > 0)
    {
    
?>
        <table id="tabla" style="width:150%;" border="1"> 
            <thead>
                <tr class="cabece">
                	  <th colspan="2">Remitente</th>
                      <th colspan="2">RUT</th>
                      <th colspan="2">Telefono</th>
                      <th colspan="2">E-mail</th>
                      <th colspan="2">Fecha</th>
                </tr>
            </thead>
            
            <tbody>
            
            <?php
                while($row = mysql_fetch_assoc($data))
                {       
                
                	$fecha 	= explode("-",$row['fecha']);         
            ?>
                <tr>
                  <td colspan="2"><?=d($row['nombre']);?></td>
                  <td colspan="2"><?=d($row['rut']);?></td>
                  <td colspan="2"><?=d($row['telefono']);?></td>
                  <td colspan="2"><?=d($row['mensaje']);?></td>
                  <td colspan="2"><?=$fecha[2]."/".$fecha[1]."/".$fecha[0];?></td>                	                    
                </tr>
            <? 
                }
            ?> 
            </tbody>
        </table>

<?php       
    }
?>
    
</body>
</html>