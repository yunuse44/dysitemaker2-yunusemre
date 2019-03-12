<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of işlemler
 *
 * @author y44
 */
//phpinfo();
//error_reporting(E_ALL);
//ini_set("display_errors", 1);


/*
$host="localhost";
$user="yemreyes_umut";
$password="umut5806wwww";
//$database="maker";


 */
ob_start();
class islemler {

     public  $tarray = Array ();
     public $conarray = Array();
     public $icon;
     public $gst;

             function  listeleme ()
    {
                 $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$this->conarray[3]) or die(mysqli_error());



         $yarray = Array ();
     $sy =count($this->tarray);
    // echo " </br>".$sy;
       for($i=0;$i<$sy;$i++){
        $yarray[$i] = $this->tarray[$i];
      echo  $yarray[$i]." </br> satır" .$i;

       }

$sorgu= mysqli_query($this->icon, $yarray[1].$yarray[0]) or die(mysqli_error());

$i=0;
$bs=mysqli_fetch_fields($sorgu);
 foreach ($bs as $val)
    {
    printf("Name: %s\n",$val->name);
    //printf("Table: %s\n",$val->table);$i=0;
$bs=mysqli_fetch_fields($sorgu);
 foreach ($bs as $val)
    {
    printf("Name: %s\n",$val->name);
    //printf("Table:
    //printf("max. Len: %d\n",$val->max_length);
    }
$sy=count($bs);
 echo "sütün sayısı :".$sy."</br>";
   echo '<div class="lista">';

  while ( $satır= mysqli_fetch_array($sorgu)) {
      for($i=0;$i<$sy;$i++){
      echo '<div class="lsdiv">'.$satır[$i]."</div>";
      }
  }

  echo '</div>';
    }
    }
         function  tliste ()
    {
                 $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$this->conarray[3]) or die(mysqli_error());

 mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );


$sorgu= mysqli_query($this->icon, $this->conarray[4]) or die(mysqli_error());

$i=0;
$bs=mysqli_fetch_fields($sorgu);
 foreach ($bs as $val)
    {
   // printf("Name: %s\n",$val->name);
   // printf("Table: %s\n",$val->table);
    //printf("max. Len: %d\n",$val->max_length);
    }
