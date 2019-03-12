/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


             document.getElementById("ozn").addEventListener("click",yn);
             //   document.getElementById("pihtml").addEventListener("select",sek());
                function yn(){
                   var adr= document.getElementById("adr").innerHTML;
                   alert(adr);
                    window.open("../"+adr,"_blank");
                }

                var diz = new Array();
                var adiz = new Array();
           /*  var obj=document.getElementById("altbody").childNodes;
               for(r=0;r<obj.length;r++){
                 // alert(obj[r].id);
                 diz[r]=obj[r].id;
               }*/
              for(s=0;s<diz.length;s++){
                   var sobj=document.getElementById(diz[s]).childNodes;
                   for(i=0;i<sobj.length;i++){

                        if(sobj[i].id=="" || sobj[i].id=="undefined"){
                            sobj[i].id="yn"+i+"";
                        }
                       adiz[i]=sobj[i].id;
                     //alert(adiz[i]);
                     document.write(sobj[i].id+"</br>");
                       //  document.getElementById(adiz[i]).contentEditable="false";
                   }
                  document.write(diz[s]+"</br>");

                // document.getElementById(diz[s]).setAttribute("onclick", 'yap(this.id)');
             }
          
       //      document.getElementById("icerik").addEventListener("click",men);
          