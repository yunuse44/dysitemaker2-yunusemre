<?php

include("dysitemaker/list.php");

include("class.phpmailer.php");

$tab=$_GET["t"];
 $yeni->conarray=array($host,$user,$password,$database);
$yeni->u_ekle($tab);
header('Content-Type: text/html; charset=utf-8');

$phpmailer = new PHPMailer;
$phpmailer->isSMTP();
$phpmailer->Host = 'boreas.alastyr.com'; // duzenlenecek
$phpmailer->SMTPAuth = true;
$phpmailer->Username = 'mesaj@yemreyesilyurt.com'; // duzenlenecek
$phpmailer->Password = '@p3}XK62QaUp'; // duzenlenecek
$phpmailer->SMTPSecure = 'tls'; // duzenlenecek
$phpmailer->Port = '587'; // duzenlenecek
$phpmailer->From = 'pqyunus@gmail.com'; // duzenlenecek
$phpmailer->FromName = 'kayit ekleme'; // duzenlenecek

$phpmailer->addAddress('pqyunus@gmail.com', 'yeni  kayıt'); // duzenlenecek
$phpmailer->isHTML(true);
$phpmailer->Subject =  "yeni kayit tablosu:".$tab;
$phpmailer->Body    = "yeni kayıt  şu  ".$tab."eklendi";
$phpmailer->CharSet = 'UTF-8';

if(!$phpmailer->send()) {
   echo 'Mail gonderilemedi. Hata: ' . $phpmailer->ErrorInfo;
   exit;
}

echo 'Mail gonderildi.';
//echo error_reporting();
?>
