@@include('jquery.js');
@@include('slick.min.js');
@@include('webp.js');
@@include('burger.js');

$(document).ready(function () {
	$('.slider').slick({
		arrows: true,
		dots: true,
		adaptiveHeight: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 1000,
	});
});
