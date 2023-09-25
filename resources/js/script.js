$('.page-scroll').on('click', function(e){


	var tujuan = $(this).attr('href');
	var elemenTujuan = $(tujuan);
	console.log(elemenTujuan.offset().top)
	$('html').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 700, 'swing')

	// console.log($('html').scrollTop())

	e.preventDefault();
});

//paralax

$(window).on('load', function(){
	$('.banner-judul').addClass('banner-judul-muncul');
});

$(window).scroll(function(){
	var scroll = $(this).scrollTop();
	if (scroll >= 0) {
		$('.nav').css({
			position:'fixed',top:'0',
		});
		}
	if (scroll >= 1133){
		$('.kotak1jenis').css('transform','scale(1)');

	}
	if (scroll >= 2304){
		$('.img-gallery').css('transform','scale(1)');

	}
	if (scroll >= 3104){
		$('.jarak').css('transform','scale(1)');

	}

})
