<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Uptown - Oficinas.xls");

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
                <h1>Solicitudes de Cotizaci&oacute;n realizadas</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="12" style="width:100%;">
            </td>
        </tr>
    </table>

<?php
    $data   = Datos("cotizaciones_2","1 order by id DESC","*");
    
    if(Filas("cotizaciones_2","1 order by id DESC") > 0)
    {
?>
        <table id="tabla" style="width:100%;" border="1"> 
            <thead>
                <tr class="cabece">
                    <th colspan="2"><b>Fecha de Registro</b></th>
                    <th colspan="2"><b>RUT</b></th>  
                    <th colspan="2"><b>Nombre</b></th>
                    <th colspan="2"><b>E-mail</b></th>
                    <th colspan="2"><b>Fono</b></th>
                    <th colspan="2"><b>Vivienda</b></th>
                </tr>
            </thead>
            
            <tbody>
            
            <?php
                while($row = mysql_fetch_assoc($data))
                {

                    $cotizada   = mysql_fetch_assoc(Datos("viviendas_2","id = ".$row['depto'],"*"));
            ?>
                <tr fila="<?php echo $row["id"] ;?>"> 
                    <td colspan="2"><?php echo d($row["fecha_reg"]); ?></td>   
                    <td colspan="2"><?php echo d($row["rut"]); ?></td>              
                    <td colspan="2"><?php echo d($row["nombre"]." ".$row["apellido"]); ?></td>          
                    <td colspan="2"><?php echo d($row["email"]); ?></td>               
                    <td colspan="2"><?php echo d($row["telefono"]); ?></td>                 
                    <td colspan="2"><?php echo d($cotizada["nombre"]); ?></td>                   
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