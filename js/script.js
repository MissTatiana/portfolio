jQuery(document).ready(function ($) {

console.log('testing');

/* PARALLAX
**********************************************/

//initialize stellar.js
$(window).stellar();

//Variables
var links = $('.navigation').find('li');
var slide = $('.slide');
var button = $('.button');
mywindow = $(window);
htmlbody = $('html,body');

//Setup waypoints plugin
slide.waypoint(function (event, direction) {

	//cache var of data-slide assoc w/ each slide
	dataslide = $(this).attr('data-slide');

	//change the status of the navigation based on scroll
	if(direction === 'down') {
		$('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
	}
	else {
		$('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
	}

});//slide.waypoint

});

