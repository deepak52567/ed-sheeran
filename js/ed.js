$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	$('.hero-text').css({
		'transform' : 'translateY(' + wScroll/4 + '%)'
	});
	$('.hero-image').css({
		'transform' : 'translateY(-' + wScroll/5 + 'px)'
	});
	$('#page1').css({
		'transform' : 'translateY(' + wScroll/1.1 + '%)'
	});
	$('#page2').css({
		'transform' : 'translateY(' + wScroll/1.2 + '%)'
	});
});

$(window).scroll(function () {
	var windscroll = $(window).scrollTop();
	var dispvalue = ($(window).height()) - 70;
	if (windscroll >= dispvalue) {
		$('nav').toggleClass('nav-change', true);
	} else {
		$('nav').toggleClass('nav-change', false);
	}
});
