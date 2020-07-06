$(document).ready(function () {
	$('.slider').slick({
		loop: true,
		arrows: true,
		dots: true,
		adaptiveHeight: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 1000,
		responsive: [
			{
				breakpoint: 976,
				settings: {
					loop: false,
					arrows: false,
				},
			}
		],
	});
});
