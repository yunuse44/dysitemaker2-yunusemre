<?php
 //error_reporting(E_ALL);
//ini_set("display_errors", 1);
//  onclick="'.$satır1[5].'";

 class lt {
     public  $tarray = Array ();
     public $conarray = Array();
     public $icon;
     public $marray= Array();
      public $mcss= Array();
      public $sy;
      public  $seo = Array();
      public $yorum;
              function  men ($t)
    {  // echo $t."tablo </br>".$s."şart</br>";
                 $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$this->conarray[3]) or die(mysqli_error());
                    mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET utf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );



$sorgu1= mysqli_query($this->icon, $t) or die(mysqli_error());

$z=0;

 while ( $satır1= mysqli_fetch_row($sorgu1)) {
     $this->marray[$z]=$satır1[0];
     $this->mcss[$z]=$satır1[1];
 // echo "<b style='color:black;'>" . $this->marray[$z]."</b></br>";
 //   echo "<b style='color:black;'>class:" . $this->mcss[$z]."</b></br>";
  $z++;
 }
 $this->sy= count($this->marray);
echo  "</div>";
    }
               function  mlist ($t,$cs)
    {  // echo $t."tablo </br>".$s."şart</br>";

                 $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$this->conarray[3]) or die(mysqli_error());
                    mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET utf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );



$sorgu1= mysqli_query($this->icon, $t) or die(mysqli_error());

     echo '<div class="'.$cs.'" id="'.$cs.'">';

 //echo '<li>'.$satır[1]."</li>  ";
 //    echo "<ul>";
 while ( $satır1= mysqli_fetch_row($sorgu1)) {
   if($satır1[4]==""){
        echo '<li><a    onclick="'.$satır1[5].'"  style="'.$satır1[6].'" aktif="'.$satır1[7].'" >'.$satır1[3].'</a></li>';
   }
   else {
   echo '<li><a href="'.$satır1[4].'"    onclick="'.$satır1[5].'"  style="'.$satır1[6].'" aktif="'.$satır1[7].'" >'.$satır1[3].'</a></li>';
   // echo "<b style='color:black;'>" .print_r($satır1)."</b></br>";
 }
 }

  echo "</div>";

    }

     function sayfa($i,$aid){

            $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$this->conarray[3]) or die(mysqli_error());
              mysqli_query($this->icon, "SET NAMES 'utf8'");
                mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                  mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );
                     $sql='select * from  kate  where adi="'.$i.'";';
                      $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
                     $k= mysqli_num_rows($sorgu);

                     if($k>0){
                           $sql='select * from  menü  where adi="'.$i.'";';
                             $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
                            $sid=mysqli_fetch_row($sorgu);
                  //   echo '<b>satır  id : '.$sid[0]."</br>";
                   //      echo '<b>  kategori sayısı'. $k. "</b>";
                       $sql='SELECT menü.id,linkler.m_id ,linkler.adi, linkler.link, linkler.icerik  FROM linkler,menü WHERE menü.id=linkler.m_id and  menü.id='.$sid[0].'';
                      $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());

                    //    $sy= count($satır);
                  //     echo '</br> m_id sayısı'.$sy;
        echo '<div id="alt1" css="alt1"><div id="kli">';
         while ( $satır=mysqli_fetch_row($sorgu)){
               echo '<li><a href="'.$satır[3].'">'.$satır[2].'</a></li>';
            }
         echo '</div></div>  ';
                     }
 else {
           $sql='select * from  sayfa where title="'.$i.'";';
     //    echo "</br>sorgu:". $sql;


                        $sorgu =  mysqli_query($this->icon, $sql) or die(mysqli_error());
           $satır=mysqli_fetch_row($sorgu);
           $y=0;
           while(      $sa= mysqli_fetch_field($sorgu)){
               $diz[$y]=$sa->name;
               $y++;
           }
   //  echo "</br> indis :".$i;
    //    print_r($satır);
  //print_r($diz);

           $sy= count($satır);
         //  echo '<div id="sözel"><div>'.$satır[4]."</div>";
           for ($s=0;$s<$sy;$s++){
               switch ($diz[$s]){
                 case "s_bas":
               $this->seo[3]=$satır[$s];
               if (!empty($this->seo[3])) {
                $yn=   explode(",", $this->seo[3]);
                $ys= count($yn);
                 echo '<div id="etiket" class="etiket"><span id="st" onclick="kp(this.id)" sid="etiket"> [+] </span> <span> Etiketler:</span> ';
               for($i=0;$i<$ys;$i++){
                 echo "<span>".$yn[$i]."</span>";
               }
                  echo '</div>';

               }
               break;
                case "html":

                    $this->seo[5]= '<div  id="'.$aid.'" css="'.$aid.'">'.$satır[$s].'</div>';
                    echo $this->seo[5];



            // echo '<div  id="'.$aid.'" css="'.$aid.'"> '.$satır[$s].'</div>';
             break;
                    case "m_key":
                   //    echo '       <script language="javascript" type="text/javascript"> alert("'.$diz[$s].'");</script>';
                        $this->seo[0]=$satır[$s];

                       echo '  <meta name="keywords" content="'. $this->seo[0].'"/>';
                        break;

                          case "m_acik":
                        $this->seo[1]=$satır[$s];
                            echo  ' <meta name="description" content="'.$this->seo[1].'"/>';
                        break;
                          case "title":
                        $this->seo[2]=$satır[$s];
                         echo "<title>".  $this->seo[2]."</title>";
                        break;

                        case "id":
                        $this->yorum=$satır[$s];
                        $this->seo[6]='<b id="sayfaid" style="display:none;">'.$this->yorum.'</b>';

               }
           }






            }

  $sql='SELECT  sayfa.id,yorumlar.sid,yorumlar.ad,yorumlar.yorum, yorumlar.y_durumu  FROM sayfa,yorumlar WHERE   sayfa.id=yorumlar.sid and  yorumlar.y_durumu="1"  and   yorumlar.sid="'.$this->yorum.'"  ';
        //    echo "sql  sorgusu:".$sql."</br>sayfa  id:".$this->yorum;
            $sorgu= mysqli_query($this->icon, $sql) or die(mysqli_error());
 $sayi=mysqli_num_rows($sorgu);
 //echo "satır sayısı:".$sayi."</br>";

