$(function() {

	var counter = 0;
	$('.sites').click(function() {
		counter++;

		if(counter % 2 === 0 ) {
			$(this).removeClass('large-12');
			$(this).addClass('large-4');
		} else {
			$(this).removeClass('large-4');
			$(this).addClass('large-12');
		}
	});

});