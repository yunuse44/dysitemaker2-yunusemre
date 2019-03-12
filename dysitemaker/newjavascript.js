/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function olustur(id,yerid,tg){
   alert(yerid);
   alert(id);

   var ipt= document.getElementById(id).getElementsByTagName("INPUT");
   var ndegisken=new Array();

   for(i=0;i<ipt.length-1;i++){
    ndegisken[i]=ipt[i];
  //alert( ndegisken[i].id);

   }
   if(yerid==null) {
  	yerid="altbody";
} else{
 alert(yerid);
}
  // var ehtml=document.getElementById("sayfahtml").innerHTML;
   //document.getElementById("sayfahtml").innerHTML=ehtml+"";
   var tag=id.substr(1,id.length);
  tag=tag.toUpperCase();
   //alert(tag);
 alert(yerid);

  var n1=  document.getElementById(ndegisken[0].id).value;
  var n2=document.getElementById(ndegisken[1].id).value;
   alert(n1);
   alert(n2);

 if(tag=="LINK") {
 tag="A";
      var n3=document.getElementById(ndegisken[2].id).value;
      var ynesne=document.createElement(tag);
    ynesne.setAttribute("id",n3);
 ynesne.setAttribute("href",n2);


alert(tag);
 }

      var ynesne=document.createElement(tag);
      var syle="position: absolute;left: 20px;width: 200px;height: 300px;z-index: 1;background-color: red";
    ynesne.setAttribute("id", n1);
   ynesne.setAttribute("class", n2);
 ynesne.setAttribute("style", syle);

ynesne.setAttribute("onclick", 'yap(this.id)');

    document.getElementById(yerid).appendChild(ynesne);
 document.getElementById(ynesne.id).innerHTML=n1;
      document.getElementById(ynesne.id).draggable = true;
       document.getElementById(ynesne.id).contenteditable="false";



}