echo '<div class="yorumlar"><b>yorumlar</b>';

            while ( $satır=mysqli_fetch_row($sorgu)){

          //    echo  "  yorum  sayısı".$sy." </b>";
                  echo '<div class="ysutun"><span> '.$satır[2].'</span> <p> '.$satır[3].'</p> </div>';
               }
               echo "</div>";
               if ($sayi==0) {
                 echo '   <script type="text/javascript">  '
                      . '  document.querySelector(".yorumlar").style.display="none";   </script>';
               }
          }

               function u_ekle($tablo){
              //  echo "</br><b>tablo adı:".$tablo."</b></br>";
$s=0;
                   foreach($_POST as $key => $value ){
            //   echo "name adı:".$key."= değeri:".$value;
                $deg[$s]="'".$value."',";
                $s++;
               }


 //mysqli_close($this->icon);
 //print_r($this->conarray);
          $this->icon= mysqli_connect($this->conarray[0],$this->conarray[1],$this->conarray[2],$this->conarray[3]) or die(mysqli_error());
            mysqli_query($this->icon, "SET NAMES 'utf8'");
              mysqli_query($this->icon, "SET CHARACTER SET lutf8'");
                mysqli_query($this->icon,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'" );

          $sql='select * from '.$tablo;
        //    echo "</br>sorgu:". $sql;


                            $sorgu =  mysqli_query($this->icon, $sql) or die("hata  oluştu");
               $satır=mysqli_fetch_row($sorgu);
               $y=0;
               while(      $sa= mysqli_fetch_field($sorgu)){
                 if($sa->name=="id" || $sa->name=="y_durumu"){continue;}
                 else {
                   $diz[$y]="`".$sa->name."`,";
            //       echo "<b>`".$sa->name."`</b></br>";
                   $y++;
                 }
               }

foreach ($deg as  $key => $value) {
  $sn1=$sn1.$value;
  // code...
}

 $us= strlen($sn1);
 $su=$us-3;
 $sn1=substr($sn1, 0, $su);
 $sn1=$sn1." ' ";

foreach ($diz as  $key => $value) {
$sn2=$sn2.$value;
// code...
}
$us= strlen($sn2);
$su=$us-1;
$sn2=substr($sn2, 0, $su);
//echo "birinci  değerler:".$sn1."</br>";
//echo "ikinci sütün  adaları:".$sn2."</br>";
$sql="insert into "."`".$tablo."`"."(".$sn2.") values (".$sn1.")";
//echo "</br>sql  sorgusu: </br>".$sql;
//   echo "</b></b>";
mysqli_query($this->icon,$sql ) or die(mysqli_error($this->icon)) ;

    echo "<h1>Mesajınız  iletildi   gerekli   dönüş   yapılcaktır </h1> </br>";
               }
    }



 $yeni =new lt();
 //$yeni->conarray=array($host,$user,$password);
// echo 'dosya  çağrıldı';
?>
