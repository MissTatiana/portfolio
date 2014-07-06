/*
 * Tatiana Kerick - Portfolio
 * Author: Tatiana Kerick 2014
*/

jQuery(document).ready(function ($) {

// STICKY NAVIGATION
$(window).bind('scroll', function() {
	var navHeight = $( window ).height() - 70;
	if ($(window).scrollTop() > navHeight) {
		$('nav').addClass('fixed');
	}
	else {
		$('nav').removeClass('fixed');
	}
});//sticky


// PARALLAX
$(window).stellar();

//Cache some variables
var links = $('.navigation').find('li');
var slide = $('.slide');
var button = $('.button');
mywindow = $(window);
htmlbody = $('html,body');

slide.waypoint(function (event, direction) {

	dataslide = $(this).attr('data-slide');

	if(direction === 'down') {
		$('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
	}
	else {
		$('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
	}

}); //waypoint function

});//document

