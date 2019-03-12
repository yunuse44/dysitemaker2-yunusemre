 <!DOCTYPE html>

<html>
    <head>
  <meta charset="UTF-8"/>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
include_once 'con.php';
include 'işlemler.php';

?>
     <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Poiret+One" rel="stylesheet"/>
<script type="text/javascript" >
function mobilkontrol() {
if( navigator.userAgent.match(/Android/i)
|| navigator.userAgent.match(/webOS/i)
|| navigator.userAgent.match(/iPhone/i)
|| navigator.userAgent.match(/iPad/i)
|| navigator.userAgent.match(/iPod/i)
|| navigator.userAgent.match(/BlackBerry/i)
|| navigator.userAgent.match(/Windows Phone/i)
){
return true;
}
else {
return false;
}
}
if (mobilkontrol()==true){
document.write('<link href="mb.css" rel="stylesheet" type="text/css"/>');
}
else if(mobilkontrol()==false) {
document.write(' <link href="sayfa.css" rel="stylesheet" type="text/css"/>');
 }
 mobilkontrol();
</script>

    <body >
      <div  id="hd" align="center">SİTEMAKER HOŞGELDİNİZ

      </div>

    <div class="gpaneli" id="gpaneli">

        <form action="index.php?id=giris" method="POST" enctype="multipart/form-data" id="frm">
            <input name="adi"  type="text" placeholder="adi" />
             <input name="sifre"  type="password"  placeholder="şifre" />
             <a href="#" onclick="document.getElementById('frm').submit();" >     <img src="../srs/kilit.svg" ></img></a>
        </form>


    </div>

  <?php
   ob_start();
    session_start();
    $id=$_GET["id"];
    if ($id=="çıkış"){

        session_destroy();

   echo '   <script type="text/javascript">    location.replace("index.php");</script>';
    }
     $dd=$_GET["id"];
   $adi=$_POST['adi'];
        $sifre=$_POST['sifre'];

    $dt->uye($adi,$sifre,"üyelik",$database);
  if (empty($_SESSION['adi'] and  $_SESSION['şifre'])) {
 //     echo 'lüften  giriş  yapın...';
      exit();



  }else {
     //    echo "</br> giriş yaptin sayın:" . $_SESSION['adi']."</br>";
 echo '   <script type="text/javascript">   document.getElementById("gpaneli").style.display="none";</script>';


  }




  ?>


        <div id="ana" align="center">

            <div  class="dr" style=" border-radius: 0px 0px 0px 10px;">
                <img src="../srs/oluştur.png" alt=""/></br>
             </br>
</br></br>
             </br> </br> </br>
             <b> Yeni  Bir  Proje Oluşturun </b> </br> </br> <input type="button" value="OLUŞTUR" id="olus" /> </div>
            <div   class="dr" style="border-radius: 0px 0px 10px 0px;">
                <img src="../srs/folder.png" />
                             </br>
</br></br>
             </br>              </br>
</br></br>

                <b>Kaldığınız  Yerden Devam Edin</br> </br><input type="button" value="DÜZENLE"  id="duzenle"/>   <div id="ogoster">  <div><span style="background: none;">YENİ PROJE</span><b >x</b></div> <form action="index.php?id=oluştur" method="POST">
                  Proje adı : <input id="adı" type="text" name="dadı">  <input type="submit" value="olustur" id="tm"  /> </form> </div>
            <div id="listele"> <div><span>Projelerim</span><b >x</b></div>
                <?php $dt->dlist() ?></div>
        </div>

        </div>
        <div id="alt">
            <div>Site  şablonları</div>
              <div>php eklentileri</div>
                <div>haberler</div>
        </div>
    <?php    // <div id="bir" onclick="yap(this.id)">  Div var olduğunda  olaylar</div> ?>






            <script type="text/javascript">
                document.getElementById("duzenle").addEventListener("click",duzenle);
   function ykpt() {
    document.getElementById("yekle").style.display="none";
}
function kaydet(){
 //   alert('fonksiyon çalısıyor');
    document.getElementById("frm").submit();
}
function duzenle (){
   // alert();
   var pc= document.getElementById("listele");
           pc.style.display="block";
    pcid=pc.id;
        nayarla(pcid);
}
function dkt (id){
    document.getElementById(id).style.display="none";
}





