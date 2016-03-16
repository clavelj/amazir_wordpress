jQuery(function($){
	$('#content-produit a').each(function(){
		
		
		var img = $(this);
		var bg = img.find('span.bg');
		var t = parseInt($('#content-produit a:first span.title').css('top'));		
		
		img.hover(function(){
			
		
			bg.stop().fadeTo(500, 0.6);
		
			$(this).find('span.title').css({
				opacity: 0,
				top:  t- 20	
			}).animate({
				opacity: 1,
				top: t
				}); 
				
			
		}, function(){
		
			bg.stop().fadeOut();
		
		});
	});
}); 


