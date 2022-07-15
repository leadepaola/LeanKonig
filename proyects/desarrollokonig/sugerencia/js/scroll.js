

var header         = document.getElementById("header");
var content_0      = document.getElementById("content_0");

var logo_header      = document.getElementById("logo_header");
var color_celeste    = document.getElementById("color_celeste");

var espacio         = document.getElementsByClassName("espacio");

var circulo_posicion    = document.getElementById("circulo_posicion");
var cc1    = document.getElementById("cc1");
var cc2    = document.getElementById("cc2");
var cc3    = document.getElementById("cc3");
var cc4    = document.getElementById("cc4");
var cc5    = document.getElementById("cc5");
 // var y = 0;


function scroll_en_0() {
  //var elmnt = document.getElementById("myDIV");
  //var x = elmnt.scrollLeft;
  //var y = elmnt.scrollTop;
  //document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
  //elmnt.scrollTop = 0;


  var y = document.getElementsByTagName("html")[0].scrollTop ;
  //console.log(y);





  if(document.getElementsByTagName("html")[0].scrollTop>100){
    header.style.height = "60px";
    header.style.borderBottom = "1px solid #d6d6d6";

    logo_header.style.fontSize = "32px";
    color_celeste.style.fontSize = "17px";
    espacio[0].style.fontSize = "11px";

      
  }


  if(document.getElementsByTagName("html")[0].scrollTop<=100){
    header.style.borderBottom = "0px solid #d6d6d6";
  	header.style.height = "130px";
    
    logo_header.style.fontSize = "65px";
    color_celeste.style.fontSize = "41px";
    espacio[0].style.fontSize = "24px";

    circulo_posicion.style.top = "0%";
   
  }








/*
  if(document.getElementsByTagName("html")[0].scrollTop>100&&document.getElementsByTagName("html")[0].scrollTop<1200){
    circulo_posicion.style.top = "25%"; 
    setTimeout(function(){            
      cc2.style.display = "none";
    },500);
  }

  if(document.getElementsByTagName("html")[0].scrollTop>1200&&document.getElementsByTagName("html")[0].scrollTop<2500){
    circulo_posicion.style.top = "50%";
    setTimeout(function(){            
      cc3.style.display = "none";
    },500);
    
  }
*/




  if(document.getElementsByTagName("html")[0].scrollTop>=350&&document.getElementsByTagName("html")[0].scrollTop<750){
    circulo_posicion.style.top = "25%"; 
    setTimeout(function(){            
      cc2.style.display = "none";
    },500);
  }


  if(document.getElementsByTagName("html")[0].scrollTop>=750&&document.getElementsByTagName("html")[0].scrollTop<1150){
    circulo_posicion.style.top = "50%"; 
    setTimeout(function(){ 
      cc2.style.display = "none";           
      cc3.style.display = "none";
    },500);
  }


  if(document.getElementsByTagName("html")[0].scrollTop>=1150&&document.getElementsByTagName("html")[0].scrollTop<1600){
    circulo_posicion.style.top = "75%"; 
    setTimeout(function(){  
      cc2.style.display = "none";           
      cc3.style.display = "none";          
      cc4.style.display = "none";
    },500);
  }

  if(document.getElementsByTagName("html")[0].scrollTop>=1600&&document.getElementsByTagName("html")[0].scrollTop<1800){
    circulo_posicion.style.top = "100%"; 
    setTimeout(function(){   
      cc2.style.display = "none";           
      cc3.style.display = "none";          
      cc4.style.display = "none";         
      cc5.style.display = "none";
    },500);
  }


  if(document.getElementsByTagName("html")[0].scrollTop>1800){
    contendor_linea_tiempo.style.opacity = "0"; 
    setTimeout(function(){            
      contendor_linea_tiempo.style.display = "none"; 
    },550);
  }






  //SI se ejecuta scroll, lo pone en 0 de inmediato:
  //console.log("hola");
  //document.getElementsByTagName("body")[0].scrollTop = 0 ;
  
}