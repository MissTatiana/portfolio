$(function() {
	
	// /* logo
	// ---------------------------*/
	// $('#logo').hide()

	// $('#logo').fadeIn(1000);

	// $('#logo').animate({
	// 	top: '-=200'
	// }, 500);


	// /* tag images
	// ---------------------------*/
	// var designer = $('#designer');

	// designer.hide();
	// designer.delay(1500).fadeIn(10);
	// designer.animate({
	// 	top: '-=200'
	// });
	// designer.animate({
	// 	top: '+=80'
	// });
	// designer.animate({
	// 	top: '-=20'
	// });


	// var developer = $('#developer')

	// developer.hide();
	// developer.hide();
	// developer.delay(1700).fadeIn(10);
	// developer.animate({
	// 	top: '-=200'
	// });
	// developer.animate({
	// 	top: '+=80'
	// });
	// developer.animate({
	// 	top: '-=20'
	// });


	// var extraoddd = $('#extraodd')

	// extraoddd.hide();
	// extraoddd.hide();
	// extraoddd.hide();
	// extraoddd.delay(1900).fadeIn(10);
	// extraoddd.animate({
	// 	top: '-=200'
	// });
	// extraoddd.animate({
	// 	top: '+=80'
	// });
	// extraoddd.animate({
	// 	top: '-=20'
	// });


	// $('.h3').hide();
	// $('.h3').delay(2600).fadeIn(20);




	/* Portfolio hover
	--------------------------------*/
	$('.slide').hover(
		function() {
			$(this).find('.caption').slideDown(250);
		},
		function() {
			$(this).find('.caption').slideUp(250);
		}
	);



});







