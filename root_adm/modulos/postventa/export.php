<?
/*header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=PostVenta - San Isidro.xls");*/

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
                <h1>SAN ISIDRO - Solicitudes de PostVenta</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="12" style="width:100%;">
            </td>
        </tr>
    </table>

<?php
    $data   = Datos("postventa","1 order by id DESC","*");
    
    if(Filas("postventa","1 order by id DESC") > 0)
    {
    
?>
        <table id="tabla" style="width:100%;" border="1"> 
            <thead>
                <tr class="cabece">
                      <th colspan="2">Nombre</th>
                      <th colspan="2">RUT</th>
                      <th colspan="2">E-mail</th>
                      <th colspan="2">Fono</th>
                      <th colspan="2">Proyecto / Casa</th>
                      <th colspan="2">Detalle</th>
                      <th colspan="2">Fecha</th>
                </tr>
            </thead>
            
            <tbody>
            
            <?php
                while($o = mysql_fetch_assoc($data))
                {       
                
                	$fecha 	= explode("-",$row['fecha']);         
            ?>
                <tr class="odd gradeX" id="row_<?=$o['id'];?>">

                  <td colspan="2"><?=d($o['nombre']);?></td>
                  <td colspan="2"><?=d($o['rut']);?></td>
                  <td colspan="2"><?=d($o['email']);?></td>
                  <td colspan="2"><?=d($o['fono']);?></td>
                  <td colspan="2"><?=d($o['proyecto'])."<br>Casa:".$o['casa'];?></td>
                  <td colspan="2">
                  <?php 
                      $pro	= explode(";",$o['problemas']);
                      
                      for($p = 0; $p <= count($pro); $p++)
                      {
                      	if($pro[$p] != '')
                      	{
                          	echo "- ".$pro[$p]."<br>";
                      	}
                      }
                  ?>
                  </td>
                  <td colspan="2" style="text-align:center;">
                    <?=date("Y-m-d",strtotime($o['fecha']));?>
                  </td>
              
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