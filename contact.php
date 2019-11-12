<?php

$nama= $_POST['nama'];
$email= $_POST['email'];
$pesan= $_POST['pesan'];
$body= "
Nama : $nama <br/>
From: $email <br/>
pesan: $pesan <br/>
";

function Send_Mail($to,$subject,$body)
{
require 'PHPmailer/class.phpmailer.php';

 

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsMail(true); // SMTP
$mail->SMTPAuth = true; // SMTP authentication
$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SetFrom("alphazulu304@gmail.com","email sender");
$mail->Username = "alphazulu304@gmail.com"; // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "aditrachman232003"; // Password email
$mail->SetFrom($usermail, 'user');
$mail->AddReplyTo($usermail,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
return false;
else
return true;

}

$to = "aditrachman23@gmail.com"; //email tujuan
$subject = "New email"; // subject email
echo"<br/><br/><center><h3>email telah terkirim</h3></center>";
Send_Mail($to,$subject,$body);
?>