$sy=count($bs);


  while ( $satır= mysqli_fetch_array($sorgu)) {

      for($i=0;$i<$sy;$i++){
          $yid=$satır[$i]."+w";
         $yl=$yl."+". $satır[$i];
                   $ac=$satır[$i]."1";
    echo '<li id="'.$yid.'" class="ls"   onclick="lac(this.id)" ac="'.$ac.'">'.$satır[$i].'</li> ';

      }
  }
  $this->gst=$yl;
    }


    function volus($pad){
          $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2]) or die(mysqli_error());

        echo $pad.'yeni  başlıyoruz';
            $dolus='CREATE DATABASE  ' .$pad;
        $sql="CREATE TABLE `sayfa` (
 `id` BIGINT(255) AUTO_INCREMENT PRIMARY KEY,
  `m_key` text COLLATE utf8_turkish_ci NOT NULL,
  `m_acik` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `s_bas` text COLLATE utf8_turkish_ci NOT NULL,
  `span` text COLLATE utf8_turkish_ci NOT NULL,
   `html` text COLLATE utf8_turkish_ci NOT NULL,
  `date` date NOT NULL,
  `say` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;" ;

    mysqli_query($this->icon, $dolus) or die(mysqli_error());

     $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$pad) or die(mysqli_error());
       mysqli_query($this->icon, $sql) or die(mysqli_error());

       $sql="CREATE TABLE `linkler` ( `id` BIGINT(255) NOT NULL AUTO_INCREMENT , `m_id` BIGINT(255) COLLATE utf8_turkish_ci NOT NULL, `adi` VARCHAR(255) NOT NULL , `link` VARCHAR(255) NOT NULL , `icerik` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
          mysqli_query($this->icon, $sql) or die(mysqli_error());
        $sql="CREATE TABLE `yorumlar` (
     `id` BIGINT(255) AUTO_INCREMENT PRIMARY KEY,
  `ad` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `say` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
           mysqli_query($this->icon, $sql) or die(mysqli_error());
        $sql="CREATE TABLE `menü` ( `id` BIGINT(255) NOT NULL AUTO_INCREMENT ,  `class` VARCHAR(255) NOT NULL , `say` INT(255) NOT NULL , `adi` VARCHAR(255) NOT NULL  ,`gs` INT NOT NULL DEFAULT '0', PRIMARY KEY (`id`)) ENGINE = InnoDB;";
          mysqli_query($this->icon, $sql) or die(mysqli_error());

          $sql="INSERT INTO `sayfa` (`m_key`, `m_acik`, `title`, `s_bas`, `span`, `html`, `date`, `say`)"
                  . " VALUES ( 'sayfa  keywordler buraya', 'site  açıklaması  buraya', 'sayfa  başlığı',"
                  . " 'içindeki  sayfa  başlığı', 'etiketler  buraya', 'sayfanın   html5   edit  yeri', '2017-10-16', '1');";
           mysqli_query($this->icon, $sql) or die(mysqli_error());
          mkdir("web/".$pad, 0777);
           touch("web/".$pad."/ana.js");
            touch("web/".$pad."/ana.css");
            copy("sayfa.php","web/".$pad."/index.php" );
   chmod("web/".$pad, 0777);
            header("Location: index.php?düzenle=".$pad);
    }

    function dlist(){
                $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2]) or die(mysqli_error());

        $sql="SHOW DATABASES";
         $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
    //if($sorgu){}
         $i=0;

          while ( $satır= mysqli_fetch_array($sorgu)){

              if($satır[0]=="information_schema"||$satır[0]=="maker"  ||$satır[0]=="mysql" ||$satır[0]=="phpmyadmin" || $satır[0]=="performance_schema"){                  continue;}

   echo '<li><a href="index.php?düzenle='.$satır[0].'">'.$satır[0]."</a>";

          }

    }
    function generateRandomString($length){
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $charsLength = strlen($characters) -1;
    $string = "";
    for($i=0; $i<$length; $i++){
        $randNum = mt_rand(0, $charsLength);
        $string .= $characters[$randNum];
    }
    return $string;
}

    function  sduzenle($veri,$sql ,$tablo){
      $rd=rand(0,1);
         echo '<div class="u_element"><a href="index.php?tekle='.$veri.'+'.$tablo.'" style="text-decoration: none;" ><img src="../srs/ekle.svg" width="50"/></a></div>';

    //   echo "veritabanı:".$veri."</br> sorgu :".$sql."</br> tablo :".$tablo;
    mysqli_close($this->icon);

         $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$veri) or die(mysqli_error());
              mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
             $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
             $bs=mysqli_fetch_fields($sorgu) or  die(mysqli_error());
             $sy= count($bs);
           //   echo "say:".$sy."</br>";
                    while ( $satır= mysqli_fetch_row($sorgu)){



  echo '<div class="slink"><li> <a href="index.php?sduzenle='.$veri.'+'.$tablo.'+'.$satır[0].'">'.$satır[3].' </a></li><div>  <span> <a href="#" id="'.$rd.$satır[0].'" veri="'.$veri.'+'.$tablo.'+'.$satır[0].'" onclick="sil(this.id)"><img src="../srs/sil.svg" width="40"/></a></span></div></div>';

 // print_r($satır);
          }

    }
    function sec($v,$t, $p,$id){

        $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$v) or die(mysqli_error());
               mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );

          $sql="select $p from $t ";
     //    echo "</br>veritabanı:". $v."</br> tablo:".$t;
           $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());

          $say= mysqli_num_rows($sorgu);
         //  echo "adet:".$say;
           $y=0;
           while(      $sa= mysqli_fetch_field($sorgu)){
               $diz[$y]=$sa->name;
               $y++;
           }

                     echo '<div id="'.$id.'" class="gz"> bağlamak  istediğiniz  sayfayı  seçin lütfen:</br> <form>';
                        for($i=0;$i<$say;$i++){
            $yen= mysqli_fetch_row($sorgu);
            if ($t=="sayfa"){
    echo '<div  class="gizle"> <input type="radio"  id="say|'.$yen[0].'" name="sayfa"  value="'.$yen[0].'|'.$yen[1].'"  onchange="change(this.id)" ><span  >'.$yen[0].'|'.$yen[1].'</span></div>';
            } elseif ($t=="menü") {
                echo '<div  class="gizle"> <input type="radio"  id="men|'.$yen[0].'" name="sayfa"  value="'.$yen[0].'|'.$yen[1].'"  onchange="change(this.id)" ><span  >'.$yen[0].'|'.$yen[1].'</span></div>';

        }
 // print_r($satır);
          }
              echo '</form></div>';

        /*       $sy= count($satır);

               echo "</br>say:".print_r($satır);

          $s=0;
        for ($s=0;$s<$sy;$s++){

              echo '<div  class="gizle"> <span name="'.$diz[$s].'" id="'.$diz[$s].'">'.$satır[$s].'</span></div>';

    }

         * */

    }
            function html($v,$t,$i){
                echo 'sayfa  urlsi: <a href="'.$_SERVER['HTTP_REFERER'].'">yukarı çık</a>';
       // echo "veritabanı:".$v."</br> tablo :".$t."</br> indeks :".$i;
            $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$v) or die(mysqli_error());
           $sql="select * from $t where id=$i";
         //  echo "</br>sorgu:". $sql;

                mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
                        $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
           $satır=mysqli_fetch_row($sorgu);
           $y=0;
           while(      $sa= mysqli_fetch_field($sorgu)){
               $diz[$y]=$sa->name;
               $y++;
           }
    // echo "</br> indis :".$i;
        //   print_r($satır);
   //   print_r($diz);
           echo '<form action="index.php?guncelle='.$i.'+'.$t.'+'.$v.'" method="post" enctype="application/x-www-form-urlencoded">';
           $sy= count($satır);
           echo '<div id="sözel">';
           for ($s=0;$s<$sy;$s++){
               if ($diz[$s]=="html") {
              $html='<div  id="ihtml"> <textarea name="'.$diz[$s].'" id="html">'.$satır[$s].'</textarea></div>';
               }
               elseif ($diz[$s]=="id" || $diz[$s]=="say") {
                   continue;
           }
           elseif ($diz[$s]=="m_id") {

             echo '<div class="dtext"><span>'.$diz[$s].'</span><input type="text"  name="'.$diz[$s].'"  value="'.$satır[$s].'"  id="'.$diz[$s].'" /><span onclick="gst(this.id)" id="'.$diz[$s].'+"  d="gz1">...</span></div>';
       }
           elseif ($diz[$s]=="icerik") {

             echo '<div class="dtext"><span>'.$diz[$s].'</span><input type="text"  name="'.$diz[$s].'"  value="'.$satır[$s].'"  id="'.$diz[$s].'" /><span onclick="gst(this.id)" id="'.$diz[$s].'+" d="gz" >...</span></div>';
       }

          elseif ($diz[$s]=="date") {
                   echo '<div class="dinput"><span>'.$diz[$s].'</span><input type="date"  name="'.$diz[$s].'"  value="'.$satır[$s].'"  id="'.$diz[$s].'"/></div>';
          }
 else {
    // echo '<div class="dinput"><span>'.$diz[$s].'</span><input type="text"  name="'.$diz[$s].'"  value="'.$satır[$s].'"  id="'.$diz[$s].'"/></div>';
         //  echo '<div class="dinput"><input type="text"  name="'.$diz[$s].'" value="'.$satır[$s].'"/></div>';
        echo '<div class="dinput"><span>'.$diz[$s].'</span><textarea name="'.$diz[$s].'"id="'.$diz[$s].'" cols="50">'.$satır[$s].'</textarea></div>';
       }
               }
               echo '<div class="dtext"><input type="submit" value="güncelle....." style=""/> </div>';
               echo "</div>";
              echo $html;
               echo "</form>";
    }

        function yhtml($v,$t){
                echo 'sayfa  urlsi: <a href="'.$_SERVER['HTTP_REFERER'].'">yukarı çık</a>';
       //  echo "veritabanı:".$v."</br> tablo :".$t."</br> indeks :".$i;
            $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$v) or die(mysqli_error());
               mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
           $sql="select * from $t ";
         //  echo "</br>sorgu:". $sql;
            $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
           $satır=mysqli_fetch_row($sorgu);
           $y=0;
           while(      $sa= mysqli_fetch_field($sorgu)){
               $diz[$y]=$sa->name;
               $y++;
           }
     //echo "</br> indis :".$i;
      //   print_r($satır);
   // print_r($diz);
           echo '<form action="index.php?kaydet='.$t.'+'.$v.'" method="post" enctype="application/x-www-form-urlencoded">';
           $sy= count($satır);
         echo '<div id="sözel"><div>'.$diz[4]."</div>";
           for ($s=0;$s<$sy;$s++){

        switch ($diz[$s]){
        case "id":
            continue;
        case "say":
            continue;
case "m_id":
 echo '<div class="dtext"><span>'.$diz[$s].'</span><input type="text"  name="'.$diz[$s].'"  value="'.$satır[$s].'"  id="'.$diz[$s].'" /><span onclick="gst(this.id)" id="'.$diz[$s].'+"  d="gz1">...</span></div>';
 break;

 case "icerik":
 echo '<div class="dtext"><span>'.$diz[$s].'</span><input type="text"  name="'.$diz[$s].'"  value="'.$satır[$s].'"  id="'.$diz[$s].'" /><span onclick="gst(this.id)" id="'.$diz[$s].'+" d="gz" >...</span></div>';

  break;

        case "html":
              $html='<div id="ihtml"><span>'.$diz[$s].'</span><textarea name="'.$diz[$s].'" id="html"></textarea></div>';
              break;
        case  "date":
                echo '<div class="dinput"><span>'.$diz[$s].'</span><input type="date"  name="'.$diz[$s].'" value=""  id="'.$diz[$s].'"/></div>';
             break;
            default :

              echo '<div class="dinput"><span>'.$diz[$s].'</span><textarea name="'.$diz[$s].'"id="'.$diz[$s].'" cols="50">'.$satır[$s].'</textarea></div>';
      //  echo     '<div id="ihtml"><span>'.$diz[$s].'</span><textarea name="'.$diz[$s].'" id="html"></textarea></div>';
              //    echo '<div class="dinput"><span>'.$diz[$s].'</span><input type="text"  name="'.$diz[$s].'" value=""  id="'.$diz[$s].'"/></div>';

        }
               }
               echo '<div class="dinput"><input type="submit" value="kaydet....."/> </div>';
               echo "</div>";
               echo $html;
               echo "</form>";
    }

    function  guncelle($i,$t,$v){

      //    echo "veritabanı:".$v."</br> tablo :".$t."</br> indeks :".$i;
               $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$v) or die(mysqli_error());
                   mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
           $sql="select * from $t where $i";
         //  echo "</br>sorgu:". $sql;
            $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
           $satır=mysqli_fetch_row($sorgu);
           $y=0;
           while(      $sa= mysqli_fetch_field($sorgu)){
              // if($sa->name="s_id"){  continue;}
               if($sa->name=='html'){
		$siz [$y]=htmlspecialchars($_POST[$sa->name]);
		}
               $diz[$y]=$sa->name;

               $y++;
           }
        //   echo "</br>post elemanları";
        //   print_r( $diz);
           $dsy= count($diz);
           for ($a=1;$a<$dsy;$a++)
           {

           $deg[$a]=mysqli_real_escape_string($this->icon,$_POST[$diz[$a]]);
           $degerler=$degerler."`".$diz[$a]."`  = '".$deg[$a]."',";
           }
          // echo "</br>post elemanları";
        //    print_r( $deg);
      /*     $us= strlen($degerler);
             echo "</br>değerler sayısı :".$us."</br>";
           $us=$us-1;
           echo "</br>değerler sayısı -1:".$us."</br>";
$degerler=substr($degerler, 0, $us);*/
           $degerler= rtrim($degerler,",");
       echo "</br>değerlerin son  halı".$degerler;
           $i=(int)$i;
           //  var_dump($i);
               $sql="update  `".$t."`   set  ".$degerler. " where  `$t`.`".$diz[0]."` =  ".$i;
               echo "</br>sql  sorgusu: </br>".$sql;

                  echo "</b></b>";
          mysqli_query($this->icon,$sql ) or die(mysqli_error($this->icon)) ;
          echo 'kayt güncellendi';
		 echo '   <script type="text/javascript">  '
          . '   window.history.back();   </script>';

    }


     function  ykaydet($t,$v){

       //  echo "veritabanı:".$v."</br> tablo :".$t."</br>";
               $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$v) or die(mysqli_error());
                 mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );

           $sql="select * from $t ";
          echo "</br>sorgu:". $sql;
            $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
           $satır=mysqli_fetch_row($sorgu);
           $y=0;
           while(      $sa= mysqli_fetch_field($sorgu)){
           //    if($sa->name="id"){  continue;}
               if($sa->name=='html'){
		$siz [$y]=htmlspecialchars($_POST[$sa->name]);
		}
            $diz[$y]=$sa->name;

               $y++;
           }
        //   echo "</br>post elemanları";
        //   print_r( $diz);
           $dsy= count($diz);
           for ($a=1;$a<$dsy;$a++)
           {

           $deg[$a]=mysqli_real_escape_string($this->icon,$_POST[$diz[$a]]);
         $degerler= $degerler. "'".$deg[$a]."',";
          $sdeger=$sdeger."`".$diz[$a]."`,";
           }
          // echo "</br>post elemanları";
        //   print_r( $deg);

         $us= strlen($degerler);
            // echo "</br>değerler sayısı :".$us."</br>";
           $us=$us-1;
           echo "</br>değerler sayısı -1:".$us."</br>";
