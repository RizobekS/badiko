<?php
header("content-type; text/html; charset=utf-8");

$me = "rizobeksaibov@gmail.com";
$tema = "badiko.php"; 
$message = "Ваше имя: ".$_POST['name']."<br>";
  $message .= "E-mail: ".$_POST['email']."<br>";
$message .= "Номер телефона: ".$_POST['phone']."<br>";
$message .= "Сообщение: ".$_POST['message']."<br>"; 
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($me, $tema, $message, $headers); 
?>