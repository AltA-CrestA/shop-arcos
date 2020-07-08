$(document).ready(function () {
	$('.header__burger, .header__content-menu a').click(function (event) {
		$('.header__burger, .header__content-menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
