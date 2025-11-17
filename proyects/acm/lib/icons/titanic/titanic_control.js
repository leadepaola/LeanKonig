 
 var titanic = new Titanic({    
 	hover: false,    
 	click: true,  
 });
 


$('.drag-target').click(function(){
	titanic.off('menu-close');
});