var sid ;
              function nayarla(deger1){


 var el= document.getElementById(deger1).getElementsByTagName("B")[0];
 var d=Math.random();
 el.id="kpt"+d;

 el.setAttribute("onclick", 'kpt("'+deger1+'")');

}

                var  nesne;
function yap(id){
  // alert(id);
document.getElementById("oz").style.display="block";
//document.getElementById("nekle").style.display="block";
document.getElementById("tkid").value=id;
document.getElementById("uyg").setAttribute("onclick", 'ts("'+id+'")');

document.getElementById(id).style.boxShadow="box-shadow: 1px 1px 35px white;";

document.getElementById("goleft").value= document.getElementById(id).offsetLeft;
  document.getElementById("gotop").value=document.getElementById(id).offsetTop;
   document.getElementById("hg").value=document.getElementById(id).offsetHeight;
 document.getElementById("wh").value=document.getElementById(id).offsetWidth ;
// document.getElementById("drm").style.display="none";



       var yrenk=document.getElementById(id).getAttribute("bgcolor");

      document.getElementById("clr").value=yrenk ;


   //document.getElementById("clr").value=
 document.getElementById(id).style.cursor="move";
  document.getElementById(id).style.resize="both";

    document.getElementById(id).style.overflow="auto";
  /*  document.getElementById("sil").setAttribute("silinecek",id);
     sid=document.getElementById("sil").getAttribute("silinecek");
document.getElementById("sil").setAttribute("onclick", 'sl("'+id+'")');*/
document.getElementById("drm").setAttribute("yer", '"'+id+'"');
var y1=document.getElementById(id).offsetLeft;
var y2=document.getElementById(id).offsetWidth ;
var y3=y1+y2;
var t1=document.getElementById(id).offsetTop;

//alert(y3);
//duzenle()
var yac=document.getElementById("ymen");
yac.style="left:"+y3+"px; top:"+t1+"px;display:block; position: absolute;";
var bas=yac.getElementsByTagName("B");
//alert(bas[0].innerHTML);
bas[2].style.display="none";
bas[0].setAttribute("onclick", 'dzl("'+id+'")');
bas[1].setAttribute("onclick", 'sl("'+id+'")');
bas[2].setAttribute("onclick", 'tm("'+id+'")');
    }
    function tm(id){
        //alert(id)
        document.getElementById(id).contentEditable="false";
        document.getElementById("ymen").style.display="none";
        document.getElementById("sayfahtml").innerHTML=document.getElementById("altbody").innerHTML;
    }
        function dzl(id){
      //  alert(id)
        document.getElementById(id).contentEditable="true"
         //document.getElementById("ymen").style.display="none";
      var bss=   document.getElementById("ymen").getElementsByTagName("B");
      bss[0].style.display="none";
      bss[1].style.display="none";
      bss[2].style.display="block";

    }
    function sl(id){
        //alert(id)
         var slk=document.getElementById(id);
         document.getElementById("altbody").removeChild(slk);
         document.getElementById("sayfahtml").innerHTML=document.getElementById("altbody").innerHTML;
         document.getElementById("ymen").style.display="none";
    }


function ts(id1){
    nesne=document.getElementById(id1);
//  alert(id1);
    var lft=document.getElementById("goleft").value+"px";
var tp=document.getElementById("gotop").value+"px";
var aclr=document.getElementById("clr").value;
var wh=document.getElementById("wh").value+"px";
var hg=document.getElementById("hg").value+"px";

 nesne.style.left=lft;
nesne.style.top=tp;
nesne.style.backgroundColor=aclr;
nesne.style.height=hg;
nesne.style.width=wh;
  var renk= document.getElementById("clr").value;
  //alert(nesne);
        nesne.setAttribute("bgcolor",renk);
document.getElementById("sayfahtml").innerHTML=document.getElementById("altbody").innerHTML;
 document.getElementById("nekle").style.display="none";
 document.getElementById("drm").style.display="block";
 var css="";
 var say=document.getElementById("altbody").children;
 //alert(say);
 for(i=0;i<say.length;i++){
  css=css+"#"+say[i].id+"{"+say[i].getAttribute("style")+"}";
 //say[i].style="

 }
// alert(css);
 document.getElementById("sayfacss").innerHTML=css;


}


