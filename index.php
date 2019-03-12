<?php
  ob_start();
  //  localhost  a   başlatmak  için  klasör  yoluna  ../../  eklemen  gerekecek
include_once 'dysitemaker/con.php';
include_once 'dysitemaker/list.php';

//echo  "host nadı:".$host."</br>"."user :".$user."</br> şifre :".$password."</br>database:".$database;


?>

<!DOCTYPE html>
<html >
    <head>
<meta name="google-site-verification" content="Oy6sy5XgGdOHM_xbQ2w8fl4iy1FMOqhVdHiibZqQiFw" />
<meta name="robots" content="index, follow"/>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <meta name="language" content="Turkish"/>
 <meta name="revisit-after" content="1 days"/>
<meta name="author" content="@yunuse44"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="ana.js" type="text/javascript"></script>


    <div class="bildirim" id="bd" ><h1>yunus emre  yeşilyurt</h1></div>
<?php
  //  error_reporting(E_ALL);
//ini_set("display_errors", 1);
   $yeni->conarray=array($host,$user,$password,$database);
$i=$_GET["sayfa"];

if (empty($i)){ header("Location:yunus emre yeşilyurt"); }


         $yeni->tarray[1]="select *  from  `menü` where  `menü` .`gs`=1 ";
         $yeni->men($yeni->tarray[1]);
         for ($a=0;$a<$yeni->sy;$a++){
    $yeni->tarray[0]="SELECT * FROM linkler,menü WHERE `menü`.`id`=`linkler`.`m_id`  and `menü`.`id` =".$yeni->marray[$a]." ORDER BY  `linkler`.`adi` ASC  ";

     $yeni->tarray[2]=$yeni->mcss[$a];

$yeni->mlist(  $yeni->tarray[0],  $yeni->tarray[2]);
         }

$yeni->sayfa($i,"alt1");
ob_flush();

    ?>



<!-- Global site tag (gtag.js) - Google Analytics -->







   </head>
<body>
  <div class="ps">  </div>
  <div class="pano" id="pano">
  <div>  <span>Duyuru</span></div>

    <b>YUNUS EMRE  YEŞİLYURT</b></br>

Web  sayfasına   hoş  geldiniz.</br>
Bu  sayfa   kişisel  bilgilerin  yanı  sıra  yaptım  örnekler
ve   programlama  ait  bilgiler  olacak  .  </br>
Mümkün  olduğu   sürece  güncel  tutmaya  çalışacağım  . </br>
 iyi  günler
 <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    </div>

    <?php  if(empty($yeni->seo[5])){    } else {
    //echo  $yeni->seo[5];
echo  $yeni->seo[6];
  }?>


<script type="text/javascript">
onyukleme();

</script>

</body>


</html>
