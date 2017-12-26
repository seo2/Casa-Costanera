<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Contacto - Edificio Italia.xls");

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
            <td align="center" colspan="10" style="width:100%;">
                <h1>EDIFICIO ITALIA - Mensajes de Contacto</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="10" style="width:100%;">
            </td>
        </tr>
    </table>

<?php
    $data   = Datos("contacto","proyecto = 'italia' order by id DESC","*");
    
    if(Filas("contacto","proyecto = 'italia' order by id DESC") > 0)
    {
    
?>
        <table id="tabla" style="width:100%;" border="1"> 
            <thead>
                <tr class="cabece">
                    <th colspan="2">Nombre</th>
                    <th colspan="2">E-mail</th>
                    <th colspan="2">Telefono</th>
                    <th colspan="2">RUT</th>
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
                  <td colspan="2" align="center"><?=d($row['nombre']);?></td>
                  <td colspan="2" align="center"><?=d($row['email']);?></td>
                  <td colspan="2" align="center"><?=d($row['telefono']);?></td>
                  <td colspan="2" align="left"><?=d($row['rut']);?></td>
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