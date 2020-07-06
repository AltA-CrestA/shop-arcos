$(function () {
	'use strict';
	$('#buttonFilterMini, .filter__content__title').click(function () {
		$('.filter').toggleClass('open');
		$('body').toggleClass('lock');
	});
});