function ac(panel,yer){
        // var pc= document.getElementById("ikod");
          // pc.style.display="block";

      var penac=document.getElementById(panel).getAttribute("panel");
    //  alert(penac);
      document.getElementById(penac).style.display="block";

            pcid=penac;
      //     alert(pcid);
        nayarla(pcid);


}

function kkod (){
   var pc= document.getElementById("ikod");
           pc.style.display="block";
            pcid=pc.id;
        nayarla(pcid);
}


function ols(){
var pc=document.getElementById("ogoster");
        pc.style.display="block";
        pcid=pc.id;
        nayarla(pcid);

    }
function kpt(a){
    var sl=document.getElementById("olustur");

   if(sl===null){document.getElementById(a).style.display="none";
   return;}
  else {
 document.getElementById(a).removeChild(sl);
 document.getElementById(a).style.display="none";
  }
}


   var diz = new Array();
        function gst(id){


var ds=document.getElementById(id).getAttribute("d");
 // alert(ds);
  document.getElementById(ds).style.display="block";
  var yeni=document.createElement("input");
  yeni.id="yeni";
  yeni.type="hidden";
  yeni.value=ds;
  document.getElementById(ds).appendChild(yeni);
}

        </script>
           <script src="drag.js" type="text/javascript"></script>
         <?php


      if($id=="oluştur"){


           echo '   <script type="text/javascript">  '
          . ' document.getElementById("ana").style.display="none";'
                   . ' document.getElementById("alt").style.display="none";  '
                   .'</script> ';
$isim=$_POST["dadı"];
            $dt->volus($isim);

      }elseif ($id=="kaydet") {


          echo 'görev tamamlanmıstır</br>';
          include 'kaydet.php';

}

$d=$_GET["düzenle"];
      if(!$d==""){
          //echo 'dosya adi:'.$d.'</br>';

           echo '   <script type="text/javascript">  '
          . ' document.getElementById("ana").style.display="none";'
                   . ' document.getElementById("alt").style.display="none";  '

                   . '  document.getElementById("hs").style.display="none";'

                   . '</script> ';
echo '<div class="men">' ;
 $dt->conarray=array($host,$user,$password,$d,"SHOW TABLES FROM $d");
 $dt->tliste();
       echo '<li id="scopy" class="ls"  onclick="xcopy(this.id)" www="+-+*+'.$d.'">yayınla</li> ';
        echo '<li  class="ls"   onclick="ot_kpt()" style="padding:2px;"> <img src="../srs/kkilit.svg" width="40"/></li> ';
echo '</div>';
$mn= explode("+", $dt->gst);
//var_dump($mn);

for($i=1;$i<count($mn);$i++)
{
   // echo "<b>".$mn[$i].'</b></br>';
               echo '<div class="link" id="'.$mn[$i].'1">';
  $dt->sduzenle($d,"select  * from ".$mn[$i],$mn[$i]);
  echo '</div>';
}
   }
$sduz=$_GET["sduzenle"];
    if(!$sduz==""){
      //    echo 'dosya adi:'.$sduz.'</br>';

           echo '   <script type="text/javascript">  '
          . ' document.getElementById("ana").style.display="none";'
                   . ' document.getElementById("alt").style.display="none";  '
                   . 'document.getElementById("drm").style.display="block"; '
                   . '  document.getElementById("hs").style.display="none";'

                   . '</script> ';

           $bl= explode(" ",$sduz);
                $dt->html($bl[0],$bl[1],$bl[2],$bl[3]);
                if($bl[1]=="linkler"  || $bl[1]=="kate" ){
                  //      $dt->html($bl[0],$bl[1],$bl[2],$bl[3]);
                 $dt->sec($bl[0],"sayfa","id,title","gz");
             echo ' <script type="text/javascript"> var goster=new Array(); goster[0]="gz"; </script>';

                      $dt->sec($bl[0],"menü","id,adi","gz1");
              echo ' <script type="text/javascript">  goster[1]="gz1"; </script>';

                }

    }
