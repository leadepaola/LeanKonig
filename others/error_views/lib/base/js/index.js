






/*Mouse over sobre logo*/

$(".noup_logo_content").mouseover(function(){
    $(".noup_logo_tit").css("color",  "white");
    $(".noup_logo_tit").css("transition",  ".3s");
    
    $(".noup_logo_content").css("transition",  ".3s");
});



$(".noup_logo_content").mouseout(function(){
  $(".noup_logo_tit").css("color",  "rgb(228 228 228)");
});





$('.noup_logo_content').click(function(){
  window.location.href = "/";
});