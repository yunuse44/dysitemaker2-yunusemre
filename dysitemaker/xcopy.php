<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pad=$_POST['db'];
echo '</br> database'.$pad.'</br>';
 function  dlistele($dt)
 {

 if ($klasor = opendir("../web/".$dt)) {
echo '</br> klasör'.$klasor.'</br>';
     while  (false !== ($girdi = readdir($klasor))) {

 if ($girdi != "." && $girdi != "..") {
 //echo '<li><a href="index.php?düzenle='. $girdi .'" >'.$girdi.'</a><b id="psil">sil</b></li>';
  copy("../web/".$dt."/".$girdi,"../".$girdi ) or die("hata oluştu");
 if (is_dir($girdi)) { //Klasör mü kontrolü

// echo '<li><a href="index.php?düzenle='. $girdi .'" >'.$girdi.'</a></li>';

 //$klasorSayisi++;

 } else {

// echo "Dosya => " . $girdi . "<br />";

 //$dosyaSayisi++;

 } 
 }
 }
 }
 echo 'görev tamamdır';
 }
 dlistele($pad);
?>