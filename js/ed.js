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
  //
	// if(wScroll > $('.latest-news').offset().top - 350) {
	// 	$('.web-grid-container .item').each(function(i){
	// 		setTimeout(function(){
	// 			$('.web-grid-container .item').eq(i).addClass('trans-left');
	// 		}, 150 * (i+1));
	// 		$('.filler-button').addClass('button-reveal');
	// 	});
	// }
  //
	// if(wScroll > $('.photos-grid').offset().top - 350) {
	// 	$('.web-grid-container iframe').each(function(i){
	// 		setTimeout(function(){
	// 			$('.web-grid-container iframe').eq(i).addClass('trans-left');
	// 		}, 150 * (i+1));
	// 	});
	// }
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

function ytVideoFetch(ytId){
	$('.fullscreen-player').css('display', 'flex');
	$('.fullscreen-player').append('<iframe class="main-player" src="https://www.youtube.com/embed/' + ytId + '" frameborder="0" allowfullscreen></iframe>');
}

// $('.nav-on-click').click(function(){
// 	var anchor_link = null;
// 	anchor_link = location.hash;
// 	anchor_link = anchor_link.slice(1);
// 	$('main').load(anchor_link + '.php');
// });
// function domupdate() {
// 	$('main').load('tour.php');
// }