$degerler=substr($degerler, 0, $us);
      $degerler= rtrim($degerler,",");
       $us= strlen($sdeger);
            // echo "</br>değerler sayısı :".$us."</br>";
           $us=$us-1;
           echo "</br>değerler sayısı -1:".$us."</br>";
$sdeger=substr($sdeger, 0, $us);
      $sdeger= rtrim($sdeger,",");

       echo "</br>sütün adları".$sdeger;
         echo "</br>değerlerin son  halı".$degerler;
       $sz="INSERT INTO `sayfa` ( `m_key`, `m_acık`, `title`, `s_bas`, `span`, `html`, `date`, `say`) VALUES ('jhk', 'hk', 'hjk', 'hjk', 'hgk', 'hjk', '2017-11-16', '3')";
       echo "</br> deneme sql:".$sz;

           $i=(int)$i;
             var_dump($i);
               $sql="INSERT INTO  `".$t."`  (  ".$sdeger. ") VALUES (  ".$degerler.")";
               echo "</br>sql  sorgusu: </br>".$sql;
               mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
                  echo "</b></b>";
          mysqli_query($this->icon,$sql ) or die(mysqli_error($this->icon)) ;
          echo 'kayt güncellendi';
		 echo '   <script type="text/javascript">  '
          . '       location.replace("index.php?düzenle='.$v.'");  </script>';

    }
    function  sil($v,$t,$pr){

        echo "veritabnı:".$v."</br> tablo :".$t."</br> idisi".$pr;
               $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$v) or die(mysqli_error());
               mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
           $sql="DELETE FROM  ".$t. "
