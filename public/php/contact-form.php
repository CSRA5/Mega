<?php
/*
Name: 			Contact Form
Written by: 	Okler Themes - (http://www.okler.net)
Version: 		4.1.1
*/

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// Step 1 - Enter your email address below.
$to = 'informes@megacorredores.pe';

// Step 2 - Enable if the server requires SMTP authentication. (true/false)
$enablePHPMailer = false;

$subject = $_POST['subject'];

include("conexion.php"); 

if(isset($_POST['email'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message= $_POST['message'];
	$insurance= $_POST['insurance'];

	$_GRABAR_SQL = "INSERT INTO leads (idlead,name,email,phone,message,date,insurance) VALUES (null,'$name','$email','$phone','$message',null,'$insurance')"; 

	$result = mysql_query("SELECT count(*)+1 FROM leads");
	$count= mysql_fetch_array($result);

	mysql_query($_GRABAR_SQL);
	
	$subject = "Mensaje de la web ". "00".$count[0]."-". $insurance;

	$fields = array(

		0 => array(
			'text' => 'Asunto',
			'val' => $subject
		),
		

		1 => array(
			'text' => 'Nombre',
			'val' => $_POST['name']
		),
		
		2 => array(
			'text' => 'Telefono',
			'val' => $_POST['phone']
		),

		3 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		),
		4 => array(
			'text' => 'Mensaje',
			'val' => $_POST['message']
		),
		

		5 => array(
			'text' => 'Tipo de seguro',
			'val' => $_POST['insurance']
		)

	);

	$message = "";

	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}

	// Simple Mail
	if(!$enablePHPMailer) {

		$headers = '';
		$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
		$headers .= "Reply-To: " .  $email . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		if (mail($to, $subject, $message, $headers)){
			$arrResult = array ('response'=>'success');
		} else{
			$arrResult = array ('response'=>'error');
		}

	// PHP Mailer Library - Docs: https://github.com/PHPMailer/PHPMailer
	} else {

		include("php-mailer/PHPMailerAutoload.php");

		$mail = new PHPMailer;

		$mail->IsSMTP();                                      // Set mailer to use SMTP
		$mail->SMTPDebug = 0;                                 // Debug Mode

		// Step 3 - If you don't receive the email, try to configure the parameters below:

		//$mail->Host = 'mail.yourserver.com';				  // Specify main and backup server
		//$mail->SMTPAuth = true;                             // Enable SMTP authentication
		//$mail->Username = 'username';             		  // SMTP username
		//$mail->Password = 'secret';                         // SMTP password
		//$mail->SMTPSecure = 'tls';                          // Enable encryption, 'ssl' also accepted

		$mail->From = $email;
		$mail->FromName = $_POST['name'];
		$mail->AddAddress($to);								  // Add a recipient
		$mail->AddReplyTo($email, $name);

		$mail->IsHTML(true);                                  // Set email format to HTML

		$mail->CharSet = 'UTF-8';

		$mail->Subject = $subject;
		$mail->Body    = $message;

		if(!$mail->Send()) {
		   $arrResult = array ('response'=>'error');
		}

		$arrResult = array ('response'=>'success');

	}

	echo json_encode($arrResult);

} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>