$g=$_GET["guncelle"];

 if(!$g==""){
     $gb= explode(" ", $g);
      echo 'tablo adı:'.$gb[1].'</br>';
       $dt->guncelle($gb[0],$gb[1],$gb[2]);
           echo '   <script type="text/javascript">  '
          . ' document.getElementById("ana").style.display="none";'
                   . ' document.getElementById("alt").style.display="none";  '
                   . 'document.getElementById("drm").style.display="block"; '
                   . '  document.getElementById("hs").style.display="none";'

                   . '</script> ';

 }
 $tekle=$_GET["tekle"];
  if(!$tekle==""){
     $gb= explode(" ", $tekle);
      echo 'tablo adı:'.$gb[1].'</br>';
       $dt->yhtml($gb[0],$gb[1]);
           echo '   <script type="text/javascript">  '
          . ' document.getElementById("ana").style.display="none";'
                   . ' document.getElementById("alt").style.display="none";  '
                   . 'document.getElementById("drm").style.display="block"; '
                   . '  document.getElementById("hs").style.display="none";'

                   . '</script> ';

                   $bl= explode(" ",$tekle);
                        var_dump($bl);
                        if($bl[1]=="linkler"  || $bl[1]=="kate" ){
                          //      $dt->html($bl[0],$bl[1],$bl[2],$bl[3]);
                         $dt->sec($bl[0],"sayfa","id,title","gz");
                     echo ' <script type="text/javascript"> var goster=new Array(); goster[0]="gz"; </script>';

                              $dt->sec($bl[0],"menü","id,adi","gz1");
                      echo ' <script type="text/javascript">  goster[1]="gz1"; </script>';

                        }

 }
  $kaydet=$_GET["kaydet"];
  if(!$kaydet==""){
     $gb= explode(" ", $kaydet);
      echo 'tablo adı:'.$gb[1].'</br>';
       $dt->ykaydet($gb[0],$gb[1]);
           echo '   <script type="text/javascript">  '
          . ' document.getElementById("ana").style.display="none";'
                   . ' document.getElementById("alt").style.display="none";  '
                   . 'document.getElementById("drm").style.display="block"; '
                   . '  document.getElementById("hs").style.display="none";'

                   . '</script> ';

 }

   ?>
       <script type="text/javascript">


                       var link = document.getElementsByClassName("link");
                       function lac(id){


// alert(id);
var acc=document.getElementById(id).getAttribute("ac");
  for (i = 0; i < link.length; i++) {
    diz[i]=link[i].id;

         document.getElementById(diz[i]).style="display: none";

         }

     document.getElementById(acc).style="display: block";
}








function change(id){
  var veri=  document.getElementById(id).value;
  var bl=veri.split("|");
  alert(id);

  var ds=document.getElementById("yeni").value;
  alert(ds);
  if(ds==="gz1"){
       document.getElementById("m_id").value=bl[0];
  } else if(ds==="gz"){
         document.getElementById("adi").value=bl[1];

 document.getElementById("link").value=""+bl[1];
document.getElementById("icerik").value="sayfa:id:"+bl[0];

        //   document.getElementByIdv("icerik").value;
  }

 // document.getElementById("adi").value=bl[1];

    document.getElementById(ds).style.display="none";

   document.getElementById(ds).removeChild(document.getElementById("yeni"));
}
function sil(id){
    alert(id);
  var veri=  document.getElementById(id).getAttribute("veri");
  var yeniveri="id="+veri;
  alert(veri);
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Action to be performed when the document is read;
          document.getElementById("hd").style.display="block";
   document.getElementById("hd").innerHTML= this.responseText;    }
};
       xhttp.open("POST", "delete.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.send(yeniveri);
}


function xcopy(id){

   var veri= document.getElementById(id).getAttribute("www");
   var yveri=veri.split("_");
      alert(yveri[1]);
var yveri="db="+yveri[1];
   alert(yveri);
   var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Action to be performed when the document is read;
          document.getElementById("hd").style.display="block";
   document.getElementById("hd").innerHTML= this.responseText;    }
};
       xhttp.open("POST", "xcopy.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.send(yveri);
}


     function ot_kpt(){


         location.replace("index.php?id=çıkış");
       }
       </script>
           <script src="../tinymce/js/tinymce/tinymce.js" type="text/javascript"></script>
  <script>

  tinymce.init({
  selector: '#html',
  width : "100%",
   language_url : '../tinymce/js/tinymce/langs/tr.js' ,
 directionality : 'tr',
  event_root: '#root',
  theme: 'modern',
  plugins: 'print preview fullpage searchreplace autolink directionality autosave code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  spellchecker imagetools media  link contextmenu colorpicker textpattern ',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code | fullscreen ',
  image_advtab: true,
    extended_valid_elements : 'a[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name |onclick]',
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ]

 });

  </script>

    </body>
</html>