WHERE id=".$pr."; ";
            $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
            if ($sorgu) {
                echo '</br><b>silindi </b>';
               echo '   <script type="text/javascript"> window.location.reload();  </script>';
            }
    }

     function  uye($kadi,$ksifre,$t,$d){

        // echo "veritabanı:".$d."</br> tablo :".$t."</br> Kullanıcı  adi :".$kadi."</br> Kullanıcı  şifre :".$ksifre;
               $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$d) or die(mysqli_error());
                   mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET utf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
                        $sql="SELECT  * FROM  ".$t." where  u_adi='".$kadi."' and  şifre='".$ksifre."'";
            $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());

           $y=0;
         while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_NUM) ){

           $_SESSION['adi']=$sonuc[1];
           $_SESSION['şifre']=$sonuc[2];
  //  echo "</br> id:".$sonuc[0].' </br>kullancı  adi: '.$sonuc[1].' </br>şifresi: '.$sonuc[2].'</br> mail  adresi :'.$sonuc[3].'<br>';
}
           mysqli_close($this->icon);
     }

}

    $dt =new islemler();
 //$dt->conarray=array($host,$user,$password);
//$dt->tarray = array("sayfa","select *  from ");
//$dt->listleme();
//$dt->tarray = array("yorumlar","select *  from ");
//$dt->listleme();
//$dt->tarray = array("menu","select *  from ");
//$dt->listleme();
$dt->conarray=array($host,$user,$password);


?>
