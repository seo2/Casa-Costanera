<?php
// Check for empty fields
if(empty($_POST['name'])      ||
  empty($_POST['telefono'])   ||
   empty($_POST['correo'])    ||
   empty($_POST['consulta'])  ||
   !filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL))
   {
  echo "Datos mal ingresados!";
  return false;
   }
  
$name = $_POST['name'];
$tel = $_POST['telefono'];
$correo = $_POST['correo'];
$message = $_POST['consulta'];
  
// Create the email and send the message
$to = 'fsaavedra@nuevacostanera.cl, rdominguez@nuevacostanera.cl, herbert@radical.cl';
$email_subject = "Consulta desde formulario de contacto inco:  $name";
$email_body = "
<table border='0' cellspacing='3' cellpadding='2'>
      <tr>
      <td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
      <td width='80%' align='left'>$name</td>
      </tr>
      <tr>
      <td align='left' bgcolor='#f0efef'><strong>Telefono:</strong></td>
      <td align='left'>$tel</td>
      </tr>
       <tr>
      <td width='30%' align='left' bgcolor='#f0efef'><strong>Correo:</strong></td>
      <td width='70%' align='left'>$correo</td>
      </tr>
      <tr>
      <td width='30%' align='left' bgcolor='#f0efef'><strong>Consulta:</strong></td>
      <td width='70%' align='left'>$message</td>
      </tr>
  </table>
";
$headers = "From: no-responder@inco.cl\n";
$headers .= "Reply-To: $correo";
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
$headers .= "Content-Type: text/plain; charset=UTF-8";
if( mail($to,$email_subject,$email_body,$headers)){
    // Email has sent successfully, echo a success page. 
   header("Location:./respuesta.php");
    }else{ echo"Lo sentimos pero no podemos enviar su consulta";};

?>