<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'none'; 
$mail->Host = "mail.agency.co.id"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "admin@agency.co.id"; //user email
$mail->Password = "Wahana1234"; //password email 
$mail->SetFrom("admin@agency.co.id","admin@agency.co.id"); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("henhencris31@gmail.com","henhencris31@gmail.com");  //tujuan email
$mail->MsgHTML("testing123");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>