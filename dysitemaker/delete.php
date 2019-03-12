<?php
include_once 'con.php';
 include 'işlemler.php';
//  ini_set("display_errors", 1); 
$id=$_POST['id'];
 $dt->conarray=array($host,$user,$password);
   $bl = explode("+",$id);
 //  echo $bl[0]."</br>";
   $bl= explode(" ", $bl[0]);
   print_r($bl);
   
$dt->sil($bl[0],$bl[1],$bl[2]);
?>