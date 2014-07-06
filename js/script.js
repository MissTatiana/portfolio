/*
 * Tatiana Kerick - Portfolio
 * Author: Tatiana Kerick 2014
*/

jQuery(document).ready(function ($) {

console.log('testing');

// STICKY NAVIGATION
$(window).bind('scroll', function() {
	var navHeight = $( window ).height() - 70;
	if ($(window).scrollTop() > navHeight) {
		$('nav').addClass('fixed');
	}
	else {
		$('nav').removeClass('fixed');
	}
});

});//document

