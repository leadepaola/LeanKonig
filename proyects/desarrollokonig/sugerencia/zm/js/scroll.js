

var header         = document.getElementById("header");
var content_0         = document.getElementById("content_0");

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
  	header.style.opacity = "1";
    //content_0.style.opacity = "0.75";

  }
  else{
  	header.style.opacity = "0.6";
    //content_0.style.opacity = "1";
  }

  //SI se ejecuta scroll, lo pone en 0 de inmediato:
  //console.log("hola");
  //document.getElementsByTagName("body")[0].scrollTop = 0 ;
  
}