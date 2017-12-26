<?php
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=TREND - San Isidro.xls");

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
                <h1>TREND - Registros</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="12" style="width:100%;">
            </td>
        </tr>
    </table>

<?php
    $data   = Datos("trend","1 order by id DESC","*");
    
    if(Filas("trend","1 order by id DESC") > 0)
    {
    
?>
        <table id="tabla" style="width:100%;" border="1"> 
            <thead>
                <tr class="cabece">
	                <th colspan="2">Codigo</th>
                    <th colspan="2">Nombre</th>
                    <th colspan="2">RUT</th>
                    <th colspan="2">E-mail</th>
                    <th colspan="2">Recomendado</th>
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
                  <td colspan="2" align="center"><?=d($row['codigo']);?></td>
                  <td colspan="2" align="left"><?=d($row['nombre']);?></td>
                  <td colspan="2" align="left"><?=d($row['rut']);?></td>
                  <td colspan="2" align="left"><?=d($row['email']);?></td>
                  <td colspan="2" align="left"><?=d($row['recomendado']);?></td>
                  <td colspan="2" align="center"><?=date("d-m-Y H:i");?></td>                	                    
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