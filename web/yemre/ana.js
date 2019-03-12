function getir(){
    document.getElementById("a_men").innerHTML=document.getElementById("yuvarlak").innerHTML;
    document.body.removeChild(document.getElementById("yuvarlak"));
}
function yükle(){
 var veri =   document.getElementsByTagName("META");
 //alert(veri.length);
    for(i=0;i<veri.length;i++){
        document.getElementById("bd").innerHTML=document.getElementById("bd").innerHTML+"<b>"+veri[i].name+":"+veri[i].content+"</b></br>";
        setTimeout(kpt, 2000);
    }
}
function kpt(){
      document.getElementById("bd").style.display="none";
}
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
document.write(' <link href="ana.css" rel="stylesheet" type="text/css"/>');
 }
 function kp(id){
   //  alert(id);
    veri= document.getElementById(id).getAttribute("sid");
    // alert(veri);
     document.getElementById(veri).style.display="none";
 }



function render(frm,tablo){
  //alert(tablo);
    var  yt="";
  var a=document.getElementById(frm).children;
//  alert(a);
  for (var i = 0; i < a.length; i++) {
    var yn=a[i].name;
    var ny=a[i].value;
if (a[i].value=="") {
    document.getElementById("pano").innerHTML="boş  alanları  doldurun ";
    return;
}
     yt=yt+yn+"="+ny+"&";


  //  array[i];
  }
var son=yt.substr(0,yt.length-1);
son='"'+son+'"';
alert(son);
//  document.getElementById("yorum").innerHTML=yt;

  var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
      // Action to be performed when the document is read;
        // document.getElementById("hd").style.display="block";
  document.getElementById("pano").innerHTML=this.responseText;    }

};
      xhttp.open("POST", "son.php?t="+tablo, true);
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(son);

}

function panel(){
var  pano=  document.getElementById("pano");
pano.innerHTML="yeni  başlıyurz";
  var a=document.body.children;
  for (var i = 0; i < a.length; i++) {

    var ny=a[i].id;
if (a[i].id=="pano" || a[i].id=="alt1" ) {
  continue;
}
    a[i].style.display="none";


  //  array[i];
  }
}
  function yorum(){
  //  return alert("hazırlık  aşamasında");
  var sayid=document.getElementById("sayfaid");
  // alert(sayid.innerHTML);

    var thtml='<div style="float: left;"><span style="float: left; margin-right: 231px; padding: 45px;">iteli yazabilirsiniz: </span> <a border="0" id="olay"> <img src="../srs/send.png" /> </a></div>'+
    '<form id="i_gonder"><input name="sid" type="hidden"  value="'+sayid.innerHTML+'" /> <input name="ad" type="text" placeholder="adınızı  girin:" /> ' +
  '  <input name="eposta" type="text" placeholder="mail  adresi giriniz" />     <textarea style="width: 96%;" name="yorum" rows="10" placeholder="mesajınız  ekleyin"></textarea>  </form>';



    var pano=document.getElementById("pano");
  pano.innerHTML=thtml;

  pano.style.height="auto";
    pano.style.padding="10px";
  document.getElementById("olay").setAttribute('onclick', "render('i_gonder','yorumlar')");

}
