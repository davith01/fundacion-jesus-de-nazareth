<?php

if(isset($_POST['name']) && isset($_POST['email'])) {
    ini_set( 'display	_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = 'fundnazareth0146@gmail.com';
    $subject = 'Mensaje para @FundacionJesusdeNazareth.org';
	if(isset($_POST['name']))
	$name = $_POST['name'];
	else $name = '';
	if(isset($_POST['last-name']))
	$name .= ' ' .$_POST['last-name'];
	if(isset($_POST['phone']))
	$phone = $_POST['phone'];
	else $phone = '';
	if(isset($_POST['email']))
	$email = $_POST['email'];
	else $email = '';
	if(isset($_POST['comments']))
	$comments = $_POST['comments'];
	else $comments = '';
	
	$image = 'http://fundacionjesusdenazareth.org/images/logo_fundacion.ico';
	
	$message = '
	<html>
<body>
<div>Buen d&iacute;a,</div>
<br/>
<div>Se ha detectado un nuevo comentario registrado desde el dominio <a href="http://fundacionjesusdenazareth.org">http://fundacionjesusdenazareth.org</a>.</div>
<br/>
<table>
<td>
   <img src="'.$image.'" />
</td>
<td>
<table style="width: 432px; font-family: arial, sans-serif; border-collapse: collapse;">
<tbody>
<tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
<th style="height: 30px; width: 141px; background-color: #f6f6f6; padding-left: 30px;"><strong>Nombre</strong></th>
<td style="height: 30px; width: 423px; padding-left: 30px;">'.$name.'</td>
</tr>
<tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
<th style="height: 37px; width: 141px; background-color: #f6f6f6; padding-left: 30px;"><strong>Comentario&nbsp;&nbsp;</strong></th>
<td style="height: 37px; width: 423px; padding-left: 30px;">'.$comments.'</td>
</tr>
<tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
<th style="height: 33px; width: 141px; background-color: #f6f6f6; padding-left: 30px;"><strong>Tel&eacute;fono</strong></th>
<td style="height: 33px; width: 423px; padding-left: 30px;">'.$phone.'</td>
</tr>
<tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
<th style="height: 32px; width: 141px; background-color: #f6f6f6; padding-left: 30px;"><strong>E-mail</strong></th>
<td style="height: 32px; width: 423px; padding-left: 30px;">'.$email.'</td>
</tr>
</tbody>
</table>
</td>
</table>
</body>
</html>';
	
	
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset: utf8\r\n";
	$headers .= 'From:' . $from . '\r\n';
    mail($to,$subject,$message, $headers);
    echo 'The email message was sent.';
}
?>
