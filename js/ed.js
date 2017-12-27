$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	$('.hero').css({
		'transform' : 'translateY(-' + wScroll/20 + '%)'
	});
	$('.hero-text').css({
		'transform' : 'translateY(' + wScroll/10 + '%)'
	});
	$('.hero-image').css({
		'transform' : 'translateY(-' + wScroll/7 + 'px)'
	});
	$('#page1').css({
		'transform' : 'translateY(' + wScroll/1 + '%)'
	});	
	$('#page2').css({
		'transform' : 'translateY(' + wScroll/3 + '%)'
	});		
});
