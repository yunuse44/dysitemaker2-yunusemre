<?php
  ob_start();
include_once 'dysitemaker/list.php';

//echo  "host nadı:".$host."</br>"."user :".$user."</br> şifre :".$password."</br>";


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

if (empty($i)){ header("Location: index.php?sayfa=yunus emre yeşilyurt"); }


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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-62573312-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-62573312-1');
</script>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1415487135979853",
    enable_page_level_ads: true
  });
</script>



   </head>
<body>
  <div class="ps">  </div>
  <div class="pano" id="pano"> <b>YUNUS EMRE  YEŞİLYURT</b></br>
Web  sayfasına   hoş  geldiniz.</br>
Bu  sayfa   kişisel  bilgilerin  yanı  sıra  yaptım  örnekler
ve   programlama  ait  bilgiler  olacak  .  </br>
Mümkün  olduğu   sürece  güncel  tutmaya  çalışacağım  . </br>
 iyi  günler
    </div>

    <?php  if(empty($yeni->seo[5])){        return; } else {
    //echo  $yeni->seo[5];
echo  $yeni->seo[6];
  }?>



</body>


</html>
