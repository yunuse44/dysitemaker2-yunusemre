<?php   ob_start();
include_once '../../list.php';

/* $dt->conarray=array($host,$user,$password,"yemre");
$dt->tarray = array("sayfa","select *  from ");
$dt->listeleme();
*/


?>

<!DOCTYPE html>
<html>

<meta name="robots" content="index, follow">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="language" content="Turkish">
 <meta name="revisit-after" content="1 days">
<meta name="author" content="@yunuse44">
<link href="ana.css" rel="stylesheet" type="text/css"/>
    <script src="ana.js" type="text/javascript"></script>


<body>
    
<?php  
    //error_reporting(E_ALL);
ini_set("display_errors", 1); 
$i=$_GET["sayfa"];
if (empty($i)){ header("Location: index.php?sayfa=anasayfa"); }
 
     $yeni->conarray=array($host,$user,$password,"ynnn");
         $yeni->tarray[1]="select *  from  `menü` where  `menü` .`gs`=1 ";
         $yeni->men($yeni->tarray[1]);
         for ($a=0;$a<$yeni->sy;$a++){
    $yeni->tarray[0]="SELECT `menü`.`id`,`linkler`.`m_id` ,`linkler`.`adi`, `linkler`.`link`, `linkler`.`icerik` FROM linkler,menü WHERE `menü`.`id`=`linkler`.`m_id`  and `menü`.`id` =".$yeni->marray[$a]." ORDER BY  `linkler`.`adi` ASC  ";
    
     $yeni->tarray[2]=$yeni->mcss[$a];
     
$yeni->mlist(  $yeni->tarray[0],  $yeni->tarray[2]);
         }
$yeni->sayfa($i,"alt1");

ob_flush();
    ?>
    <script  type="text/javascript">
    yükle();
    </script>
</body>


</html>