<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Contacto_nuevaCostanera.xls");

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

    <table id="tabla" style="width:100%;"> 
        <tr>
            <td align="center" colspan="12" style="width:100%;">
                <h1>Prodelca - Mensajes de Contacto Nueva Costanera</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="12" style="width:100%;">
            </td>
        </tr>
    </table>

<?php
    $data   = Datos("mensaje","1 order by id DESC","*");
    
    if(Filas("mensaje","1 order by id DESC") > 0)
    {
    
?>
        <table id="tabla" style="width:100%;" border="1"> 
            <thead>
                <tr class="cabece">
                 <th>Nombre</th>
                 <th>Rut</th>
                 <th>Correo</th>
                 <th>Telefono</th>
                 <th>Fecha</th>
                 <th>mensaje</th>
                </tr>
            </thead>
            
            <tbody>
            
            <?php
                while($row = mysql_fetch_assoc($data))
                {       
                
                	$fecha 	= explode("-",$row['fecha']);         
            ?>
                <tr>
                 <td colspan="2" align="left"><?=d($row['rut']);?></td>
                  <td colspan="2" align="center"><?=d($row['nombre']);?></td>
                  <td colspan="2" align="center"><?=d($row['email']);?></td>
                  <td colspan="2" align="center"><?=d($row['fono']);?></td>
                  <td colspan="2" align="left"><?=d($row['mensaje']);?></td>
                  <td colspan="2" align="center"><?=$fecha[2]."/".$fecha[1]."/".$fecha[0];?></td>                	                    
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