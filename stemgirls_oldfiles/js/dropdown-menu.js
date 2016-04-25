$(document).ready(function(){

	$('.dropdown').hover(function() {
	                        
		$(this).find('.sub-navigation').slideToggle(); 
	});

	$('.slideout').hover(function() {
	                        
		$(this).find('.sub-navigation').slideToggle(); 
	});
	  	
});

